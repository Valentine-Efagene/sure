<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    //['first_name', 'last_name', 'address', 'zip_code', 'country', 'state', 'receiver_bank_account_name', 'bank_name', 'amount', 'receiver_account_number', 'receiver_routing_number', 'receiver_bank_address', 'purpose'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'zip_code',
        'country',
        'state',
        'receiver_bank_account_name',
        'bank_name',
        'amount',
        'receiver_account_number',
        'receiver_routing_number',
        'receiver_bank_address',
        'purpose',
        'token',
        'type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
