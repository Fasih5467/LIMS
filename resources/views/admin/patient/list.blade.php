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
				<div class="card adaptable-card">
					<div class="card-body">
						<table id="customers-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Contact</th>
									
									<th>Action</th>
								</tr>
							<tbody>
								@foreach($patients as $patient)
								<tr>
									<td>
										<div class="flex items-center">
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold capitalize" href="">{{ $patient->name }}</a>
										</div>
									</td>
									<td>{{ $patient->contact }}</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold"><a href="{{url('/patient/tests/'. $patient->id)}}" >Show Tests</a></div>
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
	<!-- Content end -->
	<footer class="footer flex flex-auto items-center h-16 px-4 sm:px-6 md:px-8">
		<div class="flex items-center justify-between flex-auto w-full">
			<span>Copyright © 2023 <span class="font-semibold">Elstar</span> All rights reserved.</span>
			<div>
				<a class="text-gray" href="#">Term &amp; Conditions</a>
				<span class="mx-2 text-muted"> | </span>
				<a class="text-gray" href="#">Privacy &amp; Policy</a>
			</div>
		</div>
	</footer>
</div>

@endsection

@section('scripts')

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables/dataTables.custom-ui.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/customers.js')}}"></script>
@endsection