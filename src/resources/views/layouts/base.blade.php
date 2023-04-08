<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name')) </title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/styles.css">      
   
    </head>
    <body class="antialiased">

        <div class="d-flex flex-column justify-content-between min-vh-100" >

            @include('includes.header')

            <main class="flex-grow-1">
            
                @yield('content')     
                
            </main>

            

            @include('includes.footer')
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js"></script>
        <script src="/js/btn_up.js"></script>
        @stack('js')
    </body>
</html>