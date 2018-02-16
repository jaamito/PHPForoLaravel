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
        Schema::create('posts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idUsuario')->unsigned();
          $table->integer('comentarios');
          $table->string('nombreUsuario');
          $table->string('titulo');
          $table->string('texto');
          $table->string('img');
          $table->timestamps();
          $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::create('comentarios', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idUsuario')->unsigned();
          $table->string('nombreUsuario');
          $table->integer('idPost')->unsigned();
          $table->string('texto');
          $table->string('img');
          $table->timestamps();
          $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('idPost')->references('id')->on('posts')->onDelete('cascade');
        });
        Schema::create('tags', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idPost')->unsigned();
          $table->integer('idUsuario')->unsigned();
          $table->string('nombre');
          $table->timestamps();
          $table->foreign('idPost')->references('id')->on('posts')->onDelete('cascade');
          $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
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
