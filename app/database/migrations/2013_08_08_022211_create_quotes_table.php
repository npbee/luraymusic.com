<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function(Blueprint $table) {
            $table->increments('id');
            $table->text('quote');
            $table->text('source');
            $table->string('url');
            $table->string('album');
            $table->integer('user_id');
            $table->boolean('add_to_album_page');
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
        Schema::drop('quotes');
    }

}
