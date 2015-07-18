<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use Illuminate\Support\Facades\Hash;

class DefaultUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('password')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where(['email' => 'admin@admin.admin'])->delete();
    }
}
