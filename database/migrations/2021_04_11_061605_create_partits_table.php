<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partits', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('equip1_id');
            $table->foreign('equip1_id')->references('id')->on('equips');
           
            $table->unsignedBigInteger('equip2_id');
            $table->foreign('equip2_id')->references('id')->on('equips');

            $table->string('resultado');
            $table->date('date');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partits');
    }
}
