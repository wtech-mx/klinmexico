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
        Schema::create('precio_ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ticket')->nullable();
            $table->foreign('id_ticket')
                ->references('id')->on('ticket')
                ->inDelete('set null');

            $table->float('promocion')->nullable();
            $table->float('recoleccion')->nullable();
            $table->string('pago')->nullable();
            $table->float('por_pagar')->nullable();
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
        Schema::dropIfExists('precio_ticket');
    }
};
