<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('f_name');
            $table->string('l_name')->nullable();
            $table->string('father_name');
            $table->string('sex');
            $table->string('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('bkash');
            $table->string('dbbl');
            $table->string('nid');
            $table->string('sis_id');
            $table->string('no_slot');
            $table->string('no_payment');
            $table->string('no_renew');
            $table->string('user_name');
            $table->string('password');

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
        Schema::dropIfExists('franchisees');
    }
}
