@extends('layouts.app')

@section('content')
 <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Collections</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<table class="table table-striped">
                    		<thead>
                    			<tr>
                    				<th scope="col">Collection Id</th>
                    				<th scope="col">Date Collected</th>
                    				<th scope="col">Comment</th>
                    				<th scope="col">Client ID</th>
                    				<th scope="col">Payment ID</th>
                    				<th scope="col">Collector ID</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			@foreach($collections as $collection)
                    				<tr>
                    					<td>
                    						<a href="collections/{{ $collection->id }}">{{ $collection->id }}</a>
                    					</td>
                    					<td>
                    						{{ $collection->date_collected }}
                    					</td>
                    					<td>
                    						{{ $collection->comment }}
                    					</td>
                    					<td>
                    						{{ $collection->client_id }}
                    					</td>
                                        <td>
                                            {{ $collection->payment_id}}
                                        </td>
                    					<td>
                    						{{ $collection->collector_id }}
                    					</td>
                                        <td>
                                        <td>
                                            <a href="collections/{{ $collection->id }}/edit">edit</a>
                                        </td>
                    				</tr>
                    			@endforeach
                    		</tbody>
                    	</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection