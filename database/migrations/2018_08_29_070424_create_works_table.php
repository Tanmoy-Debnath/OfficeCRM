<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name');
            $table->string('record');
            $table->string('policy');
            $table->string('f_name');
            $table->string('city');
            $table->string('phone');
            $table->string('gp');
            $table->string('paid_amount');
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('medical');
            $table->string('l_name');
            $table->string('state');
            $table->string('marit');
            $table->string('claims');
            $table->string('n_amount');
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
        Schema::dropIfExists('works');
    }
}
