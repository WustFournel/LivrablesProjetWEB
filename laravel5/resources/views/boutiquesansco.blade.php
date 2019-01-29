@extends('template')

<!-- Nom de la fenêtre -->
@section('title')
Boutique
@endsection

<!-- Lien du CSS -->
@section('css') 
<link rel="stylesheet" type="text/css" href="css/template.css">
<link rel="stylesheet" type="text/css" href="css/boutique.css">
@endsection

 
<!-- Contenu de la page -->
@section('content')
<div id="titre_haut" style="font-size: xx-large; text-decoration: underline; font-style: italic; text-align: center;">
	Top des ventes
	<br>
	<br>
</div>
<div id="liste_haut">

	<div id="top_articles">
		<?php
		$topventes = DB::connection('mysql2')->select("call topventes");
		echo "<div class='ligne_tv' style>";
		for ($i=0; $i < 3; $i++) {
			echo "<div class='inner-ligne'>";
			$name_tv = $topventes[$i]->name;
			$image_tv = $topventes[$i]->image;
			$prix_tv = $topventes[$i]->prix;
			$desc_tv = $topventes[$i]->description;
			echo "<img src=".$image_tv." class='img-produit'>";
			echo "<p class='name_tv'>".$name_tv."</p>";
			echo "<p class='prix_tv'>".$prix_tv."€</p>";
			echo "<p class='desc_tv'>".$desc_tv."</p>";
			echo "</div>";
		}
		echo "</div>";
		?>
	</div>

</div>
<br>
<br>
@if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif
<form method="post" action="shop" name="nomdtonform">
	{{csrf_field()}}

	<label>trier par:</label>
	<select name="trier" size="1">
		<option value="normal">trier
			<option value="asc"> prix croissant
				<option value="desc"> prix decroissant
					<option value="nameasc">Nom A->Z
						<option value="mventes">Meilleurs Ventes
					</select>
					<button type="submit" class="trier-go">GO</button>
				</form>
				<br>
				<br>

				<div class="produits">
					@foreach($boutique as $produit)
					<div class="ligne-boutique" >
						<div class="div-image">
							<img src="{{$produit-> image}}" class="img-produit" />
						</div>
						<div class="name-ligne">
							
						</div>
						<div class="prix-ligne">
							Prix: {{$produit-> prix}}€
						</div>
						<div class="desc-ligne">
							<p class="desc-titre"> Description: </p>
							{{$produit-> description}} 
						</div>
					<form  method="post" action="addcart">
						{{csrf_field()}}
							<input type="text" value="{{$produit-> id}}" style="display: none;" name="idproduit"></input>
						<div class="div-button">
							<button class="add" type="submit">ajouter au panier</button>
						</div>
					</form>
							</div>
					
					@endforeach
				</div>

				@endsection