<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscendenzeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discendenze', function (Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->text('description');
             $table->integer('car0');
             $table->integer('car1');
             $table->integer('car2');
             $table->integer('car3');
             $table->integer('car4');
             $table->integer('car5');
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
        Schema::table('discendenze', function (Blueprint $table) {
            //
        });
    }
}
