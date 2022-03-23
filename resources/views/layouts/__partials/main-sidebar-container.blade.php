<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">{{ config('app.name') }}</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		@auth
		<!-- Sidebar user panel (optional) -->
		<div class="pb-3 mt-3 mb-3 user-panel d-flex">
			<div class="image">
				<img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="{{ route('profile.index') }}" class="d-block">{{ Auth::user()->name }}</a>
			</div>
		</div>
		@endauth
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="/" class="nav-link {{ isActive('home') }}">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>{{ __('Home') }}</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="{{ route('users.index') }}" class="nav-link {{ isActive('users.*') }}">
						<i class="nav-icon fas fa-users"></i>
						<p>{{ __('User management') }}</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							{{ __('Dropdown') }}
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Dropdown 1</p>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->

</aside>