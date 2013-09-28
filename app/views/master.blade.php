<!-- app/view/master.blade.php -->
<html>
<!-- Contains the head that will be on each of our pages with the same data -->
<head>
	<title>GitClub</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div id="container">
	<div id="globalHeader">
	<div id="globalLogo"></div>
	<ul id="globalQuicklinks">
<!-- if statement to see if the user is logged in or not, so it can display different texts -->
		@if(Auth::user())
			<li class="first">{{ HTML::link('user', ucwords(Auth::user()->firstName) )}}</li>
			<li class="second">{{HTML::link('index', 'View Posts')}} </li>
			<li class="last">{{HTML::link('logout', 'Logout')}}</li>
		@else
			 <li class="first"> {{HTML::link('login', 'Login')}} </li>
			 <li class="second last"> {{HTML::link('signup', 'Signup')}}</li> 
		@endif
	</ul>
	</div>

	<div class='container'>
		@include('plugins.status')
	</div>

	@yield('content')

	<div id="globalFooter">
	    © 2013 UniversiDD
	</div>
	</div>
<!-- Javascript Files 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="{{ asset('js/noty/jquery.noty.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/noty/layouts/top.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/noty/themes/default.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<!-- 
	<script type="text/javascript" src="http://underscorejs.org/underscore-min.js"></script>
	<script type="text/javascript" src="http://documentcloud.github.io/backbone/backbone-min.js"></script>
	-->
</body>
</html>