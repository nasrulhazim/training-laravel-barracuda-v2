@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Invoices</div>

                <div class="card-body">

					<table class="table">
						<tr>
							<th>Reference No.</th>
							<th>Invoice Items</th>
							<th>Created At</th>
						</tr>
						@foreach($invoices as $invoice)
							<tr>
								<td>{{ $invoice->reference }}</td>
								<td>
									<ul>
									@foreach($invoice->items as $item)
										<li>{{ $item->name }} - RM {{ $item->amount }}</li>
									@endforeach
									</ul>
								</td>
								<td>{{ $invoice->created_at->format('d-m-Y') }}</td>
							</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection