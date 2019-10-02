@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-bottom: 1em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Collection details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                    	<thead>
                    		<th scope="col">ID</th>
                    		<th scope="col">Date Collected</th>
                    		<th scope="col">Client ID</th>
                    		<th scope="col">Payment ID</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col">{{ $collection->id }}</td>
                    		<td scope="col">{{ $collection->date_collected }}</td>
                    		<td scope="col">{{ $collection->client_id }}</td>
                    		<td scope="col">{{ $collection->payment_id }}</td>
                    	</tbody>
                    	<thead>
                    		<th scope="col">Collector ID</th>
                    		<th scope="col" colspan="3">Comment</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col">{{ $collection->collector_id }}</td>
                    		<td scope="col" colspan="3">{{ $collection->comment }}</td>
                    	</tbody>
                        <tbody>
                            <td scope="col" colspan="4">
                                <form action="/collections/{{ $collection->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Delete collection') }}
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
@endsection