<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('TourDatesSeeder');
		$this->call('SentrySeeder');
		$this->call('PicsTableSeeder');
		$this->call('VideosTableSeeder');
	}

}