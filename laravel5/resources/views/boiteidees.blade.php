</form action="formulaireIdees">
<a href="formulaireIdees" style="color: black;">Proposez vos idées</a>
<form>
 

				<div class="produits">
					@foreach($idees as $idee)
					<div class="ligne-boutique">

								<div class="div-image">
									<img src="{{$idee-> image}}" class="img-produit" />
								</div>


								<div class="name-ligne">
									{{$idee-> nom}}
								</div>

								
								<div class="desc-ligne">
									<p class="desc-titre"> Description: </p>
									{{$idee-> description}} 
								</div>

								<div class="desc-ligne">
									<p class="desc-titre"> Description: </p>
									
								</div>


							<form  method="post" action="idees">
								{{csrf_field()}}
									<input type="text" value="{{$idee-> idee}}" style="display: none;" name="ididee"></input>
								<div class="div-button">
									<button class="add" type="submit">Like</button>
								</div>
							</form>
					 </div>


					 @endforeach
				</div>	 
					

