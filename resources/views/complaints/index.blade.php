@extends('layouts.app')

@section('content')
 <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Clients</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    	<table class="table table-striped">
                    		<thead>
                    			<tr>
                    				<th scope="col">ID</th>
                    				<th scope="col">Complaint</th>
                    				<th scope="col">Client ID</th>
                    				<th scope="col">Date made</th>
                    				<th scope="col">Date due</th>
                    				<th scope="col">Status</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			@foreach($complaints as $complaint)
                    				<tr>
                    					<td>
                    						<a href="/complaints/{{ $complaint->id }}">{{ $complaint->id }}</a>
                    					</td>
                    					<td>
                    						{{ $complaint->complaint }}
                    					</td>
                    					<td>
                    						{{ $complaint->client_id }}
                    					</td>
                    					<td>
                    						{{ $complaint->date_made }}
                    					</td>
                    					<td>
                    						{{ $complaint->date_due }}
                    					</td>
                    					<td>
                    						{{ $complaint->status }}
                    					</td>
                                        <td>
                                            <a href="/complaints/{{ $complaint->id }}/edit">edit</a>
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