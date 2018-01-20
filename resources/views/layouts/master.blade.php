<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('title') - ncut</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
		<!-- //bootstrap -->
		<link href="css/dashboard.css" rel="stylesheet">
		<!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<!--start-smoth-scrolling-->
	</head>

	<body>	
		@include('layouts.partials.navigation')

		@include('layouts.partials.sidebar')
		
		@yield('content')	

	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	</body>
</html>