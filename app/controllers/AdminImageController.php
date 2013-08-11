<?php

//use Notification;

class AdminImageController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pics = Pic::orderBy('sort_order')->get();
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
        $pic_count = Pic::count();
        $sort_order = $pic_count + 1;
        return View::make('admin.image.create')
            ->with('bodyClass', 'images--admin')
            ->with('sort_order', $sort_order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $original_image = Input::file('image');
        $title = Input::get('title');
        $full_path = Image::upload($original_image, $title);
        $thumb_path = Image::thumb($full_path, 600);

        $input = Input::all();
        $validation = new Services\Validators\ImageValidator($input);

        if ($validation -> passes()) {
            $pic = new Pic;
            $pic->full_path = $full_path;
            $pic->thumb_path = $thumb_path;
            $pic->author = Input::get('author');
            $pic->title = $title;
            $pic->sort_order = Input::get('sort_order');
            $pic->save();

            Notification::success('The page was saved.');

            return Redirect::route('admin.image.index');
        }

        return Redirect::back()->withInput()->withErrors($validation->errors);

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
        $pic = Pic::find($id);
        return View::make('admin.image.edit')
            ->with('bodyClass','images--admin')
            ->with('pic', $pic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

            $pic = Pic::find($id);
            $pic->author = Input::get('author');
            $pic->title = Input::get('title');
            $pic->save();

            Notification::success('The page was saved.');

            return Redirect::route('admin.image.index');

    }

    /**
     * Update the sort order of the images
     *
     * @param  int  $id
     * @return Response
     */
    public function sortOrderUpdate()
    {

        $ids = Input::get('id');
        $sort_orders = Input::get('sort_order');
        $pics = Pic::find($ids);

        foreach($ids as $id) {
            $pic = Pic::find($id);
            $pic->sort_order = Input::get('sort_order_'.$id);
            $pic->save();
        }

        //return Response::json($pics);

        Notification::success('The page was saved.');

        return Redirect::route('admin.image.index');







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $pic = Pic::find($id);
        $pic->delete();

        Notification::success('The photo was deleted.');
        return Redirect::route('admin.image.index');
    }

}


