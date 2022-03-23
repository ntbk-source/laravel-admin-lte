<x-app-layout title="Edit user">
	<x-card title="Edit user">
		<form action="{{ route('users.update', $user->id) }}" method="POST">
			@csrf
			@method("PUT")

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
				<x-label for="new_password">{{ __('New password') }}</x-label>
				<x-input type="password" id="new_password" name="new_password" :placeholder="__('New password')"></x-input>
				<x-invalid key="new_password"></x-invalid>
			</div>

			<div class="form-group">
				<x-label for="new_password_confirmation">{{ __('New password confirmation') }}</x-label>
				<x-input type="password" id="new_password_confirmation" name="new_password_confirmation" :placeholder="__('New password confirmation')"></x-input>
				<x-invalid key="new_password_confirmation"></x-invalid>
			</div>

			<div class="form-group text-right">
				<x-button class="btn btn-primary">
					{{ __('Update') }}
				</x-button>
			</div>

		</form>

	</x-card>
</x-app-layout>