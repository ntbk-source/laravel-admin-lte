@props(['value', 'disabled'])

<button {!! $attributes !!} @isset($disabled) onclick="this.disabled=true;this.form.submit();" @endisset>
	{{ $value ?? $slot }}
</button>