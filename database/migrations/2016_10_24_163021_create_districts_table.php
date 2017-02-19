<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('descrizione');
            $table->string('stato');
            $table->string('pagina');
            $table->tinyInteger('chat');
            $table->string('immagine');
            $table->string('stanza_apparente');
            $table->integer('id_mappa');
            $table->string('link_immagine');
            $table->string('link_immagine_hover');
            $table->integer('id_mappa_collegata');
            $table->integer('x_cord');
            $table->integer('y_cord');
            $table->text('invitati');
            $table->tinyInteger('privata');
            $table->string('proprietario');
            $table->dateTime('ora_prenotazione');
            $table->dateTime('scadenza');
            $table->integer('costo');
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
        Schema::dropIfExists('districts');
    }
}
