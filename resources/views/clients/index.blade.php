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
                    				<th scope="col">First Name</th>
                    				<th scope="col">Last Name</th>
                    				<th scope="col">NRC</th>
                    				<th scope="col">Address</th>
                    				<th scope="col">Phone1</th>
                    				<th scope="col">Phone2</th>
                    				<th scope="col">Email</th>
                                    <th scope="col"></th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			@foreach($clients as $client)
                    				<tr>
                    					<td>
                    						<a href="/clients/{{ $client->id }}">{{ $client->id }}</a>
                    					</td>
                    					<td>
                    						{{ $client->fname }}
                    					</td>
                    					<td>
                    						{{ $client->lname }}
                    					</td>
                    					<td>
                    						{{ $client->nrc }}
                    					</td>
                    					<td>
                    						{{ $client->address }}
                    					</td>
                    					<td>
                    						{{ $client->phone1 }}
                    					</td>
                    					<td>
                    						{{ $client->phone2 }}
                    					</td>
                    					<td>
                    						{{ $client->email }}
                    					</td>
                                        <td>
                                            <a href="/clients/{{ $client->id }}/edit">edit</a>
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