@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit client</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<form method="POST" action="/clients/{{ $client->id }}">
                    		{{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control @error('fname') is valid @enderror" name="fname" value="{{ $client->fname }}" required autocomplete="fname" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                <div class="col-md-6">
                                    <input id="lname" type="text" class="form-control @error('lname') is valid @enderror" name="lname" value="{{ $client->lname }}" required autocomplete="lname" autofocus>
                                </div>
                            </div>

                           <div class="form-group row">
                                <label for="nrc" class="col-md-4 col-form-label text-md-right">{{ __('NRC') }}</label>
                                <div class="col-md-6">
                                    <input id="nrc" type="text" class="form-control @error('nrc') is valid @enderror" name="nrc" value="{{ $client->nrc }}" required autocomplete="fname" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('address') is valid @enderror" name="address" value="{{ $client->address }}" required autocomplete="address" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone1" class="col-md-4 col-form-label text-md-right">{{ __('Phone 1') }}</label>
                                <div class="col-md-6">
                                    <input id="phone1" type="text" class="form-control @error('phone1') is valid @enderror" name="phone1" value="{{ $client->phone1 }}" required autocomplete="fname" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone2" class="col-md-4 col-form-label text-md-right">{{ __('Phone 2') }}</label>
                                <div class="col-md-6">
                                    <input id="phone2" type="text" class="form-control @error('phone2') is valid @enderror" name="phone2" value="{{ $client->phone2 }}" required autocomplete="phone2" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is valid @enderror" name="email" value="{{ $client->email }}" required autocomplete="fname" autofocus>
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