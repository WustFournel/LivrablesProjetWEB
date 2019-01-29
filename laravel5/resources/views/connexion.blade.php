@extends('templatecon')

@section('contenu')
 <form method="POST" action="/connexion">
	        {{ csrf_field() }}

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
	            <button style="cursor:pointer" type="submit" class="btn btn-primary">Se connecter</button>
	        </div>
</form>	        
@endsection