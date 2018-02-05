<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idUsuario')->unsigned();
          $table->string('titulo');
          $table->string('texto');
          $table->string('img');
          $table->timestamps();
          $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('comentario', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idUsuario')->unsigned();
          $table->integer('idPost')->unsigned();
          $table->string('texto');
          $table->string('img');
          $table->timestamps();
          $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('idPost')->references('id')->on('post')->onDelete('cascade');
        });
        Schema::create('hashtag', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idPost')->unsigned();
          $table->integer('idComentario')->unsigned();
          $table->string('nombre');
          $table->timestamps();
          $table->foreign('idPost')->references('id')->on('post')->onDelete('cascade');
          $table->foreign('idComentario')->references('id')->on('comentario')->onDelete('cascade');
        });
        Schema::create('tag', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idPost')->unsigned();
          $table->string('nombre');
          $table->timestamps();
          $table->foreign('idPost')->references('id')->on('post')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
