<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_contatos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('titulo', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('endereco_completo', 255)->nullable();
            $table->string('telefones', 355)->nullable();
            $table->string('whatsapp', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('google_plus', 255)->nullable();
            $table->string('latitude', 255)->nullable();
            $table->string('longitude', 255)->nullable();
            
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
        Schema::dropIfExists('empresa_contatos');
    }
}
