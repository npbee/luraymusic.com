<?php

//use Notification;

class AdminTourController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tourdates = Tourdate::orderBy('date')->get();
        return View::make('admin.tour.index')
            ->with('bodyClass', 'tour--admin')
            ->with('tourdates', $tourdates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.tour.create')
            ->with('bodyClass', 'tour--admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = new Services\Validators\TourdateValidator($input);
        //$validation = Validator::make($input, ['date' => 'required']);

        if ($validation -> passes()) {
            $tourdate = new Tourdate;
            $tourdate->date = Input::get('date');
            $tourdate->venue = Input::get('venue');
            $tourdate->location = Input::get('location');
            $tourdate->show_info = Input::get('show_info');
            $tourdate->support = Input::get('support');
            $tourdate->review_text = Input::get('review_text');
            $tourdate->review_source = Input::get('review_source');
            $tourdate->review_link = Input::get('review_link');
            $tourdate->save();

            Notification::success('The page was saved.');

            return Redirect::route('admin.tour.index');
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
        $tourdate = Tourdate::find($id);
        return View::make('admin.tour.show')
            ->with('bodyClass','tour--admin')
            ->with('tourdate', $tourdate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tourdate = Tourdate::find($id);
        return View::make('admin.tour.edit')
            ->with('bodyClass','tour--admin')
            ->with('tourdate', $tourdate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $tourdate = Tourdate::find($id);
        $tourdate->date = Input::get('date');
        $tourdate->venue = Input::get('venue');
        $tourdate->location = Input::get('location');
        $tourdate->show_info = Input::get('show_info');
        $tourdate->support = Input::get('support');
        $tourdate->review_text = Input::get('review_text');
        $tourdate->review_source = Input::get('review_source');
        $tourdate->review_link = Input::get('review_link');
        $tourdate->save();

        Notification::success('The page was saved!');

        return Redirect::route('admin.tour.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $tourdate = Tourdate::find($id);
        $tourdate->delete();

        return Redirect::route('admin.tour.index');
    }

}