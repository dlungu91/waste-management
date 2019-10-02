@extends('layouts.app')

@section('content')
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
                        <tbody>
                            <td scope="col" colspan="4">
                                <form action="/clients/{{ $client->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Delete client') }}
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

<div class="container-fluid" style="margin-bottom: 1em">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Update paymen</div>

                <div class="card-body">
                    <form action="\payments" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="client_id" value="{{ $client->id }}">
                    <input type="hidden" name="tax" value="16">
                    <table>
                        <tr>
                            <td><label for="amount" class="col-form-label text-md-right">Amount</label></td><td>
                                <input type="text" name="amount" id="amount" class="form-control @error('address') is valid @enderror" value="{{ old('amount') }}" required autocomplete="address" autofocus>
                            </td>
                            <td>
                                <label for="duration" class="col-form-label text-md-right">Duration</label>
                            </td>
                            <td>
                                <input type="text" name="duration" id="duration" class="form-control @error('duration') is valid @enderror" value="{{ old('duration') }}" required autocomplete="duration" autofocus>
                            </td>
                            <td>
                                <label for="date" class="col-form-label text-md-right">Date</label>
                            </td>
                            <td>
                                <input type="text" name="datePaid" id="datePaid" class="form-control @error('address') is valid @enderror" value="{{ old('datePaid') }}" required autocomplete="address" autofocus value="{{ now() }}">
                            </td>
                            <td>
                                <label for="datedue" class="col-form-label text-md-right">Date due</label>
                            </td>
                            <td>
                                <input type="text" name="datedue" id="datedue" class="form-control @error('address') is valid @enderror" name="address" value="{{ old('datedue') }}" required autocomplete="address" autofocus>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@if ($payments->count())
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Payment history</div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Client ID</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Date Paid </th>
                                <th scope="col">Date Due</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($payments as $payment)
                                <tr>
                                    <td>
                                        <a href="/payments/{{ $payment->id }}">{{ $payment->id }}</a>
                                    </td>
                                    <td>
                                        {{ $payment->client_id }}
                                    </td>
                                    <td>
                                        {{ $payment->amount }}
                                    </td>
                                    <td>
                                        {{ $payment->duration }}
                                    </td>
                                    <td>
                                        {{ $payment->datePaid}}
                                    </td>
                                    <td>
                                        {{ $payment->datedue }}
                                    </td>
                                    <td>
                                        <a href="/payments/{{ $payment->id }}/edit">edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endif
@endsection