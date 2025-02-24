@extends('admin.master')
@section('content')
<!-- Content start -->
<main class="h-full">
	<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-8 sm:py-6">
		<div class="container mx-auto">
			@include('alertmessage.flash-message')
			<div class="card adaptable-card">
				<div class="card-body">
					<div class="lg:flex items-center justify-between mb-4">
						<h3 class="mb-4 lg:mb-0">Tests</h3>
						@if(Auth::user()->user_type == 1)
						<a href="{{ url('/test/create') }}">
							<button class="btn btn-solid">ADD NEW</button>
						</a>
						@endif
					</div>
					<div class="overflow-x-auto">
						<table id="product-list-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>Test Name</th>
									<th>Category</th>
									<th>Duration</th>
									<th>Price</th>
									@if(Auth::user()->user_type == 1)
									<th>Format</th>
									<th>Action</th>
									@endif
								</tr>
							</thead>
							<tbody>
								@foreach($labTests as $labTest)
								<tr>
									<td>
										<div class="flex items-center">
											<span class="ml-2 rtl:mr-2 font-semibold">{{ $labTest->name }}</span>
										</div>
									</td>
									<td>
										<span class="capitalize">{{ $labTest->category_name }}</span>
									</td>
									<td>
										<span>{{ $labTest->duration }} day</span>
									</td>
									<td>
										<span>Rs {{ $labTest->price }}</span>
									</td>
									@if(Auth::user()->user_type == 1)
									<td>
										<a href="{{ url('/test/format/create/'.$labTest->id) }}">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
												<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
											</svg>
										</a>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<a href="{{ url('/test/view/'.$labTest->id) }}" target="__blank">
													<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" height="1em" width="1em">
														<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
														<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
													</svg>
												</a>
											</span>
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<a href="{{ url('/test/edit/'.$labTest->id) }}">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
													</svg>
												</a>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<a href="{{ url('/test/delete/'.$labTest->id) }}">
													<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
													</svg>
												</a>
											</span>
										</div>
									</td>
									@endif
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
<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables/dataTables.custom-ui.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/product-list.js')}}"></script>
@endsection