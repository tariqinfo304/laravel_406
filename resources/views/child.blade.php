@extends("layout.index")

@section("title")
	Child Page
@endsection




@section("header")
	
	@parent
	<p>Child Header</p>

@endsection

@section("main_body")
	<h1>Child Conetent</h1>
@endsection