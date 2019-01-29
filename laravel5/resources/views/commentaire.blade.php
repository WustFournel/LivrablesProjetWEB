@extends template-connected

@section ('css')
<link rel="stylesheet" type="text/css" href="css/template.css">
@endsection

@section('content')
<h2 style="text-align: center">Bienvenue sur la page des idées proposez la votre si dessous</h2>
<div class="col-lg-6">
	<form method="POST" action="/getimage" enctype="multipart/form-data" >
		{{ csrf_field() }}
		<div class="form-group">
			<label for="description">Votre commentaire</label>
			<input type="text" class="form-control" id="description" name="description">
		</div>
	</form>
</div>
@endsection