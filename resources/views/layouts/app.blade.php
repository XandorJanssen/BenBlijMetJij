<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="/js/app.js"></script>
        <script src="https://kit.fontawesome.com/bc6fb75518.js" crossorigin="anonymous"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>

    <title>Ben blij met jij</title>
    <link rel="icon"  href="{!! asset('images/Logo.ico') !!}" type="image/ico" />



    @mapstyles
    @mapscripts
    </head>
    <body>
        @include('inc.navbar')

        <div class="container conatainer-height">
            @yield('content')
        </div>

        @include('inc.footer')
    </body>
</html>
