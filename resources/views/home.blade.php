<!DOCTYPE html>
<html>
<head>

	<title>{{ $title_value }}</title>
	
</head>
<body>
	<h1>{{ $heading }}</h1>


	@if($num < 10 )
		<h1>LEss than 10</h1>
	@elseif( $num == 10  )
		<h1>== 10</h1>
	@else
		<h1>  >10</h1>
	@endif




	@php($i=0)

	{{ $i }}

	<ul>
	@while($i<10)

		<li>{{ $i }}</li>

		@php($i++)
	@endwhile
	</ul>


	<ul>
	@for($i=0;$i<10;$i++)

		<li>{{ $i }}</li>
		
	@endfor
	</ul>



	<table border="2">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			@foreach($list as $row)
				<tr>
					<td>{{ $row["id"] }}</td>
					<td>{{ $row["name"] }}</td>
				</tr>
			@endforeach
		</tbody>
		
	</table>

	

	@include("listing",["title" => "Listing data"])


	

</body>
</html>