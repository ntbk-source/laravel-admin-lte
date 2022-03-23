<x-auth-layout :title="__('Verification email page')">
	<div>
		<p class="">
			{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
		</p>
		<x-alert />

		<form method="POST" action="{{ route('verification.send') }}">
			@csrf
			<x-fbutton type="submit" disabled class="btn btn-primary btn-block" :value="__('Resend Verification Email')" />
		</form>

		<p class="mt-3 mb-1">
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<x-fbutton type="submit" onclick="return confirm('Are you sure ?');" disabled class="btn btn-danger" :value="__('Log Out')" />
		</form>
		</p>

	</div>
</x-auth-layout>