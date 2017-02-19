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
	<!-- <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}"> 
	<link rel="stylesheet" href="{{ elixir('assets/css/style.css') }}"> -->
	<link rel="stylesheet" href="/assets/css/style.css">
	
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

<div class="wrap-public-layout">

	<div id="stars-group-1"></div>
	<div id="stars-group-2"></div>
	<div id="stars-group-3"></div>
	<div id="stars-group-4"></div>
	<div id="stars-group-5"></div>
	<div id="stars-group-6"></div>
	
	
	<header>
		<input id="menu-btn" class="menu-btn" type="checkbox"  />
		<label class="menu-icon" for="menu-btn"><i class="fa fa-moon-o fa-2x" aria-hidden="true"></i></label>
		
		<nav id="header-navigation-id">
			<ul class="menu">
				<li class="t0-nav-group-toggle"><a href="#">Home</a></li>
				<li class="t0-nav-group-toggle"><a href="{{ url('/regolamento') }}">@lang('messages.rulebook')</a></li>
				<li class="t0-nav-group-toggle"><a href="{{ url('/ambientazione') }}">@lang('messages.world')</a></li>
          
				<li><a href="{{ url('/login') }}">Login</a></li>
				<li><a href="{{ url('/register') }}">Iscrizione</a></li>
			</ul>
		</nav>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
			<nav>
				<ul>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a class="fadeout" href="{{ url('/regolamento') }}">@lang('messages.rulebook')</a></li>
					<li><a href="{{ url('/ambientazione') }}">@lang('messages.world')</a></li>
				</ul>
			</nav>	
		</div>
	</footer>
</div>	
	
	<script src="/assets/js/app.js" type="text/javascript"></script>
	
	<!-- JS 
	<script src="{{ elixir('assets/js/all.js') }}" type="text/javascript"></script>
	
	<script src="{{ elixir('assets/js/all-app-js.js') }}" type="text/javascript"></script>
	
	<script src="https://use.fontawesome.com/856b8a9539.js"></script> @yield('custom-js')
	
	<script type="text/javascript">
		var tooltip_offsetX = 20;
		var tooltip_offsetY = 20;
	</script>
	-->
	
</body>

</html>