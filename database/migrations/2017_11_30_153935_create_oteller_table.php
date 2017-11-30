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
            $table->string('resim_yol');
            $table->integer('il_id')->unsigned()->nullable();
            $table->boolean('denize_sifir');
            $table->boolean('su_kaynagi');
            $table->boolean('cocuk_su_kaydiragi');
            $table->boolean('gece_kulubu');
            $table->boolean('wifi');
            $table->boolean('otopark');
            $table->boolean('restorant');
            $table->boolean('toplanti_salonu');
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
