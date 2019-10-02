@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Collection</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<form method="POST" action="\collections">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="date_collected" class="col-md-4 col-form-label text-md-right">{{ __('Date Collected') }}</label>
                                <div class="col-md-6">
                                    <input id="date_collected" type="text" class="form-control @error('date_collected') is valid @enderror" name="date_collected" value="{{ old('date_collected') }}" required autocomplete="date_collected" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                                <div class="col-md-6">
                                    <textarea id="comment" rows="4" cols="5" class="form-control @error('comment') is valid @enderror" name="comment" value="{{ old('comment') }}" autocomplete="comment" autofocus></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client') }}</label>
                                <div class="col-md-6">
                                    <input id="client_id" type="text" class="form-control @error('client_id') is valid @enderror" name="client_id" value="{{ old('client_id') }}" required autocomplete="client" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="payment_id" class="col-md-4 col-form-label text-md-right">{{ __('Payment ID') }}</label>
                                <div class="col-md-6">
                                    <input id="payment_id" type="text" class="form-control @error('payment_id') is valid @enderror" name="payment_id" value="{{ old('payment_id') }}" required autocomplete="payment_id" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="collector_id" class="col-md-4 col-form-label text-md-right">{{ __('Collected by') }}</label>
                                <div class="col-md-6">
                                    <input id="collector_id" type="text" class="form-control @error('collector_id') is valid @enderror" name="collector_id" value="{{ old('collector_id') }}" required autocomplete="fname" autofocus>
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