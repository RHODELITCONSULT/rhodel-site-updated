<?php

use App\Models\Category;
// Get Categories and their Sub Categories
$categories = Category::getCategories();
//echo "<pre>"; print_r($categories); die;
?>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-0 text-primary">RHODEL IT CONSULT</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <!-- <a href="index.html" class="nav-item nav-link active">Home</a> -->
            <a href="{{ route('index') }}"
                class="nav-item nav-link {{ Route::is('index') || Route::is('home.index') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about-us') }}" class="nav-item nav-link {{ Route::is('about-us') ? 'active' : '' }}">About</a>
            <a href="{{route('career')}}" class="nav-item nav-link {{ Route::is('career') ? 'active' : '' }}">Career</a>
            <a href="{{ route('projects') }}" class="nav-item nav-link {{ Route::is('projects') ? 'active' : '' }}">Project</a>

            <!-- <a href="about.html" class="nav-item nav-link">About</a>
            <a href="service.html" class="nav-item nav-link">Career</a>
            <a href="project.html" class="nav-item nav-link">Project</a> -->


            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('/services/*') ? 'active' : ''}}" data-bs-toggle="dropdown">Services</a>
                <div class="m-0 dropdown-menu bg-light">
                    <a href="{{ route('solar-energy') }}"
                        class="dropdown-item {{ Route::is('solar-energy') ? 'active' : '' }}">Solar Energy</a>
                    <a href="{{ route('it-service') }}"
                        class="dropdown-item  {{ Route::is('it-service') ? 'active' : '' }}">IT Services</a>
                    <a href="{{ route('electric-fence') }}"
                        class="dropdown-item {{ Route::is('electric-fence') ? 'active' : '' }}">Electric Fence</a>
                    <a href="{{ route('software-service') }}"
                        class="dropdown-item {{ Route::is('software-service') ? 'active' : '' }}">Software</a>
                    <a href="{{ route('cctv-service') }}"
                        class="dropdown-item {{ Route::is('cctv-service') ? 'active' : '' }}">CCTV System</a>
                    <a href="{{ route('ac-service') }}"
                        class="dropdown-item {{ Route::is('ac-service') ? 'active' : '' }}">A/C System</a>
                </div>
            </div>
            <a href="{{route('contact-us')}}" class="nav-item nav-link {{ Route::is('contact-us') }}">Contact</a>
        </div>
        <a href="contact.html" class="py-4 btn btn-primary rounded-0 px-lg-5 d-none d-lg-block">Get A Quote<i
                class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>


<!-- <div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
    <div class="dropdown-menu bg-light m-0">
        <a href="feature.html" class="dropdown-item">Solar Energy</a>
        <a href="quote.html" class="dropdown-item">IT Services</a>
        <a href="team.html" class="dropdown-item">Electric Fence</a>
        <a href="testimonial.html" class="dropdown-item">Software</a>
        <a href="404.html" class="dropdown-item">CCTV System</a>
        <a href="404.html" class="dropdown-item">Cooling & Heating</a>
    </div>
</div>
<a href="contact.html" class="nav-item nav-link">Contact</a>
</div>
<a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
</div>
</nav> -->
<!-- Navbar End -->