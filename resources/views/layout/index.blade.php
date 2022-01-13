<!DOCTYPE html>
<html>
<head>
	<title>@yield("title","Home")</title>
</head>
<body>

	@section("header")
		<h1>Parent Header</h1>
	@show


	@section("slider")
		<h1>Parent slider</h1>
	@show
	

	@yield("main_body")


	@section("footer")
		<h1>Parent footer</h1>
	@show

</body>
</html>