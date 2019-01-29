@extends('templateconnected')

@section('title')
Home
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" type="text/css" href="css/template.css">

@endsection

@section('nom-user')
Bonjour {{auth()->user()->prenom}}
@endsection

@section('content')
<div id="contenu-haut">
	Bienvenue sur le site officiel de BDE du CESi de Lyon
</div>

<div id="contenu-bas">
	<div id="bas-image">
		<img id="logoBDE" src="images/logo_bde.png" class="logo-menu" alt="Logo BDE">
	</div>
	<div id="bas-texte">
		<div id="texte-haut">
			Découvrez votre BDE
		</div>

		<div id="texte-bas">
			Description du BDE
		</div>
	</div>
</div>
@endsection