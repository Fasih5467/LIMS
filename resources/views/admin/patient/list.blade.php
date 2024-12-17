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
									<th>Test</th>
									<th>Status</th>
									<th></th>
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
										<div class="flex items-center">{{ $patient->test_name }}</div>
									</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">process</span>
										</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold"><a href = "{{ $patient->test_id }}" >Update Record</a></div>
									</td>
								</tr>
								@endforeach
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-2.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=2">Terrance Moreno</a>
										</div>
									</td>
									<td>terrance_moreno@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">09/23/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-3.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=3">
												Ron Vargas
											</a>
										</div>
									</td>
									<td>ronnie_vergas@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-red-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">blocked</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">09/23/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-4.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=4">Luke Cook</a>
										</div>
									</td>
									<td>cookie_lukie@hotmail.com</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">12/10/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-5.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=5">Joyce Freeman</a>
										</div>
									</td>
									<td>joyce991@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">09/24/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-6.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=6">Samantha Phillips</a>
										</div>
									</td>
									<td>samanthaphil@infotech.io</td>
									<td>
										<div class="flex items-center"><span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">10/02/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-7.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=7">
												Tara Fletcher
											</a>
										</div>
									</td>
									<td>taratarara@imaze.edu.du</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">09/28/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-8.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=8">Frederick Adams</a>
										</div>
									</td>
									<td>iamfred@imaze.infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-red-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">blocked</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">12/11/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-9.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=9">Carolyn Hanson</a>
										</div>
									</td>
									<td>carolyn_h@gmail.com</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-red-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">blocked</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">10/18/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-10.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=10">Brittany Hale</a>
										</div>
									</td>
									<td>brittany1134@gmail.com</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">10/06/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-11.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#">Lloyd Obrien</a>
										</div>
									</td>
									<td>handsome-obrien@hotmail.com</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">10/19/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-12.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#">Gabriella May</a>
										</div>
									</td>
									<td>maymaymay12@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-red-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">blocked</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">10/14/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-13.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#">Lee Wheeler</a>
										</div>
									</td>
									<td>lee_wheeler@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">11/12/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-14.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#">Gail Barnes</a>
										</div>
									</td>
									<td>gailby0116@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">10/01/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-15.jpg" loading="lazy">
											</span>
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#">Ella Robinson</a>
										</div>
									</td>
									<td>ella_robinson@infotech.io</td>
									<td>
										<div class="flex items-center">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="ml-2 rtl:mr-2 capitalize">active</span>
										</div>
									</td>
									<td>
										<div class="flex items-center">11/07/2021</div>
									</td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
									</td>
								</tr> -->
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