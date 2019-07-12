<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_es')->nullable();
            $table->string('nombre_pt')->nullable();
            $table->string('orden')->nullable();
            $table->string('video')->nullable();
            $table->text('descripcion_es')->nullable();
            $table->text('descripcion_pt')->nullable();
            $table->text('aplicaciones_es')->nullable();
            $table->text('aplicaciones_pt')->nullable();
            $table->text('ciclos_es')->nullable();
            $table->text('ciclos_pt')->nullable();
            $table->string('file_ficha')->nullable();
            $table->string('file_image')->default('no-image.jpg')->nullable();
            $table->string('file_plano')->nullable();
            $table->unsignedInteger('familia_id');
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade');    
            $table->unsignedInteger('subfamilia_id');
            $table->foreign('subfamilia_id')->references('id')->on('subfamilias')->onDelete('cascade');    
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
        Schema::dropIfExists('productos');
    }
}
