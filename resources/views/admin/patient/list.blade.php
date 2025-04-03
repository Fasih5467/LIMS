@extends('admin.master')
@section('content')


<div class="h-full flex flex-auto flex-col justify-between">
	<!-- Content start -->
	<main class="h-full">
		<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
			<div class="container mx-auto">
				@include('alertmessage.flash-message')
				<div class="card adaptable-card">
					<div class="card-body">

						<form action="{{url('patient/list')}}" method="get" enctype="multipart/form-data">
							<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
								<div class="col-span-2">
								<h3>Record List</h3>
								</div>
								<div class="col-span-1">
									<div class="grid grid-cols-2 md:grid-cols-2 gap-4">
										<div class="col-span-1">
											<div class="form-item vertical">
												<div>
													<span class="input-wrapper">
														<input
															class="input"
															type="text"
															name="search"
															autocomplete="off"
															placeholder="Search.....">
													</span>
												</div>
											</div>
										</div>
										<div class="col-span-1">
											<button class="btn btn-solid mt-20">Search</button>
										</div>
									</div>
								</div>
							</div>
						</form>
						<table id="customers-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th></th>
									<th>Doc Id</th>
									<th>Name</th>
									<!-- <th>Test</th> -->
									<th>Created</th>
									<th></th>
									<!-- <th>Test Generate</th> -->
									<!-- <th>Status</th> -->
									<!-- <th>Action</th> -->
									<!-- <th></th> -->
								</tr>
							</thead>
							<tbody>
								@php
								use Carbon\Carbon;
								$check_id = '';
								$all_res = 'yes';
								@endphp

								@foreach ($data as  $key => $tests) 

								@foreach($tests as $index => $test)

								@if($check_id != $test->ppr_id)

								@php
								$pr_ppr_id = $test->ppr_id;
								@endphp

								@foreach($tests as $check)

								@if($pr_ppr_id == $check->ppr_id && $check->is_result == 'no')
								@php
								$all_res = 'no';
								break;
								@endphp
								@endif

								@endforeach

								<tr>
									<td>
										<button onclick="showValue({{$test->ppr_id}})" id="change-icon-{{$test->ppr_id}}">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-6 h-6">
												<path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd"></path>
											</svg>
										</button>
									</td>
									<td>AMC{{ Carbon::parse($test->created_at)->format('ymd').'0'.$test->ppr_id }}</td>
									<td>
										<div class="flex items-center">
											<a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold capitalize" href="">{{ $test->patient_name }}</a>
										</div>
									</td>
									<!-- <td>{{ $test->test_name }}</td> -->
									<td>{{ $test->created_at }}</td>
									<td>
									
										@if(isset($test->is_result) && $test->is_result == 'yes' && $all_res == 'yes')
										<a href="{{url('/patient/all_generate_pdf/'.$test->ppr_id)}}" target="_blank"><button class="btn btn-solid btn-sm">View All</button>
											@else
											<div class="flex items-center">
												<span class="badge-dot bg-danger-500"></span>
												<span class="ml-2 rtl:mr-2 capitalize">pending'</span>
											</div>
											@endif
									</td>
								</tr>
								<tr class="details-row hidden" id="details-{{$test->ppr_id}}">
									<td></td>
									<td colspan="5">
										<div class="p-4 bg-gray-100">
											<table class="table-default table-hover">

												<thead>
													<tr>
														<th>Test</th>
														<th>Test Generate</th>
														<th>Status</th>
														<th>Action</th>
														<th></th>
													</tr>
												</thead>
												<tbody id="show-value-{{$test->ppr_id}}">
													
												</tbody>
											</table>
										</div>
									</td>
									<td class="hidden"></td>
									<td class="hidden"></td>
									<td></td>
								</tr>

								@php
								$all_res = 'yes';
								@endphp

								@endif

								@php
								$check_id = $test->ppr_id;
								@endphp

								@endforeach

								@endforeach


							</tbody>
						</table>
					</div>
					<div>
						{{ $data->links() }}
					</div>
				</div>
			</div>
		</div>
	</main>
</div>
@endsection
<?php

use Illuminate\Support\Facades\Auth;
?>

@section('scripts')
<script>
	let res = <?php echo json_encode($data); ?>; // Ensure valid JSON format
	let userType = <?php echo json_encode(Auth::user()->user_type); ?>;
	let array = res.data;
</script>

<script>
	const baseUrl = window.location.origin + '/laravel/laboratory/lims/public'; // Laravel base URL
    console.log(array)
	function showValue(ppr_id) {
		let details = document.getElementById(`details-${ppr_id}`);
		details.classList.toggle('hidden');
		let changeIcon = document.getElementById(`change-icon-${ppr_id}`);

		if (details.classList.contains('hidden')) {
			changeIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
	        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd"></path>
	    </svg>`;
		} else {
			changeIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
	        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
	    </svg>`;
		}
		getValue(ppr_id);
	}

	function getValue(ppr_id) {

		
		let filterValue = array[ppr_id];

		let showValue = document.getElementById(`show-value-${ppr_id}`);

		showValue.innerHTML = '';

		filterValue.forEach(function(item) {
			showValue.innerHTML += ` <tr>
            <td>${item.test_name}</td>
            <td>${item.is_result}</td>
            <td>
                <div class="flex items-center">
                    <span class="badge-dot bg-${item.status && item.status == 'Received' ? 'emerald' : 'danger'}-500"></span>
                    <span class="ml-2 rtl:mr-2 capitalize">${item.status && item.status == 'Received' ? 'Received' : 'Pending'}</span>
                </div>
            </td>
            <td>
                <div class="inline-flex flex-wrap xl:flex gap-2">
                    ${item.is_result === 'no' ? `
                        <div class="text-primary-600 cursor-pointer select-none font-semibold">
                            <a href="${baseUrl}/patient/test/result/${item.id}"  target = "_blank" ><button class="btn btn-solid btn-sm">Add Result</button></a>
                        </div>
                    ` : ''}
                    ${item.is_result === 'yes' ? `
                        <div class="text-primary-600 cursor-pointer select-none font-semibold">
                            <a target="__blank" href="${baseUrl}/patient/generate_pdf/${item.id}"><button class="btn bg-sky-500 hover:bg-sky-400 active:bg-sky-600 text-white btn-sm">View</button></a>
                        </div>
                        <div class="text-primary-600 cursor-pointer select-none font-semibold">
                            <a target="__blank" href="${baseUrl}/patient/generate_pdf/${item.id}?header=yes"><button class="btn bg-sky-500 hover:bg-sky-400 active:bg-sky-600 text-white btn-sm">View With Logo</button></a>
                        </div>
                    ` : ''}
                    ${item.is_result !== 'no' && item.status !== 'Received' ? `
                        <div class="text-primary-600 cursor-pointer select-none font-semibold">
                            <a href="${baseUrl}/received_test/${item.id}"><button class="btn bg-emerald-500 hover:bg-emerald-400 active:bg-emerald-600 text-white btn-sm">Received Test</button></a>
                        </div>
                    ` : ''}
                </div>
            </td>
            <td>
                ${userType == 1 && item.is_result === 'yes' ? `
                    <a href="${baseUrl}/patient/test/edit/${item.id}"  target = "_blank" >
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" height="1em" width="1em">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </a>
                ` : ''}
            </td>
        </tr>`;
		});

		console.log(filterValue);
	}
</script>

@endsection