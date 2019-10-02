@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-bottom: 1em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Payment details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                    	<thead>
                    		<th scope="col">ID</th>
                    		<th scope="col">Client ID</th>
                    		<th scope="col">Amount</th>
                    		<th scope="col">Duration</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col">{{ $payment->id }}</td>
                    		<td scope="col">{{ $payment->client_id }}</td>
                    		<td scope="col">{{ $payment->amount }}</td>
                    		<td scope="col">{{ $payment->duration }}</td>
                    	</tbody>
                    	<thead>
                    		<th scope="col" colspan="2">Date Paid</th>
                    		<th scope="col" colspan="2">Date Due</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col" colspan="2">{{ $payment->datePaid }}</td>
                    		<td scope="col" colspan="2">{{ $payment->datedue }}</td>
                    	</tbody>
                        <tbody>
                            <td scope="col" colspan="4">
                                <form action="/payments/{{ $payment->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Delete Payment') }}
                                    </button>
                                </form>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-bottom: 1em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Client details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($client as $client)
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">NRC</th>
                        </thead>
                        <tbody>
                            <td scope="col">{{ $client->id }}</td>
                            <td scope="col">{{ $client->fname }}</td>
                            <td scope="col">{{ $client->lname }}</td>
                            <td scope="col">{{ $client->nrc }}</td>
                        </tbody>
                        <thead>
                            <th scope="col">Phone 1</th>
                            <th scope="col">Phone 2</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                        </thead>
                        <tbody>
                            <td scope="col">{{ $client->phone1 }}</td>
                            <td scope="col">{{ $client->phone2 }}</td>
                            <td scope="col">{{ $client->email }}</td>
                            <td scope="col">{{ $client->address }}</td>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection