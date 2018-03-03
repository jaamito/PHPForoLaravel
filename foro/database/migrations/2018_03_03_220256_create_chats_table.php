<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idUser')->unsigned();
          $table->string('userName');
          $table->integer('idFriend')->unsigned();
          $table->string('mensaje');
          $table->timestamps();
          $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('idFriend')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
