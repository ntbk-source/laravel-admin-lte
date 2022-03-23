<x-app-layout title="Profile">
	<div class="row">
		<div class="col-md-5">
			<x-card>
				<div class="text-center">
					<img class="profile-user-img img-fluid img-circle" src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="User profile picture">
				</div>
				<h3 class="profile-username text-center">
					{{ Auth::user()->name }}
				</h3>
				<ul class="list-group list-group-unbordered mb-3">
					<li class="list-group-item">
						<b>Fullname</b> <a class="float-right">{{ Auth::user()->name }}</a>
					</li>
					<li class="list-group-item">
						<b>Email</b> <a class="float-right">{{ Auth::user()->email }}</a>
					</li>
				</ul>
			</x-card>
		</div>
		<div class="col-md-7">
			<x-card title="Edit profile">
				<form action="{{ route('profile.update') }}" method="POST" id="profile-form">
					@csrf
					@method('PUT')

					<div class="form-group">
						<x-label for="name">{{ __('Fullname') }}</x-label>
						<x-input type="text" id="name" name="name" :value="old('name', user()->name)"></x-input>
						<x-invalid key="name"></x-invalid>
					</div>

					<div class="form-group">
						<x-label for="email">{{ __('Email') }}</x-label>
						<x-input type="email" id="email" name="email" :value="old('email', user()->email)" disabled></x-input>
						<x-invalid key="email"></x-invalid>
					</div>

					<div class="form-group">
						<x-label for="new_password">{{ __('New password') }}</x-label>
						<x-input type="password" id="new_password" name="new_password" placeholder="New password"></x-input>
						<x-invalid key="new_password">
							<small class="text-muted">{{ __('Empty if not change') }}</small>
						</x-invalid>
					</div>

					<div class="form-group">
						<x-label for="new_password_confirmation">{{ __('New password confirmation') }}</x-label>
						<x-input type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="New password"></x-input>
						<x-invalid key="new_password_confirmation">
							<small class="text-muted">{{ __('Empty if not change') }}</small>
						</x-invalid>
					</div>

					<div class="form-group text-right">
						<x-button class="btn btn-primary">
							{{ __('Update') }}
						</x-button>
					</div>

				</form>
			</x-card>
		</div>
	</div>

	@push('js')
	<script>

	</script>
	@endpush
</x-app-layout>