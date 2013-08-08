<?php

class VideosTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('videos')->delete();

            DB::table('videos')->insert(array(
                'user_id' => '1',
                'embed_code' => '<iframe width="560" height="315" src="//www.youtube.com/embed/j9kiGZq2Wy0" frameborder="0" allowfullscreen></iframe>',
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
    }

}