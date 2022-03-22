<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('apellido_ma')->nullable();
            $table->string('apellido_pa')->nullable();
            $table->string('telefono')->nullable();
            $table->integer('num_compras')->nullable();
            $table->string('calle')->nullable();
            $table->integer('cp')->nullable();
            $table->string('estado')->nullable();
            $table->string('alcaldia')->nullable();
            $table->string('colonia')->nullable();
            $table->date('fecha_nacimiento')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
