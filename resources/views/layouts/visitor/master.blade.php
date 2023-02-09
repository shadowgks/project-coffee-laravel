<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.visitor.includes.head')
</head>
<body>
    <!-- Begin header -->
    @include('layouts.visitor.header')
    <!-- End header -->

    <!-- Begin Background page home -->
    @yield('content')
    <!-- End Background page home -->

    <!-- Begin footer -->
    @include('layouts.visitor.footer')
    <!-- End footer -->

    @include('layouts.visitor.includes.footer-scripts')
</body>
</html>
