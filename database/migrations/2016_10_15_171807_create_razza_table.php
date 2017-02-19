<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRazzaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('razza', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_razza', 50)->nullable(false)->default('');
            $table->string('sing_m', 50)->nullable(false)->default('');
            $table->string('sing_f', 50)->nullable(false)->default('');
            $table->text('descrizione')->nullable(false);
            $table->integer('bonus_car0')->nullable(false)->default('0');
            $table->integer('bonus_car1')->nullable(false)->default('0');
            $table->integer('bonus_car2')->nullable(false)->default('0');
            $table->integer('bonus_car3')->nullable(false)->default('0');
            $table->integer('bonus_car4')->nullable(false)->default('0');
            $table->integer('bonus_car5')->nullable(false)->default('0');
            $table->string('immagine', 50)->nullable(false)->default('standard_razza.png');
            $table->string('icon', 50)->nullable(false)->default('standard_razza.png');
            $table->string('url_site', 255)->nullable();
            $table->tinyInteger('iscrizione')->nullable(false)->default('1');
            $table->tinyInteger('visible')->nullable(false)->default('1');
            $table->timestamps();
        });
        
        	DB::update("ALTER TABLE razza AUTO_INCREMENT = 1001;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('razza');
    }
}
