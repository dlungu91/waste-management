<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Payment;

class ClientsController extends Controller
{
    public function index()
    {

    	$clients = Client::all();

    	return view('Clients.index', compact('clients'));
    }

    public function create()
    {
    	return view('clients.create');
    }

    public function store()
    {
        Client::create(request([
            'fname',
            'lname',
            'nrc',
            'address',
            'phone1',
            'phone2',
            'email'
        ]));

        return redirect("clients");
    }

    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Client $client)
    {
        $client->update(request([
            'fname',
            'lname',
            'nrc',
            'address',
            'phone1',
            'phone2',
            'email'
        ]));

    	return redirect('/clients');
    }

    public function show(Client $client, Payment $payment)
    {
        $client_id = $client->id;

        $payments = Payment::all()->where('client_id', $client_id);

        return view('clients.show', compact('client'), compact('payments'));
    }

    public function destroy(Client $client)
    {
    	$client->delete();

        return redirect('/clients');
    }
}
