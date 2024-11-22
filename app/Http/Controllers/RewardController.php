<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function changeStatus($id)
    {
        $reward = Reward::find($id);
        
        if ($reward) {
            $reward->status = ($reward->status === 'Active') ? 'Inactive' : 'Active';
            
            $reward->save();
        }
        
        // Redirect back or to a specific page
        return redirect()->back()->with('status', 'Reward status updated!');
    }
}
