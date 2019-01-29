<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('titre')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/templatecon.css">
</head>
<body>
	<div class="content">
		<div class="header">
			<div><!--ne pas supprimer permet d'ajuster les boutons connexion a droite--> 
			</div>
			<div class="connect">
				<a href="connexion" class="user-connexion user">Connexion</a>
				<i class="bonhomme fas fa-user fa-lg"></i>
				<a href="inscription" class="user-inscription user">Inscription</a>
			</div>
		</div>
		<div class="row menu-row"> 
			<div class="menu col-2">
				<a href="/"><img src="/images/cesi-logo.png" class="logo-menu"></a>

			</div>
			<div class="col contenu">
				@yield('contenu')
			</div>
		</div>
	</div>

	<div class="footer row">
		<div class="col">
			<a href="/mentions">Mentions légales</a>
		</div>
		<div class="col">
			<a href="/rgpd">Politique de Protection des Données personnelles</a>
		</div>
		<div class="col">
			<a href="/cgv">Conditions generales de ventes</a>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>