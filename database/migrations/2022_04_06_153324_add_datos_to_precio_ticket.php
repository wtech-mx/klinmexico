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
        Schema::table('precio_ticket', function (Blueprint $table) {
            $table->unsignedBigInteger('id_venta')->nullable();
            $table->foreign('id_venta')
                ->references('id')->on('nueva_venta')
                ->inDelete('set null');

            $table->string('factura')->nullable();
            $table->float('total')->nullable();
            $table->float('subtotal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('precio_ticket', function (Blueprint $table) {
            //
        });
    }
};
