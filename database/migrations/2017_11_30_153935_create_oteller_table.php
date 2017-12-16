<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtellerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oteller', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ad');
            $table->string('fiyat');
            $table->integer('yildiz');
            $table->integer('puan');
            $table->string('resim_yol')->nullable();
            $table->integer('uzaklik')->nullable();
            $table->integer('il_id')->unsigned()->nullable();
            $table->boolean('denize_sifir')->nullable();
            $table->boolean('su_kaynagi')->nullable();
            $table->boolean('cocuk_su_kaydiragi')->nullable();
            $table->boolean('gece_kulubu')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('otopark')->nullable();
            $table->boolean('restorant')->nullable();
            $table->boolean('toplanti_salonu')->nullable();
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
        Schema::dropIfExists('oteller');
    }
}
