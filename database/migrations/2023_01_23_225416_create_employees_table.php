<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCompleto');
            $table->string('rut');
            $table->string('estadoCivil');
            $table->date('fecha_nac');
            $table->string('direccion');
            $table->string('email');
            $table->string('estado')->default(1);
            $table->string('fono')->nullable();
            $table->foreignId('documento_id')
                ->nullable()
                ->constrained('documents')
                ->cascadeOnUpdate()
                ->nullOnDelete();
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
        Schema::dropIfExists('employees');
    }
}
