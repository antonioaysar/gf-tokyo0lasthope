<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaggioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaggio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nome', 20)->unique()->nullable(false)->default('');
            $table->string('cognome', 50)->nullable(false)->default('-');
            $table->datetime('data_iscrizione')->nullable();
            $table->tinyInteger('permessi')->nullable()->default('0');
            $table->tinyInteger('ultima_mappa')->nullable(false)->default('1');
            $table->tinyInteger('ultima_luogo')->nullable(false)->default('-1');
            $table->date('esilio')->nullable(false)->default('2009-07-01');
            $table->date('data_esilio')->nullable(false)->default('2009-07-01');
            $table->string('motivo_esilio', 255)->nullable();
            $table->string('autore_esilio', 20)->nullable();
            $table->char('sesso', 1)->nullable()->default('m');
            $table->integer('id_razza')->nullable()->default('1000');
            $table->text('descrizione')->nullable();
            $table->text('affetti')->nullable();
            $table->string('stato', 255)->nullable()->default('nessuna');
            $table->string('online_status', 100)->nullable();
            $table->tinyInteger('disponibile')->nullable(false)->default('1');
            $table->string('url_img', 255)->nullable()->default('../../../assents/images/gdrcd/themes/advanced/avatars/empty.png');
            $table->string('url_img_chat', 255)->nullable(false)->default(' ');
            $table->string('url_media', 255)->nullable();
            $table->binary('blocca_media')->nullable();
            $table->decimal('esperienza', 12, 4)->nullable()->default('0.0000');
            $table->integer('car0')->nullable(false)->default('5');
            $table->integer('car1')->nullable(false)->default('5');
            $table->integer('car2')->nullable(false)->default('5');
            $table->integer('car3')->nullable(false)->default('5');
            $table->integer('car4')->nullable(false)->default('5');
            $table->integer('car5')->nullable(false)->default('5');
            $table->integer('salute')->nullable(false)->default('100');
            $table->integer('salute_max')->nullable(false)->default('100');
            $table->datetime('data_ultima_gilda')->nullable(false)->default('2009-07-01 00:00:00');
            $table->integer('soldi')->nullable()->default('50');
            $table->integer('banca')->nullable()->default('0');
            $table->date('ultimo_stipendio')->nullable(false)->default('2009-07-01');
            $table->string('last_ip', 16)->nullable();
            $table->tinyInteger('is_invisible')->nullable(false)->default('0');
            $table->datetime('ultimo_refresh')->nullable(false)->default('2009-07-01 00:00:00');
            $table->datetime('ora_entrata')->nullable(false)->default('2009-07-01 00:00:00');
            $table->datetime('ora_uscita')->nullable(false)->default('2009-07-01 00:00:00');
            $table->integer('posizione')->nullable(false)->default('1');
            $table->bigInteger('ultimo_messaggio')->nullable(false)->default('0');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->index('id_razza');
            $table->index('esilio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personaggio');
    }
}
