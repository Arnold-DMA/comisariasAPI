<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComisariaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisarias', function (Blueprint $table) {
            $table->increments('ComCod','11')->primary();
            $table->integer('ComCodInei','11');
            $table->string('ComDepCod','2');
            $table->string('ComProCod','4');
            $table->string('ComDisCod','6');
            $table->double('ComLat','8','2');
            $table->double('ComLon','8','2');
            $table->string('ComMacRegPol','40');
            $table->string('ComRegPol','40');
            $table->string('ComDivPol','40');
            $table->string('ComNom','50');
            $table->foreign('ComDepCod')->references('DepCod')->on('departamentos');
            $table->foreign('ComProCod')->references('ProCod')->on('provincias');
            $table->foreign('ComDisCod')->references('DisCod')->on('distritos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comisarias');
    }
}
