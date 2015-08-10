<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function($table) {
            $table->increments('id');
            $table->longText('description');
            $table->mediumText('audio_embed');
            $table->string('itunes_link');
            $table->string('big_cartel_link');
            $table->longText('lyrics');
            $table->longText('credits');
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
        Schema::drop('albums');
    }

}
