<DOCTYPE! html>

<html>

	<head>
		<title>Les perles du monde</title>

		<!-- Insertion des meta -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="author" content="Anaïs Amato" />
		<meta name="description" content="" />
		<meta name="keywords"  content="" />
		<meta name="Resource-type" content="Document" />

		<!-- Lien bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<link rel="stylesheet" href="css/style.css">

		<script src="https://maps.googleapis.com/maps/api/js"></script>
	

	</head>

	<body>
	
		<header class="container">
			<div id="titre" class="row">
				<img class="col-xs-1 col-sm-1 col-md-1 col-lg-1 "src="Images/logo.png">
				<a href="accueil"><h1  class="col-xs-8 col-sm-8 col-md-8 col-lg-9 ">Les perles du mondes</h1></a>
				
				<nav id="connexion"  class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					<ul>
						<li><a href="">Se connecter</a></li>
					</ul>
				</nav>
			</div>
			<nav id="menu" class="row">
				<ul>
					<li class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-lg-offset-3 col-md-offset-3"><a href="ajout">AJOUTER UNE PERLE</a></li>
					<li class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-lg-offset-right-3"><a href="">CONSULTER UNE PERLE</a></li>
				</ul>
			</nav>

		</header>



		<section class="container">
			@section('section')

			@show
			
		</section>


		<footer>
			<p>Je suis un footer !</p>
		</footer>
	</body>

</html>
