<?php

class ProcessImage {
    public function fire($job, $data)
    {

        // $data = array(
        //     'title' => $title,
        //     'full_path' => $full_path,
        //     'author' => $author
        // );

        $hi_path = Image::resize($data['full_path'], 700);
        //$thumb_path = Image::thumb($hi_path, 300);

        // $pic = New Pic;
        // $pic->full_path = $full_path;
        // // $pic->hi_path = $hi_path;
        // // $pic->thumb_path = $thumb_path;
        // $pic->save();

        $job->delete();
    }
}