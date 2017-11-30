<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIlceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ilce', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ad');
            $table->integer('il_id')->unsigned()->nulleble();
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
        Schema::dropIfExists('ilce');
    }
}
