<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'income_source', 'annual_income', 'credit_score', 'employer', 'company', 'company_address', 'company_reg', 'zip_code', 'state', 'purpose', 'amount', 'note', 'payment_method'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
