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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')
                ->references('id')->on('users')
                ->inDelete('set null');

            $table->foreign('id_descripcion_ticket')
                ->references('id')->on('descripcion_ticket')
                ->inDelete('set null');

            $table->string('servicio_primario')->nullable();
            $table->string('unyellow')->nullable();
            $table->string('tint')->nullable();
            $table->string('tint_descripcion')->nullable();
            $table->string('klin')->nullable();
            $table->string('protector')->nullable();
            $table->string('factura')->nullable();

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
        Schema::dropIfExists('ticket');
    }
};
