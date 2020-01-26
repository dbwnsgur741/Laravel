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
            $table->string('investment')->nullable();
            $table->string('investment_name')->nullable();
            $table->string('i_id')->nullable();
            $table->string('price')->nullable();
            $table->string('p_goal')->nullable();
            $table->string('goal_in')->nullable();
            $table->string('goal_out')->nullable();
            $table->string('agreement')->nullable();
            $table->string('c_date')->nullable();
            $table->string('c_date2')->nullable();
            $table->string('c_date3')->nullable();
            $table->string('c_date4')->nullable();
            $table->string('invest_date')->nullable();
            $table->string('_price')->nullable();
            $table->string('p_price')->nullable();
            $table->string('_price2')->nullable();
            $table->string('t_price')->nullable();
            $table->string('contract')->nullable();
            $table->string('c_date5')->nullable();
            $table->string('_price3')->nullable();
            $table->string('confirm1')->nullable();
            $table->string('confirm2')->nullable();
            $table->string('confirm3')->nullable();
            $table->string('confirm4')->nullable();
            $table->string('confirm5')->nullable();
            $table->string('law_office')->nullable();
            $table->string('etc')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('birth')->nullable();
            $table->string('email')->nullable();
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
