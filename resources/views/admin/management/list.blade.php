@extends('admin.master')
@section('content')
<!-- Content start -->
<main class="h-full">
	<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-8 sm:py-6">
		<div class="container mx-auto" style="width: 70%;">
			@include('alertmessage.flash-message')
            <div class="hidden" id="error"></div>

			<div class="card adaptable-card">
				<div class="card-body">
					<div class="lg:flex items-center justify-between mb-4">
						<h3 class="mb-4 lg:mb-0">Signature</h3>
						<a href="{{ url('/lab/management/create') }}">
							<button class="btn btn-solid">ADD NEW</button>
						</a>
					</div>
					<div class="overflow-x-auto">
						<table id="product-list-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Type</th>
									<th>Show</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($labManagements as $res)
								<tr>
									<td>
										<div class="flex items-center">
											<span class="ml-2 rtl:mr-2 font-semibold capitalize">{{ $res->name }}</span>
										</div>
									</td>
									<td>
										<span>{{ $res->email }}</span>
									</td>
									<td>
										<span>{{ $res->gender }}</span>
									</td>
									<td>
										<span>{{ $res->type }}</span>
									</td>
									<td>
										<label class="switcher">
											<input type="checkbox" class="limit-switch" onchange="toggleSwitcher({{$res->id}},this)" {{($res->status == 1)? 'checked':'';}}>
											<span class="switcher-toggle"></span>
										</label>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<a href="{{ url('/lab/management/edit/'.$res->id) }}">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
													</svg>
												</a>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<a href="{{ url('/lab/management/delete/'.$res->id) }}">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
													</svg>
												</a>
											</span>
										</div>
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
	const baseUrl = window.location.origin + '/laravel/laboratory/lims/public'; // Laravel base URL

	function toggleSwitcher(userId, checkbox) {
		const isChecked = checkbox.checked

		const checkedCount = document.querySelectorAll('.limit-switch:checked').length;
        
		const MAX_LIMIT = 5;

		let error = document.getElementById('error');

		// If limit is exceeded, uncheck the current checkbox and show an alert
		if (isChecked && checkedCount > MAX_LIMIT) {
			checkbox.checked = false;
			error.classList = '';
			error.innerHTML = `<div class="alert alert-danger alert-block">
				<!-- <button type="button" class="close" data-dismiss="alert">×</button>     -->
				<strong>You can only select up to ${MAX_LIMIT} items.</strong>
			</div>`;
		
			return;
		} else {
			const route = isChecked ? `${baseUrl}/lab/signature/activate/${userId}` : `${baseUrl}/lab/signature/deactivate/${userId}`;


			window.location.href = route;
		}
	}
</script>

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables/dataTables.custom-ui.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/product-list.js')}}"></script>
@endsection