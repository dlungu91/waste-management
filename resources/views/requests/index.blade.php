@extends('layouts.app')

@section('content')
 <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Requests</div>

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
                                    <th scope="col">Client ID</th>
                                    <th scope="col">Collection ID</th>
                                    <th scope="col">Request</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date made</th>
                                    <th scope="col">Due date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requests as $request)
                                    <tr>
                                        <td>
                                            <a href="/requests/{{ $request->id }}">{{ $request->id }}</a>
                                        </td>
                                        <td>
                                            {{ $request->client_id }}
                                        </td>
                                        <td>
                                            {{ $request->collection_id }}
                                        </td>
                                        <td>
                                            {{ $request->request }}
                                        </td>
                                        <td>
                                            {{ $request->status }}
                                        </td>
                                        <td>
                                            {{ $request->date_made }}
                                        </td>
                                        <td>
                                            {{ $request->date_due }}
                                        </td>
                                        <td>
                                            <a href="/requests/{{ $request->id }}/edit">edit</a>
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