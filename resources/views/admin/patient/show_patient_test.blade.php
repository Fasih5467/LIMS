@extends('admin.master')
@section('content')

<div class="h-full flex flex-auto flex-col justify-between">
	<!-- Content start -->
	<main class="h-full">
		<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
			<div class="container mx-auto">
				<div class=" mb-4">
					<h3>Patient Tests</h3>
				</div>
				<div class="card adaptable-card">
					<div class="card-body">
						<table id="customers-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>Test</th>
									<th>Created</th>
									
									<th>Action</th>
								</tr>
							<tbody>
								@foreach($patient_tests as $test)
								<tr>
									
									<td>{{ $test->test_name }}</td>
									<td>{{ $test->created_at }}</td>
									
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold"><a href="{{ route('test.patient', ['test_id' => $test->test_id, 'patient_id' => $patient_id]) }}" >Add Result</a></div>
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