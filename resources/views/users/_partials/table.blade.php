<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Verify</th>
				<th>#</th>
			</tr>
		</thead>
		<tbody>
			@forelse($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					<span class="badge badge-{{ $user->email_verified_at ? 'success' : 'danger' }}">
						{{ $user->email_verified_at ? __('Verify') : __('Un-verify') }}
					</span>
				</td>
				<td>
					{!! actionBtn(route('users.edit', $user->id), 'info', 'edit') !!}
					{!! actionBtn(route('users.destroy', $user->id), 'danger', 'trash', ["onclick='destroy(this)'"]) !!}
				</td>
			</tr>
			@empty
			<tr>
				<td colspan="100%" class="text-center">
					{{ __('Empty data') }}
				</td>
			</tr>
			@endforelse
		</tbody>
	</table>

	<!-- Delete forms with javascript -->
	<form method="POST" class="d-none" id="delete-form">
		@csrf
		@method("DELETE")
	</form>

	{!! $users->links() !!}
</div>