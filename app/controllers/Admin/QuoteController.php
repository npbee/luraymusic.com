<?php

//use Notification;
namespace Admin;

class QuoteController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quotes = \Quote::orderBy('sort_order')->get();
        return \View::make('admin.press.index')
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
        $quote_count = \Quote::count();
        $sort_order = $quote_count + 1;
        return \View::make('admin.press.create')
            ->with('bodyClass', 'press--admin')
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
        $validation = new \Services\Validators\QuoteValidator($input);
        //$validation = Validator::make($input, ['date' => 'required']);

        if ($validation -> passes()) {
            $quote = new \Quote;
            $quote->quote = \Input::get('quote');
            $quote->source = \Input::get('source');
            $quote->url = \Input::get('url');
            $quote->album = \Input::get('album');
            $quote->add_to_album_page = \Input::get('add_to_album_page', false);
            $quote->is_featured = \Input::get('is_featured', false);
            $quote->sort_order = \Input::get('sort_order');
            $quote->save();

            \Notification::success('The page was saved.');

            return \Redirect::route('admin.press.index');
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
        $quote = \Quote::find($id);
        return \View::make('admin.press.edit')
            ->with('bodyClass','press--admin')
            ->with('quote', $quote);
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
        $validation = new \Services\Validators\QuoteValidator($input);
        //$validation = Validator::make($input, ['date' => 'required']);

        if ($validation -> passes()) {
            $quote = \Quote::find($id);
            $quote->quote = \Input::get('quote');
            $quote->source = \Input::get('source');
            $quote->url = \Input::get('url');
            $quote->album = \Input::get('album');
            $quote->add_to_album_page = \Input::get('add_to_album_page', false);
            $quote->is_featured = \Input::get('is_featured', false);
            $quote->save();

            \Notification::success('The page was saved.');

            return \Redirect::route('admin.press.index');
        }

        return \Redirect::back()->withInput()->withErrors($validation->errors);


    }

    /**
     * Update the sort order of the images
     *
     * @param  int  $id
     * @return Response
     */
    public function sortOrderUpdate()
    {

        $ids = \Input::get('id');
        $sort_orders = \Input::get('sort_order');
        $quotes = \Quote::find($ids);

        foreach($ids as $id) {
            $quote = \Quote::find($id);
            $quote->sort_order = \Input::get('sort_order_'.$id);
            $quote->save();
        }

        \Notification::success('The page was saved.');

        return \Redirect::route('admin.press.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $quote = \Quote::find($id);
        $quote->delete();

        \Notification::success('The quote was deleted.');
        return \Redirect::route('admin.press.index');
    }

}


