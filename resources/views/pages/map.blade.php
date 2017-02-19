@extends('layouts.game') @section('content')
<!-- <h1 class="page-header">Mappa</h1> -->

	@foreach($districts as $district)

		<div id="district-{{ $district->id }}" class="hidden-xs col-xs-12 col-sm-12 col-md-12 col-lg-12 dropdown districts-dropdown">
			<div class="hidden-xs col-sm-11 col-md-11 col-lg-11 district-bg">
			</div>
			<div class="hidden-xs col-sm-1 col-md-1 col-lg-1 districts-open-chats">
			</div>
	  	</div>
	  	
	  	<div id="district-{{ $district->id }}-chats" class="district-chats hidden-xs">
  			<ul id="district-{{ $district->id }}-chats-ul">
		    	@foreach($district->chats as $chat)
	    			<li><a href="{{ URL::to('/mappa/' . strtolower($district->nome) . '/' . strtolower($chat->name)) }}">{{ $chat->name }}</a></li>
		       	@endforeach
		    </ul>
  		</div>
  		
  		<div class="col-xs-12 visible-xs">
		        
        	<nav class="navbar navbar-default">
	              <div class="container-fluid">
	              	<div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed districts-navbar scifi-button-2" data-toggle="collapse" data-target="#district-{{ $district->id }}-navbar" aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span >{{ 'Distretto di ' . $district->nome }}</span>
			            </button>
			          </div>
			          <div id="district-{{ $district->id }}-navbar" class="navbar-collapse collapse">
		                <ul class="nav nav-sidebar">
		                	@foreach($district->chats as $chat)
			    			<li><a href="{{ URL::to('/mappa/' . strtolower($district->nome) . '/' . strtolower($chat->name)) }}">{{ $chat->name }}</a></li>
				            @endforeach
				         </ul>
		             </div>
	          	</div>
              </nav>
        
        </div>

  	@endforeach


<!-- <img src="assets/images/t0lh/lodoss_map.jpg" class="img-responsive" alt="Colonna sinistra" style="margin-left: auto; margin-right: auto;">  -->
@endsection

@section('custom-js')

<script src="{{ elixir('assets/js/map-js.js') }}" type="text/javascript"></script>

@endsection