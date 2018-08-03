<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestDrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testDrives', function (Blueprint $table) {
            $table->increments('idTestDrives');
            $table->integer('usuarios_id')->unsigned();
            $table->foreign('usuarios_id')->references('idUsuarios')->on('Usuario')->onUpdate('cascade')->onDelete('cascade');
            $table->string('data');
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
        Schema::dropIfExists('testDrives');
    }
}
