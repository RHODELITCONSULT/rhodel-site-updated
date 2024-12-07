@extends('Frontend.layout.app')
@section('content')
<div class="py-5 mb-5 container-fluid page-header">
    <div class="container py-5">
        <h1 class="mb-3 text-white display-3 animated slideInDown">Projects</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                <li class="text-white breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
        </nav>
    </div>
</div>


<!-- Projects Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Services</h6>
            <h1 class="mb-4">Renewable Energy, IT Support & Consultancy, Cooling & Heating, Home & Industrial Security</h1>
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
    </div>
</div>
<!-- Projects End -->
@endsection