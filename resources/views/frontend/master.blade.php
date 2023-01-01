<!DOCTYPE html>
<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="HUMAUN KABIR" />
        <meta name="description" content="দেশলাই এর সাথে আমাদের প্রেমের সম্পর্ক। এই যে মজে যাওয়া— এর ভিতর দিয়ে যাত্রা পথে ধূলি, গাছ, বাকল সবকিছুই তার তার ঝিলিক দেয়, তৃষ্ণায় ছটফটানি, বসতে বলে, আমরা দাঁড়াই, আবার হাঁটি, যাত্রাপথ....আমরা থামি কিন্তু থামি না, অপার উৎসাহ ভালবাসায় হাজির হই চর্চার ধারাবাহিক কার্যক্রমে।যাদের ভালবাসা ও সহযোগিতায় আমরা উত্তেজনা অনুভব করি প্রাণ পাই সাহস পাই— সকলকে শুভেচ্ছাজানি, বন্ধুর হাত ছুটে গেলেও ধরাই থাকে।" />
        <link rel="icon" href="{{ asset('public/frontend')}}/assest/DESHLAI-Logo-favicon.png" type="image/png" />

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
