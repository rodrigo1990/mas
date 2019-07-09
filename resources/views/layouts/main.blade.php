<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>MAS - SITIO OFICIAL</title>
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/bootstrap-3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	
	

	@yield('content')
	


<script src="js/app.js"></script>
</body>
</html>