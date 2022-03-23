<select {!! $attributes->merge(['class' => $errors->has($attributes['name']) ? 'form-control is-invalid' : 'form-control']) !!}>
    {{ $slot }}
</select>