<x-app-layout title="Create user">
	<x-card title="Create user">
		<form action="{{ route('users.store') }}" method="POST">
			@csrf

			<div class="form-group">
				<x-label for="email">{{ __('Email') }}</x-label>
				<x-input type="email" id="email" name="email" :value="old('email', $user->email)" :placeholder="__('Email')"></x-input>
				<x-invalid key="email"></x-invalid>
			</div>

			<div class="form-group">
				<x-label for="name">{{ __('Name') }}</x-label>
				<x-input type="text" id="name" name="name" :value="old('name', $user->name)" :placeholder="__('Name')"></x-input>
				<x-invalid key="name"></x-invalid>
			</div>

			<div class="form-group">
				<x-label for="password">{{ __('Password') }}</x-label>
				<x-input type="password" id="password" name="password" :placeholder="__('Password')"></x-input>
				<x-invalid key="password"></x-invalid>
			</div>

			<div class="form-group">
				<x-label for="password_confirmation">{{ __('Password confirmation') }}</x-label>
				<x-input type="password" id="password_confirmation" name="password_confirmation" :placeholder="__('Password confirmation')"></x-input>
				<x-invalid key="password_confirmation"></x-invalid>
			</div>

			<div class="form-group text-right">
				<x-button class="btn btn-primary">
					{{ __('Create') }}
				</x-button>
			</div>

		</form>
	</x-card>
</x-app-layout>