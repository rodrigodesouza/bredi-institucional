<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSobresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sobres', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('titulo', 255)->comment('Titulo da área ou página.');
            $table->string('subtitulo', 255)->nullable()->comment('Caso tenha um subtitulo ou um slogan.');
            $table->string('imagem', 255)->nullable()->comment('imagem de capa como destaque na página da empresa.');
            $table->longText('conteudo', 255)->nullable()->comment('Conteúdo em html da página ou text normal.');
            $table->longText('galeria', 255)->nullable()->comment('Galeria de imagens da empresa.');

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
        Schema::dropIfExists('sobres');
    }
}
