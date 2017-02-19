<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('chat_id')->unsigned();
            $table->string('images')->nullable(true);
            $table->integer('personaggio_id')->unsigned();
            $table->string('type');
            $table->longText('message');
            $table->timestamps();
            $table->foreign('chat_id')->references('id')->on('chats');
            $table->foreign('personaggio_id')->references('id')->on('personaggio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }
}
