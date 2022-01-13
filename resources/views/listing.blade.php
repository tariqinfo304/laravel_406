<hr/>
<h1>{{ $title }}</h1>
<table border="2">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>

		@forelse($list as $row)
			<tr>
				<td>{{ $row["id"] }}</td>
				<td>{{ $row["name"] }}</td>
			</tr>
		@empty
			<tr>
				<td colspan="2">
			Not data						
				</td>
			</tr>
		@endforelse
	</tbody>
	
</table>