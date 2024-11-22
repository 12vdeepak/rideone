<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RewardHistoryResource;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletHistory;
use App\Http\Resources\WalletHistoryResource;
use App\Models\Reward;
use App\Models\RewardActivation;
use App\Models\RewardHistory;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Razorpay\Api\Api;


class WalletController extends Controller
{
    public function saveWallet(Request $request)
    {

        $data = $request->all();
        $user_id = request()->user_id ?? auth()->user()->id;
        $data['user_id'] = $user_id;
        $wallet =  Wallet::firstOrCreate(
            [ 'user_id' => $user_id ]
        );
        if( $data['type'] == 'credit' ) {
            $total_amount = $wallet->total_amount + $data['amount'];
        }
        if( $data['type'] == 'debit' ) {
            $total_amount = $wallet->total_amount - $data['amount'];
        }
        $wallet->currency = $data['currency'];
        $wallet->total_amount = $total_amount;
        $message = __('message.save_form',[ 'form' => __('message.wallet') ] );
        try
        {
            DB::beginTransaction();
            $wallet->save();
            $data['balance'] = $total_amount;
            $data['datetime'] = date('Y-m-d H:i:s');
            $result = WalletHistory::updateOrCreate(['id' => $request->id], $data);
            DB::commit();
        } catch(\Exception $e) {
            DB::rollBack();
            return json_custom_response($e);
        }
        return json_message_response($message);
    }

    public function getWallatDetail(Request $request)
    {
        $user = auth()->user();
        $wallet_data = Wallet::where('user_id', $user->id)->first();
    
        if ($wallet_data == null) {
            $message = __('message.not_found_entry', ['name' => __('message.wallet')]);
            return json_message_response($message, 400);
        }
    
        $wallet_active = $user->wallet === 'Active'; 
    
        $min_amount_to_get_ride = SettingData('wallet', 'min_amount_to_get_ride') ?? 0;
        $activation_amt = SettingData('wallet', 'wallet_activation_charge') ?? 0;
    
        $response = [
            'wallet_data' => $wallet_data ?? null,
            'min_amount_to_get_ride' => (int) $min_amount_to_get_ride,
            'total_amount' => $wallet_data->total_amount,
            'isWalletActive' => $wallet_active,
            'activationAmt' => (int) $activation_amt,
            'message' => $wallet_active ? null : __('message.please_activate_your_wallet') 
        ];
    
        return json_custom_response($response);
    }

    // public function getRewards(Request $request)
    // {
    //     $user = auth()->user();
    //     $reward_data = Reward::where('user_id', $user->id)->first();
    
    //     if ($reward_data == null) {
    //         $message = __('message.not_found_entry', ['name' => __('message.rewards')]);
    //         return json_message_response($message, 400);
    //     }
    
    //     $response = [
    //         'reward_data' => $wallet_data ?? null, 
    //     ];
    
    //     return json_custom_response($response);
    // }

    public function getList(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'rider' && $user->wallet !== 'Active') {
            return json_custom_response([
                'pagination' => [],
                'data' => [],
                'wallet_balance' => null
            ]);
        }
        $wallet = WalletHistory::myWalletHistory();
        $wallet->when($request->has('user_id') && !empty($request->user_id), function ($q) use ($request) {
            return $q->where('user_id', $request->user_id);
        });
        $per_page = config('constant.PER_PAGE_LIMIT');
        if ($request->has('per_page') && !empty($request->per_page)) {
            if (is_numeric($request->per_page)) {
                $per_page = $request->per_page;
            }
    
            if ($request->per_page == -1) {
                $per_page = $wallet->count();
            }
        }
    
        $wallet = $wallet->orderBy('id', 'desc')->paginate($per_page);
        $items = WalletHistoryResource::collection($wallet);
    
        $wallet_data = Wallet::where('user_id', $user->id)->first();
    
        $response = [
            'pagination' => json_pagination_response($items),
            'data' => $items,
            'wallet_balance' => $wallet_data
        ];
    
        return json_custom_response($response);
    }
    public function getRewards(Request $request)
    {
        \Log::info('getRewards method started');
    

        $user = auth()->user();
    
        if (!$user) {
            \Log::error('User not found');
            return response()->json(['message' => 'User not found'], 404);
        }
    
        // Retrieve the activation amount from settings
        $activationAmount = Setting::where('key', 'reward_activation_charge')->first();
    
        if (!$activationAmount) {
            \Log::error('Activation amount not found in settings');
            return response()->json(['message' => 'Activation amount not found'], 500);
        }
    
        $amount = $activationAmount->value;
        \Log::info('Activation Amount: ' . $amount);
    
        // Check if rewards are active
        if ($user->rewards !== 'Active') {
            // Create order on Razorpay API
            $razorpayResponse = $this->createRazorpayOrder($amount);
    
            if ($razorpayResponse && isset($razorpayResponse['id'])) {
                return response()->json([
                    'message' => 'Reward is not active',
                    'order_id' => $razorpayResponse['id'],
                    'activation_amount' => (int)$amount, 
                ], 201);
            }
    
            \Log::error('Failed to create order with Razorpay');
            return response()->json(['message' => 'Failed to create order'], 500);
        }
    
        // Proceed with fetching reward history
        $reward = RewardHistory::myRewardHistory();
        $reward->when($request->has('user_id') && !empty($request->user_id), function ($q) use ($request) {
            return $q->where('user_id', $request->user_id);
        });
    
        // Pagination setup
        $per_page = config('constant.PER_PAGE_LIMIT');
        if ($request->has('per_page') && !empty($request->per_page)) {
            if (is_numeric($request->per_page)) {
                $per_page = $request->per_page;
            }
    
            if ($request->per_page == -1) {
                $per_page = $reward->count();
            }
        }
    
        $wallet = $reward->orderBy('id', 'desc')->paginate($per_page);
        $items = RewardHistoryResource::collection($wallet);
        
        $reward_data = Reward::where('user_id', $user->id)->first();
    
        $response = [
            'pagination' => json_pagination_response($items),
            'data' => $items,
            'reward_balance' => $reward_data,
            'activation_amount' => $amount, 
        ];
    
        return json_custom_response($response);
    }
    
    private function createRazorpayOrder($amount)
    {
        $apiKey = env('RAZORPAY_KEY_ID');
        $apiSecret = env('RAZORPAY_KEY_SECRET');
    
        $client = new \GuzzleHttp\Client();
        try {
            \Log::info('Creating Razorpay Order with amount: ' . ($amount)); // Log amount in paise
    
            $response = $client->post('https://api.razorpay.com/v1/orders', [
                'auth' => [$apiKey, $apiSecret],
                'json' => [
                    'amount' => $amount * 100, // Razorpay expects amount in paise
                    'currency' => 'INR',
                ],
            ]);
    
            \Log::info('Razorpay response: ' . $response->getBody());
    
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            \Log::error('Razorpay Order Creation Error: ' . $e->getMessage());
            return null; // Return null to indicate failure
        }
    }

    public function walletActive(Request $request)
    {
        $amount = $request->amount;
        $razorpayResponse = $this->createRazorpayOrder($amount);
    
        if ($razorpayResponse && isset($razorpayResponse['id'])) {
            return response()->json([
                'order_id' => $razorpayResponse['id'],
                'amount' => (int)$amount, 
            ], 200);
        }
    }
    
    
    
    
    // public function getRewards(Request $request)
    // {
    //     $user = auth()->user();
      
    //     $reward_data = Reward::where('user_id', $user->id)->first();
        
    //     if (!$reward_data || $reward_data->status !== 'Active') {
    //         return json_custom_response([
    //             'pagination' => [],
    //             'data' => [],
    //             'reward_data' => [
    //                 'amount' => '0',
    //                 'balance' => '0'
    //             ]
    //         ]);
    //     }
    
    //     $per_page = config('constant.PER_PAGE_LIMIT');
    //     if ($request->has('per_page') && !empty($request->per_page)) {
    //         if (is_numeric($request->per_page)) {
    //             $per_page = (int)$request->per_page;
    //         }
        
    //         if ($request->per_page == -1) {
    //             $per_page = Reward::where('user_id', $user->id)->count();
    //         }
    //     }
    
    //     $wallet = Reward::where('user_id', $user->id)
    //                     ->orderBy('id', 'desc')
    //                     ->paginate($per_page);
    //     $items = RewardHistoryResource::collection($wallet);
    
    //     $total_amount = (string) $wallet->sum('amount');
    //     $total_balance = (string) $wallet->sum('balance');
    
    //     $reward_data->amount = $total_amount;
    //     $reward_data->balance = $total_balance;
    
    
    //     $response = [
    //         'pagination' => json_pagination_response($wallet),
    //         'data' => $items,
    //         'reward_data' => $reward_data
    //     ];
    
    //     return json_custom_response($response);
    // }

    // public function rewardActivation(Request $request)
    // {
    //     // Validate the incoming request
    //     $validator = Validator::make($request->all(), [
    //         'amount' => 'required|numeric|min:0',
    //         'payment_id' => 'required|string'
    //     ]);
    
    //     if ($validator->fails()) {
    //         return response()->json([
    //             'errors' => $validator->errors(),
    //             'message' => __('message.validation_error')
    //         ], 422);
    //     }
    
    //     $requestAmount = (float) $request->amount;
    
    //     // Get the threshold value from settings
    //     $thresholdValue = Setting::where('key', 'reward_activation_charge')->value('value');
    
    //     if ($thresholdValue === null) {
    //         return response()->json(['message' => 'Activation threshold not found'], 500);
    //     }
    
    //     $thresholdValue = (float) $thresholdValue;
    
    //     if ($requestAmount < $thresholdValue) {
    //         return response()->json(['message' => 'Amount below threshold'], 400);
    //     }
    
    //     DB::beginTransaction();
    
    //     try {
    //         // Get the authenticated user
    //         $user = User::find(auth()->user()->id);
    
    //         if (!$user) {
    //             return response()->json(['message' => 'User not found'], 404);
    //         }
    
         
    
    //         // Update user's reward status
    //         $user->rewards = 'Active'; // Set reward status to "Active"
    //         $user->save();
    
          
    
    //         DB::commit();
    
    //         return response()->json(['message' => 'Reward Status Updated'], 200);
    
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    
    //         \Log::error($e->getMessage()); // Log the error message
    //         return response()->json(['message' => __('message.transaction_failed')], 500);
    //     }
    // }


    public function rewardActivation(Request $request)
    {
        // Validate the request inputs
        $validator = Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
            'payment_id' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'message' => __('message.validation_error')
            ], 422);
        }
    
        // Get the request amount in rupees
        $requestAmount = (float) $request->amount; // Amount is in rupees
    
        // Fetch the threshold value for activation
        $thresholdValue = Setting::where('key', 'reward_activation_charge')->value('value');
    
        if ($thresholdValue === null) {
            return response()->json(['message' => 'Activation threshold not found'], 500);
        }
    
        $thresholdValue = (float) $thresholdValue; // Ensure this is in rupees
    
        // Check if the request amount meets the threshold
        if ($requestAmount < $thresholdValue) {
            return response()->json(['message' => 'Amount below threshold'], 400);
        }
    
        $isValidPayment = $this->verifyRazorpayPayment($request->payment_id, $requestAmount);
    
        if (!$isValidPayment) {
            return response()->json(['message' => 'Invalid payment'], 400);
        }
    
        DB::beginTransaction();
    
        try {
            $user = User::find(auth()->user()->id);
    
            if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }
    
            // Update user rewards
            $user->rewards = 'Active'; 
            $user->save();
    
            // Save to reward_activation table
            RewardActivation::create([
                'user_id' => $user->id,
                'payment_id' => $request->payment_id,
                'amount' => $requestAmount,
                'activated_at' => now(), // Use current date and time
            ]);
    
            DB::commit();
    
            return response()->json(['message' => 'Reward Status Updated'], 200);
    
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error($e->getMessage());
            return response()->json(['message' => __('message.transaction_failed')], 500);
        }
    }
    
    private function verifyRazorpayPayment($paymentId, $amount)
    {
        $apiKey = env('RAZORPAY_KEY_ID');
        $apiSecret = env('RAZORPAY_KEY_SECRET');
        $api = new Api($apiKey, $apiSecret);
    
        try {
            \Log::info('Verifying payment ID: ' . $paymentId);
    
            $payment = $api->payment->fetch($paymentId);
            \Log::info('Fetched payment details:', (array) $payment);
    
            // Log the amount being checked
            \Log::info('Amount being checked (in rupees):', ['amount' => $amount]);
    
            if ($payment->status === 'captured') {
                // Convert Razorpay amount from paise to rupees for comparison
                $actualAmount = $payment->amount / 100;
    
                // Use a tolerance for floating-point comparison
                if (abs($actualAmount - $amount) < 0.01) {
                    return true;
                } else {
                    \Log::error("Amount mismatch: expected " . $amount . " but got " . $actualAmount);
                }
            } else {
                \Log::error("Payment status is not captured: " . $payment->status);
            }
        } catch (\Exception $e) {
            \Log::error('Razorpay payment verification error: ' . $e->getMessage());
        }
    
        return false;
    }
    
    
    
    
    
    
    
    
    
    
   
}