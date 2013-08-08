<?php

//use Notification;

class AdminQuoteController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quotes = Quote::all();
        return View::make('admin.press.index')
            ->with('bodyClass', 'press--admin')
            ->with('quotes', $quotes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('admin.press.create')
            ->with('bodyClass', 'press--admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = new Services\Validators\QuoteValidator($input);
        //$validation = Validator::make($input, ['date' => 'required']);

        if ($validation -> passes()) {
            $quote = new Quote;
            $quote->quote = Input::get('quote');
            $quote->source = Input::get('source');
            $quote->url = Input::get('url');
            $quote->album = Input::get('album');
            $quote->add_to_album_page = Input::get('add_to_album_page', false);
            $quote->save();

            Notification::success('The page was saved.');

            return Redirect::route('admin.press.index');
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

    }

}


