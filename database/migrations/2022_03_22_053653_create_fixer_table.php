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
        Schema::create('fixer', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_ticket')->nullable();
            $table->foreign('id_ticket')
                ->references('id')->on('ticket')
                ->inDelete('set null');

            $table->string('glue')->nullable();
            $table->string('sew')->nullable();
            $table->string('sole')->nullable();
            $table->string('patch')->nullable();
            $table->string('invisible')->nullable();
            $table->string('personalizado')->nullable();

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
        Schema::dropIfExists('fixer');
    }
};
