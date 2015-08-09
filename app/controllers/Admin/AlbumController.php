<?php

namespace Admin;

class AlbumController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $albums = \Album::orderBy('created_at')->get();
        return \View::make('admin.albums.index')
            ->with('bodyClass', 'album--admin')
            ->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return \View::make('admin.albums.create')
            ->with('bodyClass', 'album--admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = \Input::all();
        $validation = new \Services\Validators\AlbumValidator($input);

        $original_image = \Input::file('image');
        $full_path = \Image::upload($original_image);
        $thumb_path = \Image::thumb($full_path, 600);

        if ($validation -> passes()) {
            $album = new \Album;
            $album->title = \Input::get('title');
            $album->art_full_path = $full_path;
            $album->art_thumb_path = $thumb_path;
            $album->description = \Input::get('description');
            $album->audio_embed = \Input::get('audio_embed');
            $album->itunes_link = \Input::get('itunes_link');
            $album->big_cartel_link = \Input::get('big_cartel_link');
            $album->lyrics = \Input::get('lyrics');
            $album->credits = \Input::get('credits');
            $album->save();

            \Notification::success('The album was saved.');

            return \Redirect::route('admin.albums.index');
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
        $album = \Album::find($id);
        return \View::make('admin.albums.edit')
            ->with('bodyClass', 'albums--admin')
            ->with('album', $album);
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
        $validation = new \Services\Validators\AlbumValidator($input);
        $original_image = \Input::file('image');
        $full_path = \Image::upload($original_image);
        $thumb_path = \Image::thumb($full_path, 600);

        if ($validation -> passes()) {
            $album = \Album::find($id);
            $album->title = \Input::get('title');
            $album->description = \Input::get('description');
            $album->audio_embed = \Input::get('audio_embed');
            $album->itunes_link = \Input::get('itunes_link');
            $album->big_cartel_link = \Input::get('big_cartel_link');
            $album->lyrics = \Input::get('lyrics');
            $album->credits = \Input::get('credits');

            if ($original_image) {
                $album->art_full_path = $full_path;
                $album->art_thumb_path = $thumb_path;
            }

            $album->save();

            \Notification::success('The album was saved.');

            return \Redirect::route('admin.albums.index');
        }

        return \Redirect::back()->withInput()->withErrors($validation->errors);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $album = \Album::find($id);
        $album->delete();

        \Notification::success('The album was deleted.');
        return \Redirect::route('admin.albums.index');
    }

}
