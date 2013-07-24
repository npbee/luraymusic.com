<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTourdatesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourdates', function(Blueprint $table) {
            $table->increments('id');
            $table->date('date');
	$table->string('venue');
	$table->string('location');
	$table->string('support');
	$table->text('review_text');
            $table->text('review_source');
	$table->string('review_link');
            $table->integer('user_id');
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
        Schema::drop('tourdates');
    }

}
