<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mekan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ad');
            $table->text('icerik');
            $table->string('resim_yol')->nulleble();
            $table->integer('il_id')->unsigned()->nullable();
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
        Schema::dropIfExists('mekan');
    }
}
