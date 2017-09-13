<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="loader"><h1>Loading Perfection...</h1></div>

    
    <div v-cloak id="app">
        @if(Auth::user())
            
        <layout>

            @yield('content')

        </layout>

        @else
            
            @yield('content')

            <v-footer class="pa-3 grey darken-4">
                <div>© @{{ new Date().getFullYear() }}</div>
            </v-footer>

        @endif
    </div>






    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
