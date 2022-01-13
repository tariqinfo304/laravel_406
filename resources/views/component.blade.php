<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Component</title>
</head>
<body>
	@php($name="hi tariq")
	<h1>Componenet Alert</h1>
	<x-alert type="error" name="{{$name}}" />

	<x-admin.listing/>

	<x-Button/>
</body>
</html>