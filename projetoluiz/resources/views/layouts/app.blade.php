<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('lib/css/main.css') }}" rel="stylesheet">
	 <link href="{{ asset('lib/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body app sidebar-mini rtk>
    
    <header>
        @include('layouts.header')

    </header>

    <aside>
        @include('layouts.sidebar')
    </aside>

    <main class="app-content">
        @yield('content')
    </main>
		
		    <!-- Scripts -->
			<script src="{{ asset('lib/js/jquery-3.2.1.min.js') }}"></script>
			<script src="{{ asset('lib/js/popper.min.js') }}"></script>
			<script src="{{ asset('lib/js/bootstrap.min.js') }}"></script>
			<script src="{{ asset('lib/js/main.min.js') }}"></script>
			<script src="{{ asset('lib/js/plugins/pace.min.js') }}"></script>
    </div>
</body>
</html>
