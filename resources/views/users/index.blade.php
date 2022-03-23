<x-app-layout title="Users">
	<x-card title="Users">
		<div class="mb-4">
			<a href="{{ route('users.create') }}" class="btn btn-primary">
				{{ __('Create new user') }}
			</a>
		</div>
		@include('users._partials.table')
	</x-card>

	@push('js')
	<script>
		function destroy(element) {
			event.preventDefault()
			let form = document.getElementById('delete-form');
			form.setAttribute('action', element.getAttribute('href'))
			swalConfirm('Are you sure ?', `You won't be able to revert this.`, () => {
				form.submit()
			})
		}
	</script>
	@endpush
</x-app-layout>