<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>
			@yield('title')
		</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
		@yield('css')
	</head>

	<body>
		<div class="content">
			<div class="header">
				<div class="cart-boutique">
					<i class="fas fa-bars fa-lg fa-2x burger"></i>
					<i class="fas fa-shopping-cart fa-lg fa-2x"></i>
				</div>
				<div class="connect">
					<class="user-connexion user"> @yield('nom-user') </class="user-connexion>
					<i class="bonhomme fas fa-user fa-lg"></i>
					<a href="deconnexion" class="user-inscription user">Déconnexion</a>
				</div>
			</div>

	<div class="resp-header">
			
	</div>
	<div class="row menu-row"> 
		<div class="menu col-md-auto">
			<a href="/" class="a-image-menu">
				<img src="images/cesi-logo.png" class="logo-menu" alt="Logo CESI">
			</a>
			<ul class="nav-menu">
				<li class="nav-menu-li"><a href="/">Votre BDE</a></li>
				<li class="nav-menu-li"><a href="/boutique">Boutique</a></li>
				<li class="nav-menu-li"><a href="/evenements">Evenements</a></li>
				<li class="nav-menu-li">Retrouvez-nous</li>
			</ul>
				<div class="logos">
					<a href="https://twitter.com/cesi_sudest?lang=fr"><i class="fab fa-twitter fa-2x"></a></i>
					<a href="https://www.facebook.com/BDECesiLyon/"><i class="fab fa-facebook-f fa-2x"></a></i>
					<a href="https://www.instagram.com/campus_cesi/?hl=fr"><i class="fab fa-instagram fa-2x"></a></i>
					<a href="https://www.youtube.com/channel/UCWanyqUivV6rjbTABGFI8pA"><i class="fab fa-youtube fa-2x"></a></i>
					<a href="https://www.google.fr/maps/place/Campus+CESI/@45.7833906,4.7631067,17z/data=!4m13!1m7!3m6!1s0x47f4ecebacc7c719:0x785ad7577670e9c7!2s19+Avenue+Guy+de+Collongue,+69130+%C3%89cully!3b1!8m2!3d45.7833906!4d4.7653007!3m4!1s0x47f4ecea4de46df3:0x5a501576826999d8!8m2!3d45.7833851!4d4.7653347?hl=fr&authuser=0"><i class="fas fa-location-arrow fa-2x"></a></i>
				</div>
				<div>
					<iframe width="99%" height="20%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.763780236244202%2C45.78247985869987%2C4.767315387725831%2C45.78416331066971&amp;layer=mapnik&amp;marker=45.78332159103907%2C4.765547811985016"></iframe><br/>
				</div>
			</div>
			<div class="col contenu">

				@yield('content')

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
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/evenementsPast.js"></script>

	</body>
</html>