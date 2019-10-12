@extends('layouts.app')

@section('content')
</div>
	<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add payments</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<form method="POST" action="/payments">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Client ID') }}</label>
                                <div class="col-md-6">
                                    <input id="client_id" type="text" class="form-control @error('client_id') is valid @enderror" name="client_id" required autocomplete="client_id" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                                <div class="col-md-6">
                                    <input id="amount" type="text" class="form-control @error('amount') is valid @enderror" name="amount" required autocomplete="amount" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="duration" class="col-md-4 col-form-label text-md-right">{{ __('Duration') }}</label>
                                <div class="col-md-6">
                                    <input id="duration" type="text" class="form-control @error('duration') is valid @enderror" name="duration" required autocomplete="duration" autofocus>
                                </div>
                            </div>

                           <div class="form-group row">
                                <label for="nrc" class="col-md-4 col-form-label text-md-right">{{ __('Date paid') }}</label>
                                <div class="col-md-6">
                                    <input id="datePaid" type="text" class="form-control @error('datePaid') is valid @enderror" name="datePaid" required autocomplete="datePaid" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="datedue" class="col-md-4 col-form-label text-md-right">{{ __('Due date') }}</label>
                                <div class="col-md-6">
                                    <input id="datedue" type="text" class="form-control @error('address') is valid @enderror" name="datedue" required autocomplete="datedue" autofocus>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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