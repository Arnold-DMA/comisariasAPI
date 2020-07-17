<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DistritosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distrito', function (Blueprint $table) {
            $table->string('DisCod','6')->primary();
            $table->string('DisNom','30');
            $table->string('ProCod','4');
            $table->foreign('ProCod')->references('ProCod')->on('provincias');
            $table->string('DepCod','2');
            $table->foreign('DepCod')->references('DepCod')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distrito');
    }
}
