<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title }}</title>

	@include('layouts.__partials.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Preloader -->
		@include('layouts.__partials.preloader')

		@include('layouts.__partials.navbar')

		@include('layouts.__partials.main-sidebar-container')

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			@include('layouts.__partials.content-header', ['title' => $title])
			<!-- Main content -->
			<section class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<x-alert />
						</div>
					</div>
					{{ $slot }}
				</div><!-- /.container-fluid -->
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2021 <a href="#">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.1.0
			</div>
		</footer>


	</div>
	<!-- ./wrapper -->


	@include('layouts.__partials.js')
</body>

</html>