<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardHistory extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'type','payment_id', 'transaction_type', 'currency', 'amount', 'balance', 'datetime', 'ride_request_id', 'description', 'data' ];


    public function scopemyRewardHistory($query)
    {
        $user = auth()->user();
        $query = $query->where('user_id', $user->id);
        return  $query;
    }
}
