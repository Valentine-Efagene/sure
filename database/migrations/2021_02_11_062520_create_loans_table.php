<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('income_source');
            $table->string('annual_income');
            $table->string('credit_score');
            $table->string('employer')->nullable();
            $table->string('company');
            $table->string('company_address');
            $table->string('company_reg')->nullable();
            $table->string('zip_code');
            $table->string('state');
            $table->string('purpose');
            $table->float('amount');
            $table->string('note')->nullable();
            $table->string('payment_method');
            $table->enum('status', [
                'ACTIVE',
                'PAID',
                'PENDING',
                'DECLINED'
            ])->default('PENDING');
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
