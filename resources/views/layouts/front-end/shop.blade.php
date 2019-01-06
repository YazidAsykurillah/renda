<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Renda</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <!--Custom Style-->
    <link rel="stylesheet" href="css/style.css">

    @yield('additional_styles')
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    @include('layouts.front-end.partials.shop-header')
    <!-- ##### Header Area End ##### -->

    

    <!-- ##### Top Catagory Area Start ##### -->
    @yield('content')
    <!-- ##### Top Catagory Area End ##### -->

    

    <!-- ##### Footer Area Start ##### -->
    @include('layouts.front-end.partials.footer')
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    @yield('additional_scripts')
</body>

</html>