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
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
	#first div {
		border: 1px dashed black;
	}
	</style>
</head>
<body>
	
	<!-- TODO
		- Bootstrap/JavaScript - Modal - Usage
		- v nette vytvorit komponentu (control), ktera se zobrazi pri otevreni modalniho okna
		- zapsat si fade u modalniho okna - mozna pouzivat bez nej, animace je diky pomalosti hnusna
		- kouknout jak bootstrap <indikuje> otevreny modalni okno a vytvorit zabezpeceni, aby se nikdy dve nespustily
	-->
	
	<div class="container-fluid">
		<h1>Examples 4:</h1>
	</div>
	<div id="fourth" class="container">
		
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#turkeyModal">
			Open modal
		</button>
		
		<div id="turkeyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			
			<div class="modal-dialog" role="document">
				
				<div class="modal-content">
					
					<div class="modal-header">
						
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						
						<h4>Turkey's modal</h4>
						
					</div><!-- modal-header -->
					
					<div class="modal-body">
						<p>
							This is text in modal body. Information, information,
							another information, more information.
						</p>
					</div><!-- modal-body -->
					
					<div class="modal-footer">
						
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Submit</button>
						
					</div><!-- modal-footer -->
					
				</div><!-- modal-content -->
				
			</div><!-- modal-dialog -->
			
		</div><!-- modal -->
		
	</div>
	
	
	<div class="container-fluid">
		<h1>Examples 3:</h1>
	</div>
	<div id="third" class="container">
		
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				Dropdown
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Option1</a></li>
				<li><a href="#">Option2</a></li>
				<li><a href="#">Option3</a></li>
				<li role="separator" class="divider"><a href="#">Option3</a></li>
				<li><a href="#">Separated option</a></li>
			</ul>
		</div>
		
		<hr>
				
		<div>
			<button type="button" class="btn btn-default btn-lg">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> User
			</button>
		</div>
		
		<hr>
		
		<div class="btn-group">
			<button type="button" class="btn btn-primary">Ubuntu</button>
			<button type="button" class="btn btn-primary">Mint</button>
			<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Red hat <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Red hat</a></li>
					<li><a href="#">Fedora</a></li>
				</ul>
			</div>
		</div>
		
		<hr>
		
		<div class="alert alert-success fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Success!</strong> This alert box could indicate a successful or positive action.
		</div>
		
		<div class="alert alert-info fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Info</strong> about your personal information. Is it fucking ok?
		</div>
		
		<div class="well">
			Co to ma bejt?
		</div>
		
		<div class="jumbotron">
			<h1>Krocanův jumbotron</h1> 
			<p>No mooc nečum, kriple.</p>
		</div>
		
		<div class="">
			<img src="img/turkey.jpg" class="img-thumbnail" width="300" height="auto">
		</div>

		<p>This is text. Bla, bla bla.</p>
		<p class="lead">Hey, are you gay?</p>
		
	</div>
	
	<div class="container-fluid">
		<h1>Examples 2:</h1>
	</div>
	<div id="second" class="container">
			
		<h3>Form</h3>
		<div class="bs-callout bs-callout-info">
			This is text.
		</div>
		
		<h3>Sing in form</h3>
		<div class="row">
			<form class="form-horizontal">

				<div class="form-group">
					<label for="username" class="control-label col-md-2">Uživatelské jméno</label>
					<div class="col-md-5">
						<input type="text" class="form-control" id="username">
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="control-label col-md-2">Heslo</label>
					<div class="col-md-5">
						<input type="password" class="form-control" id="password">
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-5 col-md-offset-2">
						<div class="checkbox">
							<label>
								<input type="checkbox" id="remember"> Pamatovat si mě
							</label>
						</div>
					</div>
				</div>

				<div class="col-sm-offset-2">
					<button type="submit" class="btn btn-primary">Odeslat</button>
					<button type="submit" class="btn btn-default">Zrušit</button>
				</div>

			</form>
		</div>
		
		
		<h3 class="text-capitalize">Responsive table</h3>
		<div class="table-responsive">
			<table class="table table-hover"><!-- .table-bordered -->

				<thead>
					<tr><th>Column1</th><th>Column2</th><th>Column3</th><th>Column4</th></tr>
				</thead>

				<tbody>
					<tr><td>Value1</td><td>Value2</td><td>Value3</td><td>Value4</td></tr>
					<tr><td>Value1</td><td>Value2</td><td class="warning">WarningValue</td><td>Value4</td></tr>
					<tr class="active"><td>ActiveRow</td><td>ActiveRow</td><td>ActiveRow</td><td>ActiveRow</td></tr>
					<tr><td>Value1</td><td>Value2</td><td>ValueValueValueValue3</td><td class="danger">DangerValue</td></tr>
					<tr><td>Value1</td><td>Value2</td><td>Value3</td><td>Value4</td></tr>
				</tbody>

			</table>
		</div>
		
		<h3>Sample</h3>
		<samp>This was printed by "helloworld.c".</samp>
		
		<h3>Keyboard</h3>
		<p>Pro výběr všeho stiskněte <kbd>Ctrl + a</kbd></p>
		
		<h3>Preprocessed</h3>
		<pre>
for(int i = 1; i == 10; i++)
{
	printf("Hello.");
}
		</pre>
		
		<h3>Code</h3>
		<code>int i = 10;</code>
		
		<h3>Description</h3>
		<dl class="dl-horizontal">
			
			<dt>Kush</dt>
			<dd>You will be high as fuck.</dd>
			
			<dt>AK-47</dt>
			<dd>
				Lorem Ipsum je demonstrativní výplňový text používaný v tiskařském a knihařském průmyslu.
				Lorem Ipsum je považováno za standard v této oblasti už od začátku 16. století, kdy dnes
				neznámý tiskař vzal kusy textu a na jejich základě vytvořil speciální vzorovou knihu.
				Jeho odkaz nevydržel pouze pět století, on přežil i nástup elektronické sazby v podstatě beze změny
			</dd>
			
		</dl>
		
	</div>
	
	<div class="container-fluid">
		<h1>Examples 1:</h1>
	</div>
		
	<div id="first" class="container">
		
		<h3>Link</h3>
		<div><a href="#">Some text</a></div>

		<h3>My own divs</h3>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">col-md-3 col-md-offset-3</div>
		</div>
		
		<hr>
		
		<div class="row">
			<div class="col-sm-9">
				
				Level 1: .col-sm-9
				<div class="row">
					
					<div class="col-xs-8 col-sm-6">
						Level 2: .col-xs-8 .col-sm-6
					</div>
					
					<div class="col-xs-4 col-sm-6">
						Level 2: .col-xs-4 .col-sm-6
					</div>
					
				</div>
				
			</div>
		</div>
		
		<hr>
		
		<div class="row">
			<div class="col-xs-12 col-md-9">.col-xs-12 col-md-9</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
			<div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
			<div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
		</div>
		
		<hr>
		
		<div class="row">
			<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3 Resize your viewport or check it out on your phone for an example.</div>
			<div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>

			<!-- Add the extra clearfix for only the required viewport --
			<div class="clearfix visible-xs-block"></div> -->

			<div class="col-xs-6 col-sm-3">FIRST .col-xs-6 .col-sm-3</div>
			<div class="col-xs-6 col-sm-3">SECOND .col-xs-6 .col-sm-3</div>
		</div>
		
		<hr>

		<div class="row">
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
			<div class="col-md-1">.col-md-1</div>
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
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
