@extends('templateconnected')

<!-- Nom de la fenêtre --> 
@section('title')
Evenements
@endsection

<!-- Lien du CSS -->
@section('css')
<link rel="stylesheet" type="text/css" href="css/template.css">
<link rel="stylesheet" type="text/css" href="css/evenements.css">
<link rel="stylesheet" type="text/css" href="css/boutique.css">


@endsection

@section('nom-user')
Bonjour {{auth()->user()->prenom}}
@endsection

@section('content')
<div id='top'>
<button id='past'  style="cursor:pointer"  class="btn btn-primary">Passés</button>
<button id='encours' style="cursor:pointer"  class="btn btn-primary">En cours</button>
<button id='future' style="cursor:pointer"  class="btn btn-primary">Futurs</button>
<button id='idees' style="cursor:pointer"  class="btn btn-primary">Boite a idées</button>
</div>

@if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
@endif

<div class="produits">
	@foreach($evenements as $evenement)
	<div class="ligne-boutique" >

		<div class="div-image">
			<img src="{{$evenement-> url}}" class="img-produit" />
		</div>
		<div class="name-ligne">
			Nom: {{$evenement-> nom}}
		</div>
		<div class="prix-ligne">
			date: {{$evenement-> date}}
		</div>
		<div class="desc-ligne">
			<p class="desc-titre"> Description: </p>
			{{$evenement-> description}} 
		</div>
		<form>
			<input type="text" value="{{$evenement-> id_evenements}}" style="display: none"></input>
			<div class="div-button">
				<button class="add" type="submit">Commenter</button>
			</div>
		</form>
	</div>
	@endforeach
</div>


</div>
@endsection

