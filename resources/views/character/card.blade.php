@extends('layouts.game') @section('content')

	<div class="character-card-title">
		<h3>{{ $personaggio->nome . ' ' . $personaggio->cognome }}</h3>
	</div>
	
	<div class="row character-card">
<!-- 		<div class="col-sm-4 col-md-4 col-lg-4"> -->
<!-- 			<div id="card-avatar" class="character-card-avatar"> -->
			
<!-- 				<div class="form-group"> -->
<!-- 					<figure id="picture-preview"> -->
<!-- 			           <img class="img-responsive" src="http://placehold.it/300x500"> -->
<!-- 			        </figure> -->
<!-- 				</div> -->
			
<!-- 			</div> -->
<!-- 		</div> -->
		<div class="col-sm-12 col-md-12 col-lg-12 character-card-tabs">
			<section>
				<div class="tabs tabs-style-tzoid">
					<div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-4 col-md-offset-4 character-card-tabs-col">
						<nav>
							<ul>
								<li class="col-sm-2 col-md-2 col-lg-2"><a href="#section-tzoid-1"><span>Scheda</span></a></li>
								<li class="col-sm-2 col-md-2 col-lg-2"><a href="#section-tzoid-2"><span>Abilità</span></a></li>
								<li class="col-sm-2 col-md-2 col-lg-2"><a href="#section-tzoid-3"><span>Incantesimi</span></a></li>
								<li class="col-sm-2 col-md-2 col-lg-2"><a href="#section-tzoid-4"><span>Inventario</span></a></li>
								<li class="col-sm-2 col-md-2 col-lg-2"><a href="#section-tzoid-5"><span>ID</span></a></li>
								<li class="col-sm-2 col-md-2 col-lg-2"><a href="#section-tzoid-6"><span>Affetti</span></a></li>
							</ul>
						</nav>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<img class="img-responsive" src="http://placehold.it/300x500">
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8 content-wrap">
						<section id="section-tzoid-1">
							@include('character.details')
						</section>
						<section id="section-tzoid-2"><p>2</p></section>
						<section id="section-tzoid-3"><p>3</p></section>
						<section id="section-tzoid-4"><p>4</p></section>
						<section id="section-tzoid-5"><p>5</p></section>
						<section id="section-tzoid-6"><p>6</p></section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
		</div>	
	</div>

@endsection