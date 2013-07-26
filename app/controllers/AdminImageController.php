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
            ->with('bodyClass', 'tour--images')
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
            ->with('bodyClass', 'tour--admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        $file = Input::file('image');
        $filename = $file->getClientOriginalName();
        $title = Input::get('title');
        $destinationPath = 'assets/images/uploads/' . $title;
        $upload_success = $file->move($destinationPath, $filename);


        return Redirect::route('admin.image.index');

        Notification::success('The image was saved!');

        // $input = Input::all();
        // $validation = new Services\Validators\ImageValidator($input);
        // //$validation = Validator::make($input, ['date' => 'required']);

        // if ($validation -> passes()) {
        //     $tourdate = new Image;
        //     $tourdate->date = Input::get('date');
        //     $tourdate->venue = Input::get('venue');

        //     Notification::success('The page was saved.');

        //     return Redirect::route('admin.tour.index');
        // }

        // return Redirect::back()->withInput()->withErrors($validation->errors);
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