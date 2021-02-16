<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',

        'account_name',
        'display_password',
        'account_number',
        'social_security_number',
        'routing_number',
        'gender',
        'state',
        'postal_code',
        'address',
        'password',
        'display_password',
        'token',
        'n_token_usage',
        'n_token_success',
        'status',
        'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function loan()
    {
        return $this->hasMany(Loan::class);
    }

    public function transfer()
    {
        return $this->hasMany(Transfer::class);
    }
}
