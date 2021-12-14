<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstaigosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istaigos', function (Blueprint $table) {
            $table->id();
            $table->string('istaigos_pav');
            $table->string('istaigos_url_pagr');
            $table->string('istaigos_url_apgyv');
            $table->string('istaigos_url_fakult');
            $table->string('istaigos_url_logo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('istaigos');
    }
}
