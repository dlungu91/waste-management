@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Complaint</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<form method="POST" action="\complaints\{{ $complaint->id }}">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="complaint" class="col-md-4 col-form-label text-md-right">{{ __('Complaint') }}</label>
                                <div class="col-md-6">
                                    <textarea id="complaint" rows="4" cols="5" class="form-control @error('complaint') is valid @enderror" name="complaint" value="{{ old('complaint') }}" autocomplete="complaint" autofocus>{{ $complaint->complaint }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client ID') }}</label>
                                <div class="col-md-6">
                                    <input id="client_id" type="text" class="form-control @error('client_id') is valid @enderror" name="client_id" value="{{ $complaint->client_id }}" required autocomplete="client_id" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date_made" class="col-md-4 col-form-label text-md-right">{{ __('Date made') }}</label>
                                <div class="col-md-6">
                                    <input id="date_made" type="text" class="form-control @error('date_made') is valid @enderror" name="date_made" value="{{ $complaint->date_made }}" required autocomplete="date_made" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_due" class="col-md-4 col-form-label text-md-right">{{ __('Date due') }}</label>
                                <div class="col-md-6">
                                    <input id="date_due" type="text" class="form-control @error('date_due') is valid @enderror" name="date_due" value="{{ $complaint->date_due }}" required autocomplete="date_due" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                                <div class="col-md-6">
                                    <input id="status" type="text" class="form-control @error('collector_id') is valid @enderror" name="status" value="{{ $complaint->status }}" required autocomplete="fname" autofocus>
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