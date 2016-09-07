<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap Testing Page</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
	div {
		border: 1px dotted black;
	}
	</style>
</head>
<body>
	
	<div class="container-fluid">
		<h1>Hello, world!</h1>
	</div>
		
	<div class="container">
		
		<h3>Link</h3>
		<div><a href="#">Some text</a></div>

		<h3>My own divs</h3>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">col-md-3 col-md-offset-3</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>

		<h3>Basic</h3>
		<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
		<div class="row">
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>

			<!-- Columns are always 50% wide, on mobile and desktop -->
		<div class="row">
			<div class="col-xs-6">.col-xs-6</div>
			<div class="col-xs-6">.col-xs-6</div>
		</div>
	
	</div>
		
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
