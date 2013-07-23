<?php

class TourController extends BaseController {


    public $restful = true;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function Index()
    {
        $tourdates = Tourdate::orderBy('date')->get();
        return View::make('pages.tour.index')
            ->with('bodyClass', 'tour')
            ->with('tourdates', $tourdates);
    }

    public function Archive()
    {
        return View::make('pages.tour.archive')
            ->with('bodyClass', 'tour')
            ->with('tourdates', Tourdate::all());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return View::make('admin.tour.show')
            ->with('tourdates', Tourdate::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return View::make('admin.tour.edit')
            ->with('tourdates', Tourdate::find($id));
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