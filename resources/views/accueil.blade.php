<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div class="body-wrap">
	 <nav class="nav-menu mobile-menu">
              <li><a class="active" href="{{url('general')}}">General</a></li>
                </nav>
     <div class="container">
    
    

<head>
<meta charset="UTF-8">
	
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<a class="active" href="{{url('general')}}">General</a>

<body>
<div class="container">
        <div class="image-container">
            <img src="./public/images/am.jpg" alt="photo profile">
        </div>
        </div>
</body>
</head>