<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion_es')->nullable();
            $table->string('slogan_es')->nullable();
            $table->text('mision_es')->nullable();
            $table->text('descripcion_pt')->nullable();
            $table->string('slogan_pt')->nullable();            
            $table->text('mision_pt')->nullable();            
            $table->string('file_image')->default('no-image.jpg')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
