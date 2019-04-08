<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullName');
            $table->string('fatherName');
            $table->string('motherName');
            $table->string('dob');
            $table->string('gender');
            $table->string('district');
            $table->string('religion');
            $table->string('maritialStatus');
            $table->string('mobileNo');
            $table->string('email');
            $table->text('address');
            $table->string('userName');
            $table->string('password');
            $table->string('status');
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
        //
    }
}
