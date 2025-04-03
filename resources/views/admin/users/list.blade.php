@extends('admin.master')
@section('content')
<!-- Content start -->
<main class="h-full">
	<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-8 sm:py-6">
		<div class="container mx-auto" style="width: 50%;">
			@include('alertmessage.flash-message')
			<div class="card adaptable-card">
				<div class="card-body">
					<div class="lg:flex items-center justify-between mb-4">
						<h3 class="mb-4 lg:mb-0">Users</h3>
					</div>
					<div class="overflow-x-auto">
						<table id="product-list-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Active</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $index => $user)
								@if($user->user_type == 1)
								@continue;
								@endif
								<tr>
									<td>{{$user->id}}</td>
									<td>
										<div class="flex items-center">
											<span class="ml-2 rtl:mr-2 font-semibold capitalize">{{ $user->name }}</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">
											<span class="ml-2 rtl:mr-2 font-semibold">{{ $user->email }}</span>
										</div>
									</td>
									<td>
										<label class="switcher">
											<input type="checkbox" onchange="toggleSwitcher({{$user->id}},this)" {{($user->status == 1)? 'checked':'';}}>
											<span class="switcher-toggle"></span>
										</label>

									</td>
									<td>
										<!-- <div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<a href="{{ url('/remark/edit/') }}">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
													</svg>
												</a>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<a href="{{ url('/remark/delete/')}}">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
													</svg>
												</a>
											</span>
										</div> -->
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
</main>
<!-- Content end -->

@endsection

@section('scripts')

<script>
	const baseUrl = '/laravel/laboratory/lims/public';

	function toggleSwitcher(userId, checkbox) {
		const isChecked = checkbox.checked
	
		const route = isChecked ?`${baseUrl}/user/activate-user/${userId}` : `${baseUrl}/user/deactivate-user/${userId}`; 

	
		window.location.href = route;
	}
</script>

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables/dataTables.custom-ui.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/product-list.js')}}"></script>
@endsection