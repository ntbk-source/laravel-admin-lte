@error($key)
<div class="invalid-feedback"><strong>{{ $message }}</strong></div>
@else
{{ $slot }}
@enderror