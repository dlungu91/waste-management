@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit collection</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<form method="POST" action="/collections/{{ $collection->id }}">
                    		{{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="date_collected" class="col-md-4 col-form-label text-md-right">{{ __('Date Collected') }}</label>
                                <div class="col-md-6">
                                    <input id="date_collected" type="text" class="form-control @error('date_collected') is valid @enderror" name="date_collected" value="{{ $collection->date_collected }}" required autocomplete="date_collected" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('Comment') }}</label>
                                <div class="col-md-6">
                                    <textarea rows="4" cols="5" id="comment" class="form-control @error('comment') is valid @enderror" name="comment" required autocomplete="comment" autofocus>{{ $collection->comment }}</textarea>
                                </div>
                            </div>

                           <div class="form-group row">
                                <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client ID') }}</label>
                                <div class="col-md-6">
                                    <input id="client_id" type="text" class="form-control @error('client_id') is valid @enderror" name="client_id" value="{{ $collection->client_id }}" required autocomplete="client_id" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="payment_id" class="col-md-4 col-form-label text-md-right">{{ __('Payment ID') }}</label>
                                <div class="col-md-6">
                                    <input id="payment_id" type="text" class="form-control @error('payment_id') is valid @enderror" name="payment_id" value="{{ $collection->payment_id }}" required autocomplete="payment_id" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="collector_id" class="col-md-4 col-form-label text-md-right">{{ __('Collector ID') }}</label>
                                <div class="col-md-6">
                                    <input id="collector_id" type="text" class="form-control @error('collector_id') is valid @enderror" name="collector_id" value="{{ $collection->collector_id }}" required autocomplete="collector_id" autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
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