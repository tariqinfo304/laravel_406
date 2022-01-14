<table border="2">

	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>DOB</th>
			<th>Detail</th>
		</tr>
	</thead>
	<tbody>
		@foreach($list as $row)

			<tr>
				<td>{{ $row->id }}</td>
				<td>{{ $row->name }}</td>
				<td>{{ $row->age }}</td>
				<td>{{ $row->dob }}</td>
				<td>{{ $row->desc_detail }}</td>
			</tr>
		@endforeach
	</tbody>
	
</table>