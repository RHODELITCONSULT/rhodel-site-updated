@include('front.includes.header')

<body>
    <!-- Spinner Start -->
    @include('front.includes.loader')
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('front.includes.navbar')
    <!-- Navbar End -->

    <main>
        @yield('content')
    </main>

    @include('front.newsletter')
    @include('front.includes.footer')
