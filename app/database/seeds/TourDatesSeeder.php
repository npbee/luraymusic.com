<?php

class TourDatesSeeder extends Seeder {

    public function run()
    {
        DB::table('tourdates')->delete();

        DB::table('tourdates')->insert(array(
            'date' => '2013-09-28',
            'venue' => 'Canterbury House',
            'location' => 'Ann Arbor, MI',
            'support' => 'The Ericksons',
            'review_text' => 'Her songs are delicate, contemplative folk...Standing up front, there were like-minded fans of this music and the band did a fine job of delivering smooth, involved patterns of thoughtful and focused folk music.',
            'review_id' => 'review-1',
            'review_source'=> 'DC ROCK LIVE',
            'review_link' => 'http://google.com',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

        DB::table('tourdates')->insert(array(
            'date' => '2013-09-27',
            'venue' => 'The Cabin',
            'location' => 'Eau Claire WI',
            'support' => '',
            'review_text' => "I'm very impressed by everything that's happening",
            'review_id' => 'review-2',
            'review_source'=> 'DC ROCK LIVE',
            'review_link' => 'http://google.com',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
        ));

    }
}