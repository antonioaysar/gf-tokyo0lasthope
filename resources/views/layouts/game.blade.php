@inject('utils', 'App\Http\Utilities\Utilities')

<!DOCTYPE html>
<html lang="it">
<!--[if IE 9]>
	<html class="ie9" lang="it">    <![endif]-->
<!--[if IE 8]>
	<html class="ie8" lang="it">    <![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tokyo 0 Last Hope | @yield('title')</title>
    <meta name="description" content="@yield('description')">

	<meta name="author" content="Giorgio Federici">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	      <![endif]-->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <div id="app" class="game-wrapper">    
       
		<div class="container-fluid">
			<div class="row game-row">
		    	<div class="col-sm-2 col-md-2 sidebar column-sx hidden-xs">
		    		
		    		<h3>Tokyo 0 Quests</h3>
	    			<hr class="dotted">
	    			<ul class="queststicker my-justify">
						@foreach($utils::lastMonthQuests() as $quests)
							<li>
								<span class="quest-tricks-title">{{ $quests->title }}</span>
								<hr class="dotted quest-tricks-separator">
								<span>{{ $quests->text }}</span>
							</li>
						@endforeach
					</ul>  		
		    		
		    		<hr class="dotted">
		    		
		    		<div class="pg-avatar-sx">
		    			<a href="{{ url('/personaggio') }}">
		    				<img class="img-responsive" src="http://placehold.it/100x100">
		    			</a>
		    		</div>
		    		
		    		<nav class="navbar navbar-default">
		                <ul class="nav nav-sidebar nav-game">
			    			<li><a class="scifi-btn-4" href="{{ url('/mappa') }}">Mappa</a></li>
			    			<li><a class="scifi-btn-4" href="{{ url('/forum') }}">Bacheca</a></li>
				            <li><a class="scifi-btn-4" href="{{ url('/gestione') }}">Gestione</a></li>
				         </ul>
		              </nav>
		    		
		        </div>
		        <div class="col-xs-12 visible-xs">
		        
		        	<nav class="navbar navbar-default">
			              <div class="container-fluid">
			              	<div class="navbar-header">
					            <button id="burger" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					              <span class="sr-only">Toggle navigation</span>
					              <span class="icon-bar"></span>
					              <span class="icon-bar"></span>
					              <span class="icon-bar"></span>
					            </button>
					          </div>
					          <div id="navbar" class="navbar-collapse collapse">
				                <ul class="nav nav-sidebar">
					    			<li><a href="{{ url('/mappa') }}">Mappa</a></li>
						            <li><a href="{{ url('/gestione') }}">Gestione</a></li>
						            <li><a href="{{ url('/personaggio') }}">Personaggio</a></li>
						         </ul>
				             </div>
			          	</div>
		              </nav>
		        
		        </div>
		        
		        
				<div class="col-xs-12 col-sm-8 col-md-8 main">
					@yield('content')
        		</div>
        		
        		<div class="col-sm-2 col-md-2 sidebar column-dx hidden-xs">
		        	
		        	<h3>Tokyo 0 News</h3>
	    			<hr class="dotted">
	    			<ul class="newsticker">
						@foreach($utils::lastMonthNews() as $news)
							<li>{{ $news->text }}</li>
						@endforeach
					</ul>		    		
		    		
		    		<hr class="dotted">
		        	
		        	
		    		<ul class="nav nav-sidebar">
		    			@if (!Auth::guest())
				            <li>
	                        	<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	                            	<span class="glyphicon glyphicon-off"></span>
	                            </a>
	
	                         	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	                           		{{ csrf_field() }}
	                            </form>
	                        </li>
                        @endif
			          </ul>
		        </div>
    
    </div>

    <!-- JS -->

	<script src="{{ elixir('assets/js/all.js') }}" type="text/javascript"></script>
	
	@yield('custom-js')

	<script type="text/javascript">
		var tooltip_offsetX = 20;
		var tooltip_offsetY = 20;
	</script>
	
	<script type="text/javascript">
	$('.newsticker').newsTicker({
		 max_rows: 1,
		 row_height: 200,
		 duration: 7000,
	});

	$('.queststicker').newsTicker({
		 max_rows: 1,
		 row_height: 100,
		 duration: 7000,
	});
	</script>
</body>
</html>
