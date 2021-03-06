<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AdvenTrip') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @stack('style')
        {!! Charts::styles() !!}
    </head>
    <body>
        <div id="app">
          @include('_include.navbar')
            <div class="content">
              <div class="columns">
                @guest
                @else
                  @role('superadministrator')
                    @include('_include.aside')
                  @endrole
                @endguest
                <div class="column">@yield('content')</div>
              </div>
            </div>
          @include('_include.footer')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
