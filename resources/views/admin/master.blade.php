<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="{{url('assets/img/favicon.png')}}">
	<title>LIMS</title>

	<!-- Core CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	<style type="text/css">
		.select2-container--default .select2-selection--multiple {

			height: 43px !important;
		}

		.select2-container--default .select2-search--inline .select2-search__field {

			margin: 10px 0 0 11px !important;
		}
	</style>
</head>

<body>
	<!-- App Start-->
	<div id="root">
		<!-- App Layout-->
		<div class="app-layout-decked flex flex-auto flex-col">
			<div class="flex flex-auto min-w-0">
				<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full">
					<!-- Header Nav start -->
					@include("admin.header")
					<!-- Header Nav end -->
					<!-- Secondary Header Nav start -->
					@include("admin.topmenu")

					<!-- Secondary Header Nav end -->
					<!-- Popup start -->

					<!-- Popup end -->
					<div class="h-full flex flex-auto flex-col justify-between">
						<!-- Content start -->
						<main class="container mx-auto h-full">
							@yield('content')
						</main>
						<!-- Content end -->
						<!-- Footer start -->
						@include("admin.footer")
						<!-- Footer end -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Core Vendors JS -->
	<script src="{{url('assets/js/vendors.min.js')}}"></script>

	<!-- Other Vendors JS -->
	<script src="{{url('assets/vendors/apexcharts/apexcharts.js')}}"></script>

	<!-- Page js -->
	<script src="{{url('assets/js/pages/sales-dashboard.js')}}"></script>

	<!-- Core JS -->
	<script src="{{url('assets/js/app.min.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.js-example-basic-multiple').select2({
				placeholder: "Please Select hashtag",
			});
		});
	</script>
	@yield('scripts')
</body>

</html>