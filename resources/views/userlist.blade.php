<table class="table table-hover table-bordered" width="100%">
	<thead class="bg-success">
		<tr>
			<th class="font-weight-bold text-center">User name</th>
			<th class="font-weight-bold text-center">Email</th>
			<th class="font-weight-bold text-center">Date Created</th>
			<th class="font-weight-bold text-center">Date Updated</th>
			<th></th>
		</tr>
	</thead>
	<tbody class="table-sm">
		@foreach($users as $user)
		<tr>
			<td class="medium">{{ $user->name }}</td>
			<td class="medium">{{ $user->email }}</td>
			<td class="medium">{{ $user->created_at }}</td>
			<td class="medium">{{ $user->updated_at }}</td>
			<td class="text-center">
				<div class="btn-group">
					<button class="btn btn-sm btn-info">update</button>
					<button class="btn btn-sm btn-danger">delete</button>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>