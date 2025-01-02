@extends('admin.master')
@section('content')

<div class="h-full flex flex-auto flex-col justify-between">
	<!-- Content start -->
	<main class="h-full">
		<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
			<div class="container mx-auto">
				<div class=" mb-4">
					<h3>Patients</h3>
				</div>
				@include('alertmessage.flash-message')
				<div class="card adaptable-card">
					<div class="card-body">
						<table id="customers-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>S.no</th>
									<th>Name</th>
									<th>Test</th>
									<th>Created</th>
									<th>Test Generate</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							<tbody>
								@foreach($tests as $test)
								<tr>
									<td>{{ $test->id }}</td>
									<td>
										<div class="flex items-center">
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold capitalize" href="">{{ $test->patient_name }}</a>
										</div>
									</td>

									<td>{{ $test->test_name }}</td>
									<td>{{ $test->created_at }}</td>
									<td>{{$test->is_result}}</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-{{isset($test->status) && $test->status == 'Received' ? 'emerald' : 'danger'}}-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">{{isset($test->status) && $test->status == 'Received' ? 'Received' : 'pending'}}</span>
										</div>
									</td>
									<td>

										@if(isset($test->is_result) && $test->is_result == 'no')
										<div class="text-primary-600 cursor-pointer select-none font-semibold">
											<a href="{{url('/patient/test/result/'.$test->id)}}">Add Result</a>
										</div>
										@endif
										@if(isset($test->is_result) && $test->is_result == 'yes')
										<div class="text-primary-600 cursor-pointer select-none font-semibold">
											<a target="__blank" href="{{url('/patient/generate_pdf/'.$test->id)}}">Generate Pdf</a>
										</div>
										@endif
										@if($test->is_result !== 'no' && $test->status !== 'Received')
										<div class="text-primary-600 cursor-pointer select-none font-semibold">
											<a href="{{url('/received_test/'.$test->id)}}">Received Test</a>
										</div>
										@endif
									</td>
								</tr>
								@endforeach

							</tbody>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

@endsection

@section('scripts')

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables/dataTables.custom-ui.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/customers.js')}}"></script>
@endsection