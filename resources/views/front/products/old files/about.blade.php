@extends('Frontend.layout.app')
@section('content')

{{-- Page Header --}}
<div class="py-5 mb-5 container-fluid page-header">
    <div class="container py-5">
        <h1 class="mb-3 text-white display-3 animated slideInDown">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="text-white breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
{{-- Page Header --}}


<!-- Feature Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="mb-4 d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="text-white fa fa-users"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                </div>
                <h5 class="mb-3">Happy Customers</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="mb-4 d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="text-white fa fa-check"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                </div>
                <h5 class="mb-3">Project Done</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="mb-4 d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="text-white fa fa-award"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                </div>
                <h5 class="mb-3">Awards Win</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="mb-4 d-flex align-items-center">
                    <div class="btn-lg-square bg-primary rounded-circle me-3">
                        <i class="text-white fa fa-users-cog"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                </div>
                <h5 class="mb-3">Expert Workers</h5>
                <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
        </div>
    </div>
</div>
<!-- Feature Start -->


<!-- About Start -->
<div class="my-5 overflow-hidden container-fluid bg-light px-lg-0">
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/Frontend/img/cctv-feature.jpg') }}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="py-5 col-lg-6 about-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">About Us</h6>
                    <h1 class="mb-4">10+ Years Experience In IT, Security System & Renewable Energy</h1>
                    <p>Rhodel IT Consult, a seasoned provider with over a decade of experience, specializes in a diverse range of IT solutions, software development, air conditioning systems, security systems, and renewable energy technologies. Our expertise lies in delivering comprehensive and integrated solutions that enhance efficiency, security, and sustainability.</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>IT Services</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Solar and Renewalble Services</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Software Solutions</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>CCTV Services</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>AC Services</p>
                    <p><i class="fa fa-check-circle text-primary me-3"></i>Electric Fencing</p>
                    <a href="" class="px-5 py-3 mt-3 btn btn-primary rounded-pill">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Services</h6>
            <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-1.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar for Homes</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-4.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Clean Energy</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-3.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar for Commercial Use</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/cctv-portfolio-3.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Home Security</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/cctv-portfolio-6.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Community Security</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/cctv-portfolio-2.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Secure Your Business</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/ac-service-1.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Maintenance</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/ac-service-6.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Heating Solutions</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/ac-service-2.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Cooling Solutions</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/fence-1.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Home Security</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/fence-6.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar Fence</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/fence-5.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Secure Your Business</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/it-project-5.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Digital Solutions</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/it-project-2.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">IT Supports</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/it-project-4.jpg') }}" alt="">
                    <div class="position-relative p-4 pt-0">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Consultation</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="my-5 overflow-hidden container-fluid bg-light px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="py-5 col-lg-6 feature-text wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-primary">Why Choose Us!</h6>
                    <h1 class="mb-4">Complete Commercial & Residential Solar Systems</h1>
                    <p class="pb-2 mb-4">Choose Rhodel IT Consult for comprehensive, innovative, and reliable IT solutions. With over a decade of experience, we offer tailored services in IT, software development, air conditioning, security systems, and renewable energy. Our commitment to excellence, customer satisfaction, and cutting-edge technology ensures optimal performance and sustainability for your business.</p>
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="text-white fa fa-check"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Quality</p>
                                    <h5 class="mb-0">Services</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="text-white fa fa-user-check"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Expert</p>
                                    <h5 class="mb-0">Workers</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="text-white fa fa-drafting-compass"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Free</p>
                                    <h5 class="mb-0">Consultation</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="btn-lg-square bg-primary rounded-circle">
                                    <i class="text-white fa fa-headphones"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-0">Customer</p>
                                    <h5 class="mb-0">Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/Frontend/img/feature.jpg') }}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Projects Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Projects</h6>
            <h1 class="mb-4">Visit Our Latest Solar And Renewable Energy Projects</h1>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
            <div class="text-center col-12">
                <ul class="mb-5 list-inline" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Solar Panels</li>
                    <li class="mx-2" data-filter=".second">Renewable Energy</li>
                    <li class="mx-2" data-filter=".third">Hydropower Plants</li>
                    <li class="mx-2" data-filter=".fourth">CCTV</li>
                    <li class="mx-2" data-filter=".five">Electric Fence</li>
                    <li class="mx-2" data-filter=".sixth">AC Services</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.5s">
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="overflow-hidden rounded portfolio-img">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-6.jpg') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-6.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="mb-0 text-primary">Solar Panels</p>
                    <hr class="my-2 text-primary w-25">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="overflow-hidden rounded portfolio-img">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-5.jpg') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-5.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="mb-0 text-primary">Wind Turbines</p>
                    <hr class="my-2 text-primary w-25">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="overflow-hidden rounded portfolio-img">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-4.jpg') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-4.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="mb-0 text-primary">Hydropower Plants</p>
                    <hr class="my-2 text-primary w-25">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="overflow-hidden rounded portfolio-img">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-3.jpg') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-3.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="mb-0 text-primary">Solar Panels</p>
                    <hr class="my-2 text-primary w-25">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="overflow-hidden rounded portfolio-img">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-2.jpg') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-2.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="mb-0 text-primary">Wind Turbines</p>
                    <hr class="my-2 text-primary w-25">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item third">
                <div class="overflow-hidden rounded portfolio-img">
                    <img class="img-fluid" src="{{ asset('assets/Frontend/img/img-600x400-1.jpg') }}" alt="">
                    <div class="portfolio-btn">
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href="{{ asset('assets/Frontend/img/img-600x400-1.jpg') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="mx-1 btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-link"></i></a>
                    </div>
                </div>
                <div class="pt-3">
                    <p class="mb-0 text-primary">Hydropower Plants</p>
                    <hr class="my-2 text-primary w-25">
                    <h5 class="lh-base">We Are pioneers of solar & renewable energy industry</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Quote Start -->
<div class="my-5 overflow-hidden container-fluid bg-light px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('assets/Frontend/img/quote.jpg') }}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="py-5 col-lg-6 quote-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <h6 class="text-primary">Free Quote</h6>
                    <h1 class="mb-4">Get A Free Quote</h1>
                    <p class="pb-2 mb-4"></p>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="border-0 form-control" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="border-0 form-control" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="border-0 form-control" placeholder="Your Mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="border-0 form-select" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Service 1</option>
                                    <option value="2">Service 2</option>
                                    <option value="3">Service 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="border-0 form-control" placeholder="Special Note"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="px-5 py-3 btn btn-primary rounded-pill" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Team Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Team Member</h6>
            <h1 class="mb-4">Experienced Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden rounded team-item">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="{{ asset('assets/Frontend/img/team-1.jpg') }}" alt="">
                        <div class="team-social w-25">
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden rounded team-item">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="{{ asset('assets/Frontend/img/team-2.jpg') }}" alt="">
                        <div class="team-social w-25">
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden rounded team-item">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="{{ asset('assets/Frontend/img/team-3.jpg') }}" alt="">
                        <div class="team-social w-25">
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a class="mt-3 btn btn-lg-square btn-outline-primary rounded-circle" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->




@endsection