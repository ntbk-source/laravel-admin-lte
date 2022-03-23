@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $errors->has($attributes['name']) ? 'form-control is-invalid' : 'form-control']) !!} />