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
        Schema::create('descripcion_ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ticket')->nullable();
            $table->foreign('id_ticket')
                ->references('id')->on('ticket')
                ->inDelete('set null');

            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('color1')->nullable();
            $table->string('color2')->nullable();
            $table->string('talla')->nullable();
            $table->string('categoria')->nullable();
            $table->string('observacion')->nullable();
            $table->integer('tipo_servicio')->nullable();
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
        Schema::dropIfExists('descripcion_ticket');
    }
};
