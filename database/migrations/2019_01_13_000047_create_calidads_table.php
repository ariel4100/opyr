<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calidads', function (Blueprint $table) {
            $table->increments('id');
            $table->text('texto_es')->nullabse();
            $table->text('texto_pt')->nullable();
            $table->string('titulo_pt')->nullable();
            $table->string('titulo_es')->nullable();
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
        Schema::dropIfExists('calidads');
    }
}
