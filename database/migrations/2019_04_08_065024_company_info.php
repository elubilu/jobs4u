<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName');
            $table->string('companyType');
            $table->string('concernName');
            $table->string('concernDesignation');
            $table->string('concernEmail');
            $table->string('concernAddress');
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
