<?php

namespace App\Http\Controllers;

use App\collections;
use App\client;
use App\payment;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collections::all();

        return view('/collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Collections::create(request([
            'date_collected',
            'comment',
            'client_id',
            'payment_id',
            'collector_id',
        ]));

        return redirect("collections");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function show(Collections $collection)
    {
        return view('collections.show', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collections::find($id);

        return view('collections.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $collection = Collections::find($id);

        $collection->date_collected = request('date_collected');
        $collection->comment = request('comment');
        $collection->client_id = request('client_id');
        $collection->payment_id = request('payment_id');
        $collection->collector_id = request('collector_id');

        $collection->save();

        return redirect('/collections');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Collections::find($id)->delete();

        return redirect('/collections');
    }
}
