<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('episode_id');
            $table->unsignedBigInteger('character_id');
            $table->mediumText('quote');
            $table->timestamps();

            $table->foreign('episode_id')
                ->on('episodes')
                ->references('id');

            $table->foreign('character_id')
                ->on('characters')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotes');
    }
}
