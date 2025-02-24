@extends('admin.master')
@section('content')
<!-- CSS for Modal -->
<style>
    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }

    .modal-content button {
        margin: 5px;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>

<div class="h-full flex flex-auto flex-col justify-between">
	<!-- Content start -->
	<main class="h-full">
		<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
			<div class="container mx-auto">
				<div class=" mb-4">
					<h3>Slips</h3>
				</div>
				@include('alertmessage.flash-message')
				<div class="card adaptable-card">
					<div class="card-body">
						<table id="customers-data-table" class="table-default table-hover data-table">
							<thead>
								<tr>
									<th>Doc Id.</th>
									<th>Name</th>
									<th>Created</th>
									<th>Balance</th>
									<th>Pay</th>
									<th>Action</th>
								</tr>
							<tbody>
								@php
								use Carbon\Carbon;
								@endphp
								@foreach($slips as $slip)
								<tr>
									<td>AMC{{ Carbon::parse($slip->created_at)->format('ymd') }}0{{ $slip->id }}</td>
									<td>
										<div class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold capitalize {{ $slip->balance_amount !=0 ? 'text-red-500':''; }}">
											{{ $slip->name }}
										</div>
									</td>
									<td>{{ $slip->created_at }}</td>
									<td>{{ $slip->balance_amount }}</td>
									<td><a onclick="showModal('{{url('/patient/balance/0'.$slip->id)}}')">
											{{ $slip->balance_amount != 0 ? "Add":""; }}
										</a></td>
									<td>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">
											<a href="{{url('/patient/slip/0'.$slip->id.'?header=yes')}}" target="__blank">With Header</a>
										</div>
										<div class="text-primary-600 cursor-pointer select-none font-semibold">
											<a href="{{url('/patient/slip/0'.$slip->id.'?header=no')}}" target="__blank">Without Header</a>
										</div>
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
<!-- Modal HTML -->
<div id="confirmationModal" class="modal" style="display:none;" onclick="outClick()">
    <div class="modal-content">
        <p>Are you sure you want to clear this balance?</p>
		<div class="inline-flex flex-wrap">
        <button class="btn btn-default" onclick="closeModal()">Cancel</button>
		<button class="btn btn-solid btn-sm" onclick="proceed()">Yes</button>
		</div>
    </div>
</div>

</div>



@endsection

@section('scripts')

<script>
let redirectUrl = '';

function showModal(url) {
	event.preventDefault();
    redirectUrl = url;
    document.getElementById('confirmationModal').style.display = 'flex';
}

function outClick(){
 document.getElementById('confirmationModal').style.display = 'none';
}

function proceed() {
    if (redirectUrl) {
        window.location.href = redirectUrl;
    }
}

function closeModal() {
    document.getElementById('confirmationModal').style.display = 'none';
}

</script>

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/vendors/datatables/dataTables.custom-ui.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/customers.js')}}"></script>
@endsection