<x-auth-layout :title="__('Reset password page')">
    <div>
        <p class="login-box-msg">{{ __('You are only one step a way from your new password, recover your password now.') }}</p>
        <x-alert />
        <form action="{{ route('password.update') }}" method="post">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="input-group mb-3">
                <x-input type="text" name="email" :value="old('email') ?? $request->email" :placeholder="__('Email')" />
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
            <div class="row">
                <div class="col-12">
                    <x-button type="submit" disabled class="btn btn-primary btn-block" :value="__('Change password')" />
                </div>
                <!-- /.col -->
            </div>
        </form>
        <p class="mt-3 mb-1">
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </p>

    </div>
</x-auth-layout>