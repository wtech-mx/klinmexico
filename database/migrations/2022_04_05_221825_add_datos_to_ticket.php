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
        Schema::table('ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('id_descripcion')->nullable();
            $table->foreign('id_descripcion')
                ->references('id')->on('descripcion_ticket')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_fixer')->nullable();
            $table->foreign('id_fixer')
                ->references('id')->on('fixer')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_direccion')->nullable();
            $table->foreign('id_direccion')
                ->references('id')->on('direccion')
                ->inDelete('set null');

            $table->unsignedBigInteger('id_venta')->nullable();
            $table->foreign('id_venta')
                ->references('id')->on('nueva_venta')
                ->inDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ticket', function (Blueprint $table) {
            //
        });
    }
};
