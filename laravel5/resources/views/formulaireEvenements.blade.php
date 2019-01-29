@extends('templateconnected')

@section('css')

<link rel="stylesheet" type="text/css" href="/css/home.css">
@endsection


@section('nom-user')
Bonjour {{auth()->user()->prenom}}
@endsection


@section('contenu')
<div class="col-lg-6">
	    <form method="POST" action="/importImage">
	        {{ csrf_field() }}
	       
	 	
	 		<div class="form-group">
	 			<label for="text">Evenements:</label><br>
	        <SELECT name="evenements" size="1">
				<OPTION value="Lyon">Lyon
				<OPTION value="Marseille">Marseille
				<OPTION value="Paris">Paris
				<OPTION value="Strasbourg">Strasbourg		//foreach en bdd pour nom evenement 
				<OPTION value="Nice">Nice
				</SELECT>
			</div>


	        <div class="form-group">
	            <label for="">Commentaire:</label>
	            <input type="email" class="form-control" id="email" name="email">
	        </div>

	 
	        <div class="form-group">
	            <button style="cursor:pointer" type="submit" class="btn btn-primary">S'inscrire</button>
	        </div>
		</form>
 	</div>

 	<div class="col-lg-6">

<!-- IMAGE IMAGE IMAGE -->

 	</div>

@endsection