<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from('102930495069');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password')->nullable();

            $table->string('account_number')->nullable();
            $table->string('social_security_number')->nullable();
            $table->string('routing_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('display_password')->nullable();
            $table->integer('n_token_usage')->default('0');
            $table->string('token')->nullable();
            $table->integer('n_token_success')->default('0');
            $table->enum('status', [
                'PENDING',
                'ACTIVE',
                'SUSPENDED'
            ])->default('PENDING');
            $table->string('photo')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
