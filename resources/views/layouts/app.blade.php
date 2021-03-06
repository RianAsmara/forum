<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ (isset($title) ? $title . ' - ' : '') }}{{ config('app.name', 'Devover') }}</title>

    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_white.png') }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    @stack('css')
</head>
<body>
    <!-- loading -->
    <div class="loading w-full fixed h-full bg-gray-300 flex justify-center items-center">
        <img src="{{ asset('assets/images/logo_white.png') }}" style="height: 100px;">
    </div>

    <!-- app -->
    <div id="app" class="hidden">
        <!-- navbar -->
        @if (isset($navbar) && $navbar) <x-navbar /> @endif

        <!-- content -->
        <div class="wrapper">
            @yield('content')
        </div>

        <!-- footer -->
        @if (isset($footer) && $footer) <x-footer /> @endif
    </div>
    
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    @stack('js')
    <script src="{{ asset('js/main.min.js') }}"></script>
    {{-- ^ preload animation, and other script ^ --}}
</body>