<?php

namespace App\Http\Controllers;

use App\Payment;
Use App\Client;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();

        return view('payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientId = "clients/".$request->client_id;

        Payment::create(request([
            'client_id',
            'amount',
            'duration',
            'datePaid',
            'datedue',
            'tax'
        ]));

        return redirect($clientId);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment, Client $client)
    {
        $client_id = $payment->client_id;

        $client = Client::all()->where('id', $client_id);

        return view('payments.show', compact('payment'), compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment, Client $client)
    {
        $client_id = $payment->client_id;

        $client = client::all()->where('id', $client_id);
        
        return view('Payments.edit', compact('payment'), compact('client'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Payment $payment)
    {
        $payment->update(request(([
            'amount',
            'duration',
            'datePaid',
            'datedue'
        ])));

        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
