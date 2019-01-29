@extends('templatecon')


@section('titre')
Inscription
@endsection



@section('contenu')
		<h2>Inscription</h1>

	<div class="col-lg-6">
	    <form method="POST" action="/inscription">
	        {{ csrf_field() }}
	       
	        <div class="form-group">
	            <label for="nom">Nom:</label>
	            <input type="text" class="form-control" id="name" name="nom">
	        </div>


	        <div class="form-group">
	            <label for="prenom">Prenom:</label>
	            <input type="text" class="form-control" id="name" name="prenom">
	        </div>

	        @if($errors->has('email'))
				<p>	{{ $errors->first('email') }}	</p>

	        @endif
	 	
	 		<div class="form-group">
	 			<label for="centre">Centre:</label><br>
	        <SELECT name="centre" size="1">
				<OPTION value="Lyon">Lyon
				<OPTION value="Marseille">Marseille
				<OPTION value="Paris">Paris
				<OPTION value="Strasbourg">Strasbourg
				<OPTION value="Nice">Nice
				</SELECT>
			</div>


			<div class="form-group">
	 			<label for="rank">Fonction:</label><br>
	        <SELECT name="rank" size="1">
				<OPTION value="etudiant">Etudiant
				<OPTION value="prof">Prof
				</SELECT>
			</div>

	        <div class="form-group">
	            <label for="email">Email:</label>
	            <input type="email" class="form-control" id="email" name="email">
	        </div>

	         @if($errors->has('email'))
				<p>	{{ $errors->first('email') }}	</p>
		     @endif
	 
	        <div class="form-group">
	            <label for="password">mot de passe:</label>
	            <input type="password" class="form-control" id="password" name="password">
	        </div>

	        @if($errors->has('password'))
				<p>	{{ $errors->first('password') }}	</p>
		     @endif
	 
	        <div class="form-group">
	            <label for="password_confirmation">Confirmation Mot de passe:</label>
	            <input type="password" class="form-control" id="password_confirmation"
	                   name="password_confirmation">
	        </div>

			@if($errors->has('password_confirmation'))
				<p>	{{ $errors->first('password_confirmation') }}	</p>
		    @endif
	 
	        <div class="form-group">
	            <button style="cursor:pointer" type="submit" class="btn btn-primary">S'inscrire</button>
	        </div>
		</form>
 	</div>

 	<div class="col-lg-6">

<!-- IMAGE IMAGE IMAGE -->

 	</div>
@endsection