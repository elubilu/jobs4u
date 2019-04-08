<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('responsibilities');
            $table->text('benefits');
            $table->text('description');
            $table->string('salary');
            $table->string('deadline');
            $table->string('qualification');
            $table->string('vacancy');
            $table->string('experience');
            $table->string('postedBy');
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
