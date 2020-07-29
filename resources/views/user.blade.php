<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
</head>
<body>
	<div>
		<h1>Usuarios</h1>
		
		@foreach ($users as $user)
			<p>{{ $user }}</p>
		@endforeach
	</div>
</body>
</html>
