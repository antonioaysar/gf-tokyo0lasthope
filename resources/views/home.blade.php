@extends('layouts.game')

@section('content')
            <h1 class="page-header">Mappa</h1>
            
            <div style="background-color: #162029; min-height:500px; max-height: 650px; overflow: auto;">
            
            	<ul class="nav nav-sidebar">
	    			<li><a href="{{ url('/mappa/piazza') }}">Piazza</a></li>
		            <li><a href="{{ url('/mappa/strada') }}">Strada</a></li>
		        </ul>
            
            </div>
            
            <!-- <img src="assets/images/t0lh/lodoss_map.jpg" class="img-responsive" alt="Colonna sinistra" style="margin-left: auto; margin-right: auto;">  -->
@endsection
