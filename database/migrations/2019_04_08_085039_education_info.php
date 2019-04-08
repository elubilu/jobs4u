<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducationInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educations_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('degreeName');
            $table->string('degreeTitle');
            $table->string('major');
            $table->string('institution');
            $table->string('result');
            $table->string('passingYear');
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
