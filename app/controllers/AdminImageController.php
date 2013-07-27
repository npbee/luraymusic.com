<?php

class AdminImageController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pics = Pic::all();
        return View::make('admin.image.index')
            ->with('bodyClass', 'images--admin')
            ->with('pics', $pics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.image.create')
            ->with('bodyClass', 'images--admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $image = Input::file('image');
        $title = Input::get('title');
        $full_path = Image::upload($image, $title);
        $author = Input::get('author');
        $data = array(
            'title' => $title,
            'full_path' => $full_path,
            'author' => $author
        );


        Queue::push('ProcessImage', $data);



        //$hi_path = Image::resize($full_path, 700);
        //$thumb_path = Image::thumb($hi_path, 300);

        // $pic = New Pic;
        // $pic->full_path = $full_path;
        // // $pic->hi_path = $hi_path;
        // // $pic->thumb_path = $thumb_path;
        // $pic->save();

        return Redirect::route('admin.image.index');

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}


