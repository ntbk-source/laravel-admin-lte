<x-auth-layout :title="__('Register page')">
	<div>
		<p class="login-box-msg">{{ __('Register a new membership') }}</p>
		<x-alert />
		<form action="{{ route('register') }}" method="post">
			@csrf
			<div class="input-group mb-3">
				<x-input type="text" name="name" :value="old('name')" :placeholder="__('Fullname')" />
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-user"></span>
					</div>
				</div>
				<x-invalid key="name" />
			</div>
			<div class="input-group mb-3">
				<x-input type="text" name="email" :value="old('email')" :placeholder="__('Email')" />
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-envelope"></span>
					</div>
				</div>
				<x-invalid key="email" />
			</div>
			<div class="input-group mb-3">
				<x-input type="password" name="password" :placeholder="__('Password')" />
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
				<x-invalid key="password" />
			</div>
			<div class="input-group mb-3">
				<x-input type="password" name="password_confirmation" :placeholder="__('Password confirm')" />
				<div class="input-group-append">
					<div class="input-group-text">
						<span class="fas fa-lock"></span>
					</div>
				</div>
				<x-invalid key="password_confirmation" />
			</div>

			<div class="text-right">
				<x-button type="submit" disabled class="btn btn-primary btn-block" :value="__('Sign Up')" />
			</div>
		</form>

		@if(config('auth.socialLogin') === true)
		<div class="social-auth-links text-center mt-2 mb-3">
			<a href="#" class="btn btn-block btn-primary">
				<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
			</a>
			<a href="#" class="btn btn-block btn-danger">
				<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
			</a>
		</div>
		<!-- /.social-auth-links -->
		@endif

		@if (Route::has('password.request'))
		<p class="mb-1">
			<a href="{{ route('password.request') }}">{{ __('I forgot my password') }}</a>
		</p>
		@endif
		<p class="mb-0">
			<a href="{{ route('login') }}" class="text-center">{{ __('Already registered?') }}</a>
		</p>

	</div>
</x-auth-layout>