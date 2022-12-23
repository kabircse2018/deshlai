<!DOCTYPE html>
<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="HUMAUN KABIR" />
        <meta name="description" content="Themeforest Template Polo, html template" />
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Deshlai</title>
        <link href="{{ asset('public/frontend') }}/assest/css/plugins.css" rel="stylesheet" />
        <link href="{{ asset('public/frontend') }}/assest/css/style.css" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali&family=Roboto&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="body-inner">

            @include('frontend.inc.header')

            @yield('content')

            @include('frontend.inc.footer')
        </div>

        <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

        <script src="{{ asset('public/frontend') }}/assest/js/jquery.js"></script>
        <script src="{{ asset('public/frontend') }}/assest/js/plugins.js"></script>
        <script src="{{ asset('public/frontend') }}/assest/js/functions.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
