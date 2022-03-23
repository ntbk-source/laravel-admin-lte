@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => $errors->has($attributes['name']) ? 'form-control is-invalid' : 'form-control']) !!}>{{ $slot }}</textarea>