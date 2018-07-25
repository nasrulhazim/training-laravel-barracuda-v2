@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notifications</div>

                <div class="card-body">
					<table class="table">
						<tr>
							<th>Message</th>
							<th>Created At</th>
							<th>Action</th>
						</tr>
						@forelse(auth()->user()->notifications as $notification)
							<tr>
								<td>
									{{ 
										$notification->data['message']
									}}
								</td>
								<td>{{  $notification->created_at->diffForHumans() }}</td>
								<td>
									@if(is_null($notification->read_at))
									<a href="{{ route('notifications.mark-as-read', $notification->id) }}" 
										class="btn btn-sm btn-default border border-primary">Mark as Read</a>
									@endif
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="3">
									<p class="text-center">No new notifications</p>
								</td>
							</tr>
						@endforelse
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection