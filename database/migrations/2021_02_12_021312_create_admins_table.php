<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->string('display_password')->nullable();
            $table->boolean('is_grand')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        if (Schema::hasTable('users')) {
            $admin = new App\Models\Admin();
            $admin->first_name = env('GRAND_ADMIN_FIRST_NAME', 'John');
            $admin->last_name = env('GRAND_ADMIN_LAST_NAME', 'Doe');
            $admin->email = env('GRAND_ADMIN_EMAIL', 'johndoe@gmail.com');
            $admin->is_grand = 1;
            $admin->password = Hash::make(env('GRAND_ADMIN_PASSWORD', '#letslove'));
            $admin->display_password = Crypt::encryptString(env('GRAND_ADMIN_PASSWORD', '#letslove'));
            $admin->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
