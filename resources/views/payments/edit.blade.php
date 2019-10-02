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
                    @foreach($client as $clients)
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">NRC</th>
                        </thead>
                        <tbody>
                            <td scope="col">{{ $clients->id }}</td>
                            <td scope="col">{{ $clients->fname }}</td>
                            <td scope="col">{{ $clients->lname }}</td>
                            <td scope="col">{{ $clients->nrc }}</td>
                        </tbody>
                        <thead>
                            <th scope="col">Phone 1</th>
                            <th scope="col">Phone 2</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                        </thead>
                        <tbody>
                            <td scope="col">{{ $clients->phone1 }}</td>
                            <td scope="col">{{ $clients->phone2 }}</td>
                            <td scope="col">{{ $clients->email }}</td>
                            <td scope="col">{{ $clients->address }}</td>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
	<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit payments</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<form method="POST" action="/payments/{{ $payment->id }}">
                    		{{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control @error('amount') is valid @enderror" name="amount" value="{{ $payment->amount }}" required autocomplete="fname" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>
                                <div class="col-md-6">
                                    <input id="duration" type="text" class="form-control @error('duration') is valid @enderror" name="duration" value="{{ $payment->duration }}" required autocomplete="duration" autofocus>
                                </div>
                            </div>

                           <div class="form-group row">
                                <label for="nrc" class="col-md-4 col-form-label text-md-right">{{ __('Date paid') }}</label>
                                <div class="col-md-6">
                                    <input id="datePaid" type="text" class="form-control @error('datePaid') is valid @enderror" name="datePaid" value="{{ $payment->datePaid }}" required autocomplete="datePaid" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="datedue" class="col-md-4 col-form-label text-md-right">{{ __('Due date') }}</label>
                                <div class="col-md-6">
                                    <input id="datedue" type="text" class="form-control @error('address') is valid @enderror" name="datedue" value="{{ $payment->datedue }}" required autocomplete="datedue" autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                    {{ __('Edit') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection