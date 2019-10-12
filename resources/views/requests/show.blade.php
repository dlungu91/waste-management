@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-bottom: 1em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">request details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                    	<thead>
                    		<th scope="col">ID</th>
                    		<th scope="col">Client ID</th>
                    		<th scope="col">Request</th>
                    		<th scope="col">Status</th>
                            <th scope="col">Date made</th>
                            <th scope="col">Date due</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col">{{ $request->id }}</td>
                    		<td scope="col">{{ $request->client_id }}</td>
                    		<td scope="col">{{ $request->request }}</td>
                    		<td scope="col">{{ $request->status }}</td>
                            <td scope="col">{{ $request->date_made }}</td>
                            <td scope="col">{{ $request->date_due }}</td>
                    	</tbody>
                            <td scope="col" colspan="6">
                                <form action="/requests/{{ $request->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Delete request') }}
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