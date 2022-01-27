<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    {{-- <style>
        .bg-img {
      /* The image used */
      background-image: url("https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.kindpng.com%2Fpicc%2Fm%2F287-2878679_cute-cat-wallpaper-for-iphone-cute-cat-hd.png&imgrefurl=https%3A%2F%2Fwww.kindpng.com%2Fimgv%2FiJJimih_cute-cat-wallpaper-for-iphone-cute-cat-hd%2F&tbnid=F0_6td4u8xbBwM&vet=10CBkQxiAoC2oXChMI6IGczOHQ9QIVAAAAAB0AAAAAEAc..i&docid=0IgdnSScY2SL7M&w=860&h=616&itg=1&q=cat%20image&ved=0CBkQxiAoC2oXChMI6IGczOHQ9QIVAAAAAB0AAAAAEAc");

      /* Control the height of the image */
      min-height: 380px;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }
    </style> --}}

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        @yield('content')

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('adminvendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
