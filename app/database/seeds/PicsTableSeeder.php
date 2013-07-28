<?php

class PicsTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('pics')->delete();

            DB::table('pics')->insert(array(
                'user_id' => '1',
                'full_path' => '/assets/images/show-pics/camel/1-full.jpg',
                'thumb_path' => '/assets/images/show-pics/camel/1-thumb.jpg',
                'author' => 'Nick Ball',
                'title' => 'Camel',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));

            DB::table('pics')->insert(array(
                'user_id' => '1',
                'full_path' => '/assets/images/show-pics/cameo-gallery/1-full.jpg',
                'thumb_path' => '/assets/images/show-pics/cameo-gallery/1-thumb.jpg',
                'author' => 'Nick Ball',
                'title' => 'Cameo Gallery',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
    }

}