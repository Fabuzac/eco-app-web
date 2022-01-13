<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon.png">
    <link rel="mask-icon" href="/favicon/favicon.png" color="#ff2d20">
    <link rel="shortcut icon" href="favicon/favicon.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('lib/fontawesome.js') }}" defer></script>
    {{-- <script src="http://unpkg.com/turbolinks"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">        
        @include('_header-nav')

        @yield('header')
            <main class="mx-auto">
                <div class="flex">
                    {{-- column left --}}                    
                    <div class="sidebar-left w-14">
                        @include('_left-sidebar-links')
                    </div>
              
                    {{-- column center --}}
                    <div class="flex-1 p-3">
                       @yield('content')
                       @include('_footer')
                    </div>
            
                    {{-- column right --}}                        
                    <div class="pr-3 w-15">
                        <h3 class="font-bold text-xl mt-3 mb-2 text-white text-center background-colored p-1 rounded">
                            <i class="far fa-list-alt" style="font-size: 0.8em;"></i> Info list
                        </h3>
                        @isset($articles)
                            @include('_right-info-list')
                        @endisset
                    </div>
                </div>
            </main>     
    </div>    
</body>
</html>
