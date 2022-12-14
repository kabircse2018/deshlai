<!doctype html>
<html lang="en" class="semi-dark">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GNKTEC</title>
  <link rel="icon" href="{{ asset('public/admin')}}/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('public/admin')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('public/admin')}}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/css/style.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/admin')}}/plugins/bootstrap-icons%401.9.1/font/bootstrap-icons.css">

  <!--Theme Styles-->
  <link href="{{ asset('public/admin')}}/css/dark-theme.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/css/light-theme.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/css/semi-dark.css" rel="stylesheet" />
  <link href="{{ asset('public/admin')}}/css/header-colors.css" rel="stylesheet" />

  <!--Toaster-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- include summernote css -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


</head>
<body>

  <!--start wrapper-->
  <div class="wrapper">

    <!--start top header-->
    @auth()
        @include('admin.inc.topbar')
     <!--end top header-->

       <!--start sidebar -->
        @include('admin.inc.sidebar')
        <!--end sidebar -->

       <!--start content-->
        @yield('content')
       <!--end page main-->
       @endauth

       <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
       <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="#" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

  </div>
  <!--end wrapper-->
  <!-- Bootstrap bundle JS -->
  <script src="{{ asset('public/admin')}}/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ asset('public/admin')}}/js/jquery.min.js"></script>
  <script src="{{ asset('public/admin')}}/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ asset('public/admin')}}/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{ asset('public/admin')}}/js/pace.min.js"></script>

  <!--Toaster-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- Toastr Notification Script --}}

<!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
  $(document).ready(function() {
  $('#summernote').summernote();
  $('#summernote2').summernote();
  });
</script>



<script>
    @if(Session::has('message'))
      var type="{{Session::get('alert-type', 'info')}}"
      switch(type){
        case 'info':
              toastr.info("{{Session::get('message')}}");
              break;
        case 'success':
              toastr.success("{{Session::get('message')}}");
              break;
        case 'warning':
              toastr.warning("{{Session::get('message')}}");
              break;
        case 'error':
              toastr.error("{{Session::get('message')}}");
              break;
            }
      @endif
  </script>

</body>
</html>
