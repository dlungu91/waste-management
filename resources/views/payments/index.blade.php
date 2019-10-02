@extends('layouts.app')

@section('content')
 <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Payments</div>

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
                    				<th scope="col">Client Id</th>
                    				<th scope="col">Amount</th>
                    				<th scope="col">Duration</th>
                    				<th scope="col">Date Paid </th>
                    				<th scope="col">Date Due</th>
                    				<th scope="col">Tax</th>
                    			</tr>
                    		</thead>
                    		<tbody>
                    			@foreach($payments as $payment)
                    				<tr>
                    					<td>
                    						<a href="payments/{{ $payment->id }}">{{ $payment->id }}</a>
                    					</td>
                    					<td>
                    						{{ $payment->client_id }}
                    					</td>
                    					<td>
                    						{{ $payment->amount }}
                    					</td>
                    					<td>
                    						{{ $payment->duration }}
                    					</td>
                                        <td>
                                            {{ $payment->datePaid}}
                                        </td>
                    					<td>
                    						{{ $payment->datedue }}
                    					</td>
                                        <td>
                                            {{ $payment->tax }}
                                        </td>
                                        <td>
                                            <a href="payments/{{ $payment->id }}/edit">edit</a>
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