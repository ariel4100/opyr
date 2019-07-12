<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_es')->nullable();
            $table->string('titulo_pt')->nullable();
            $table->text('texto_es')->nullable();
            $table->text('texto_pt')->nullable();
            $table->string('file_image')->default('no-image.jpg');
            $table->string('orden')->nullable();
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');            
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
        Schema::dropIfExists('novedads');
    }
}
