@extends('templateconnected')

@section ('css')
<link rel="stylesheet" type="text/css" href="css/template.css">
@endsection

@section('content')
<h2 style="text-align: center">Bienvenue sur la page des idées proposez la votre si dessous</h2>
<div class="col-lg-6">
	<form method="POST" action="/getimage" enctype="multipart/form-data" >
		{{ csrf_field() }}

		<div class="form-group">
			<label for="nom">Titre de l'idée:</label>
			<input type="text" class="form-control" id="name" name="nomevent">
		</div>

		 @if($errors->has('nomevent'))
				<p>	{{ $errors->first('nomevent') }}	</p>

	        @endif

		<div class="form-group">
			<label for="description">Description:</label>
			<input type="text" class="form-control" id="description" name="description">
		</div>
		 @if($errors->has('description'))
				<p>	{{ $errors->first('description') }}	</p>

	        @endif

		<div>
			<label for="nom">Ajoutez une image:</label>
			<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
			<input type="file" name="file" />
			<input type="submit" name="submit" value="Envoyer" />
		</div>
	</form>
</div>
@endsection