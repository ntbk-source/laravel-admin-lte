<x-auth-layout :title="__('Forgot password page')">
	<div>
		<p class="login-box-msg">{{ __('You forgot your password? Here you can easily retrieve a new password.') }}</p>
		<x-alert />
		<form action="{{ route('password.email') }}" method="post">
			@csrf
			<div class="input-group mb-3">
				<x-input type="text" name="email" :value="old('email')" :placeholder="__('Email')" />
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-envelope"></span>
					</div>
				</div>
				<x-invalid key="email" />
			</div>
			<div class="row">
				<div class="col-12">
					<x-button type="submit" disabled class="btn btn-primary btn-block" :value="__('Request new password')" />
				</div>
				<!-- /.col -->
			</div>
		</form>
		<p class="mt-3 mb-1">
			<a href="{{ route('login') }}">{{ __('Login') }}</a>
		</p>

	</div>
</x-auth-layout>