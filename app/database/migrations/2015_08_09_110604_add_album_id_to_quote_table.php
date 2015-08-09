<?php

use Illuminate\Database\Migrations\Migration;

class AddAlbumIdToQuoteTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quotes', function($table) {
            $table->integer('album_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quotes', function($table) {
            $table->dropColumn('album_id');
        });
    }

}
