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
						<a href="{{ url('/test/create') }}">
							<button class="btn btn-solid">ADD NEW</button>
						</a>
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
									<th></th>
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
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-3.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Black Sneaker
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Shoes
										</span>
									</td>
									<td>
										52
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="capitalize font-semibold text-emerald-500">In Stock</span>
										</div>
									</td>
									<td>
										<span>
											$99
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-4.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Gray Hoodies
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Cloths
										</span>
									</td>
									<td>
										92
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="capitalize font-semibold text-emerald-500">In Stock</span>
										</div>
									</td>
									<td>
										<span>
											$68
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-5.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Blue Backpack
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Bags
										</span>
									</td>
									<td>
										0
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-red-500"></span>
											<span class="capitalize font-semibold text-red-500">Out Of Stock</span>
										</div>
									</td>
									<td>
										<span>
											$70
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-6.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												White Sneaker
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Shoes
										</span>
									</td>
									<td>
										18
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="capitalize font-semibold text-emerald-500">In Stock</span>
										</div>
									</td>
									<td>
										<span>
											$29
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr> -->
								<!-- <tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-7.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Strip Analog Watch
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Watches
										</span>
									</td>
									<td>
										7
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-amber-500"></span>
											<span class="capitalize font-semibold text-amber-500">Limited</span>
										</div>
									</td>
									<td>
										<span>
											$
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-8.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Beats Solo Headphone
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Devices
										</span>
									</td>
									<td>
										0
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-red-500"></span>
											<span class="capitalize font-semibold text-red-500">Out Of Stock</span>
										</div>
									</td>
									<td>
										<span>
											$869
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-9.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Apple Macbook Pro
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Devices
										</span>
									</td>
									<td>
										27
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="capitalize font-semibold text-emerald-500">In Stock</span>
										</div>
									</td>
									<td>
										<span>
											$1599
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-10.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Bronze Analog Watch
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Watches
										</span>
									</td>
									<td>
										6
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-amber-500"></span>
											<span class="capitalize font-semibold text-amber-500">Limited</span>
										</div>
									</td>
									<td>
										<span>
											$729
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-11.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Apple Watch
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Devices
										</span>
									</td>
									<td>
										51
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="capitalize font-semibold text-emerald-500">In Stock</span>
										</div>
									</td>
									<td>
										<span>
											$388
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="flex items-center">
											<span class="avatar avatar-rounded avatar-md">
												<img class="avatar-img avatar-rounded" src="img/products/product-12.jpg" loading="lazy">
											</span>
											<span class="ml-2 rtl:mr-2 font-semibold">
												Antique Analog Watch
											</span>
										</div>
									</td>
									<td>
										<span class="capitalize">
											Watches
										</span>
									</td>
									<td>
										30
									</td>
									<td>
										<div class="flex items-center gap-2">
											<span class="badge-dot bg-emerald-500"></span>
											<span class="capitalize font-semibold text-emerald-500">In Stock</span>
										</div>
									</td>
									<td>
										<span>
											599
										</span>
									</td>
									<td>
										<div class="flex justify-end text-lg">
											<span class="cursor-pointer p-2 hover:text-indigo-600">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
												</svg>
											</span>
											<span class="cursor-pointer p-2 hover:text-red-500">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
												</svg>
											</span>
										</div>
									</td>
								</tr> -->
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