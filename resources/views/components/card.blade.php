<div class="card card-outline card-primary">
	@isset($title)
	<div class="card-header">
		<h3 class="card-title">
			{{ __($title) }}
		</h3>
	</div>
	@endisset
	<div class="card-body">
		{{ $slot }}
	</div>
</div>