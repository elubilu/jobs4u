<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfessionalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('professionals_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation');
            $table->string('companyName');
            $table->text('companyAddress');
            $table->string('jobStart');
            $table->string('jobEnd');
            $table->string('passingYear');
            $table->string('jobStatus');
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
