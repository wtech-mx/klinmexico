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

                $table->unsignedBigInteger('id_fixer')->nullable();
                $table->foreign('id_fixer')
                    ->references('id')->on('fixer')
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
        Schema::table('precio_ticket', function (Blueprint $table) {
            //
        });
    }
};
