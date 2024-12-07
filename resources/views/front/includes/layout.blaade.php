<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Rhodel IT Consult</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="front/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('front/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ url('front/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
</head>

<body>


    @include('front.layout.header')

    @extends('front.layout.app')
    @yeild('content')

    @include('front.layout.footer')

    @include('front.loader')

    @include('front.navbar')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('front/lib/wow/wow.min.js') }}"></script>
    <script src="{{ url('front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('front/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('front/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('front/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('front/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('front/js/main.js') }}"></script>

    
</body>

</html>