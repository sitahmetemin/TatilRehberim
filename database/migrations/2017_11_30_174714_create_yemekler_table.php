<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYemeklerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yemekler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ad');
            $table->string('resim_yol')->nullable();
            $table->string('aciklama')->nullable();
            $table->integer('il_id')->unsigned();
            $table->timestamps();

            $table->foreign('il_id')
                ->references('id')
                ->on('iller');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yemekler');
    }
}
