<label {!! $attributes->merge(['class' => 'form-label']) !!}>
	{{ $value ?? $slot }}
</label>