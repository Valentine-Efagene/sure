<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('receiver_bank_account_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->float('amount');
            $table->string('receiver_account_number')->nullable();
            $table->string('receiver_routing_number')->nullable();
            $table->string('receiver_bank_address')->nullable();
            $table->string('purpose')->nullable();
            $table->string('token')->nullable();
            $table->enum('type', ['CREDIT', 'DEBIT']);
            $table->enum('status', ['PENDING', 'SUCCESSFUL', 'FAILED'])->default('PENDING');
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
        Schema::dropIfExists('transfers');
    }
}
