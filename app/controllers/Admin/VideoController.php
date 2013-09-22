<?php

namespace Admin;

class VideoController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$videos = \Video::orderBy('sort_order')->get();
        $videos = \Video::all();
        return \View::make('admin.videos.index')
            ->with('bodyClass', 'video--admin')
            ->with('videos', $videos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $video_count = \Video::count();
        $sort_order = $video_count + 1;
        return \View::make('admin.videos.create')
            ->with('bodyClass', 'video--admin')
            ->with('sort_order', $sort_order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = \Input::all();
        $validation = new \Services\Validators\VideoValidator($input);
        //$validation = Validator::make($input, ['date' => 'required']);

        if ($validation -> passes()) {
            $video = new \Video;
            $video->embed_code = \Input::get('embed_code');
            //$video->sort_order = \Input::get('sort_order');
            $video->save();

            \Notification::success('The video was saved.');

            return \Redirect::route('admin.videos.index');
        }

        return \Redirect::back()->withInput()->withErrors($validation->errors);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $video = \Video::find($id);
        return \View::make('admin.videos.edit')
            ->with('bodyClass', 'video--admin')
            ->with('video', $video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = \Input::all();
        $validation = new \Services\Validators\VideoValidator($input);
        //$validation = Validator::make($input, ['date' => 'required']);

        if ($validation -> passes()) {
            $video = \Video::find($id);
            $video->embed_code = \Input::get('embed_code');
            $video->save();

            \Notification::success('The video was saved.');

            return \Redirect::route('admin.videos.index');
        }

        return \Redirect::back()->withInput()->withErrors($validation->errors);
    }

    /**
     * Sort the videos
     *
     * @param  int  $id
     * @return Response
     */
    public function sortOrderUpdate()
    {
        $ids = \Input::get('id');
        $sort_orders = \Input::get('sort_order');
        $videos = \Video::find($ids);

        foreach($ids as $id) {
            $quote = \Video::find($id);
            $quote->sort_order = \Input::get('sort_order_'.$id);
            $quote->save();
        }

        \Notification::success('The page was saved.');

        return \Redirect::route('admin.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $video = \Video::find($id);
        $video->delete();

        \Notification::success('The video was deleted.');
        return \Redirect::route('admin.videos.index');
    }

}