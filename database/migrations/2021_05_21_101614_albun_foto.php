<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlbunFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albun_foto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('albun_id');
            $table->foreign('albun_id')->references('id')->on('albuns')->onDelete('cascade');

            $table->unsignedBigInteger('foto_id');
            $table->foreign('foto_id')->references('id')->on('fotos')->onDelete('cascade');

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
        //
    }
}
