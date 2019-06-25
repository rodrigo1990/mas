<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")?>"/>
	<link rel="stylesheet" href="<?php echo asset("css/estilos.css")?>">
	<link rel="stylesheet" href="<?php echo asset("css/animate.css")?>">
	<link rel="stylesheet" href="<?php echo asset("OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css")?>">
	<link rel="stylesheet" href="<?php echo asset("OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css")?>">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>MAS - SITIO OFICIAL</title>
</head>
<body>

	@yield('content')
	

<script type="text/javascript" src="<?php echo asset("js/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.min.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("js/manejoDeMenus.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("OwlCarousel2-2.3.4/dist/owl.carousel.min.js")?>"></script>

@yield('scripts')
</body>
</html>