
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
			<div class="div-button" >
				<form action="commentaire"> 
					<button class="add" type="submit" style="color: black;">Commenter</button>
				</form>
			</div>
		</div>
	</form>
</div>
@endforeach
</div>

