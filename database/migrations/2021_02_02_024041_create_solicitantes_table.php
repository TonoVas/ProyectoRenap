<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->id();
            $table->string('Cedula')->unique()->nullable();
            $table->string('FechaDeNacimineto')->nullable();
            $table->string('name')->nullable();
            $table->string('Apellido')->nullable();
            $table->string('Direccion')->nullable();
            $table->double('Telefono')->nullable();
            $table->string('Departamento')->nullable();
            $table->string('Municipio')->nullable();
            $table->string('Fotografia')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
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
        Schema::dropIfExists('solicitantes');
    }
}
