<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('observacion');
            $table->text('descripcion', 500);
            $table->string('imagen', 128)->nullable();
            $table->string('nombre', 45);
            $table->string('ci', 10);
            $table->string('domicilio', 45);
            $table->string('telefono', 10);
            $table->boolean('leido')->default(false);
            $table->uuid('uuid');
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
        Schema::dropIfExists('denuncias');
    }
}
