@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-bottom: 1em;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Complaint details</div>

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
                    		<th scope="col">Date Made</th>
                    		<th scope="col">Date Due</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col">{{ $complaint->id }}</td>
                    		<td scope="col">{{ $complaint->client_id }}</td>
                    		<td scope="col">{{ $complaint->date_made }}</td>
                    		<td scope="col">{{ $complaint->date_due }}</td>
                    	</tbody>
                    	<thead>
                    		<th scope="col">Status</th>
                    		<th scope="col" colspan="3">Complaint</th>
                    	</thead>
                    	<tbody>
                    		<td scope="col">{{ $complaint->status }}</td>
                    		<td scope="col" colspan="3">{{ $complaint->complaint }}</td>
                    	</tbody>
                        <tbody>
                            <td scope="col" colspan="4">
                                <form action="/complaints/{{ $complaint->id }}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Delete complaint') }}
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