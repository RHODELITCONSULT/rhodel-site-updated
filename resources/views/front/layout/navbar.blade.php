<!-- Topbar Start -->
<div class="p-0 container-fluid bg-dark">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="px-5 col-lg-7 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Michel Camp , Tema</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Fri : 09.00 AM - 04.00 PM</small>
            </div>
        </div>
        <div class="px-5 col-lg-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+233 2444 91803</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="border-0 btn btn-square btn-link rounded-0 border-end border-secondary" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="border-0 btn btn-square btn-link rounded-0 border-end border-secondary" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="border-0 btn btn-square btn-link rounded-0 border-end border-secondary" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="p-0 bg-white navbar navbar-expand-lg navbar-light sticky-top">
    <a href="index.html" class="px-4 navbar-brand d-flex align-items-center border-end px-lg-5">
        <h2 class="m-0 text-primary">RHODEL IT CONSULT</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="p-4 navbar-nav ms-auto p-lg-0">
            <a href="{{ route('home') }}"
                class="nav-item nav-link {{ Route::is('home') || Route::is('home.index') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about-us') }}"
                class="nav-item nav-link {{ Route::is('about-us') ? 'active' : '' }}">About</a>
            <a href="{{route('career')}}" class="nav-item nav-link {{ Route::is('career') ? 'active' : '' }}">Career</a>


            <a href="{{ route('projects') }}"
                class="nav-item nav-link {{ Route::is('projects') ? 'active' : '' }}">Project</a>

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
<!-- Navbar End -->
