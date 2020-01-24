<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonds', function (Blueprint $table) {
            $table->bigIncrements('idx');
            $table->string('investment');
            $table->string('investment_name');
            $table->string('i_id');
            $table->string('price');
            $table->string('p_goal');
            $table->string('goal_in');
            $table->string('goal_out');
            $table->string('agreement');
            $table->string('c_date');
            $table->string('c_date2');
            $table->string('c_date3');
            $table->string('c_date4');
            $table->string('invest_date');
            $table->string('_price');
            $table->string('p_price');
            $table->string('_price2');
            $table->string('t_price');
            $table->string('contract');
            $table->string('c_date5');
            $table->string('_price3');
            $table->string('confirm1');
            $table->string('confirm2');
            $table->string('confirm3');
            $table->string('confirm4');
            $table->string('confirm5');
            $table->string('law_office');
            $table->string('etc');
            $table->string('address');
            $table->string('phone');
            $table->string('birth');
            $table->string('email');
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
        Schema::dropIfExists('bonds');
    }
}
