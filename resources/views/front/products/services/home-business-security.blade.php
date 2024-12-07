@extends('Frontend.layout.app')
@section('content')
<!-- Page Header Start -->
<div class="py-5 mb-5 container-fluid page-header">
    <div class="container py-5">
        <h1 class="mb-3 text-white display-3 animated slideInDown">CCTV Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="text-white breadcrumb-item active" aria-current="page">CCTV Service</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
<!-- Service Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Our Services</h6>
            <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/img-600x400-1.jpg')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar Panels</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/img-600x400-2.jpg')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Wind Turbines</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/img-600x400-3.jpg')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Hydropower Plants</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/img-600x400-4.jpg')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Solar Panels</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/img-600x400-5.jpg')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Wind Turbines</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/img-600x400-6.jpg')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">Hydropower Plants</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="py-5 container-xxl">
    <div class="container">
        <div class="mx-auto mb-5 text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-primary">Testimonial</h6>
            <h1 class="mb-4">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center testimonial-item">
                <div class="testimonial-img position-relative">
                    <img class="mx-auto mb-5 img-fluid rounded-circle" src="{{asset('assets/Frontend/img/testimonial-1.jpg')}}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="text-white fa fa-quote-left"></i>
                    </div>
                </div>
                <div class="p-4 text-center rounded testimonial-text">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="text-center testimonial-item">
                <div class="testimonial-img position-relative">
                    <img class="mx-auto mb-5 img-fluid rounded-circle" src="{{asset('assets/Frontend/img/testimonial-2.jpg')}}">
                    <div class="btn-square bg-primary rounded-circle">
                        <i class="text-white fa fa-quote-left"></i>
                    </div>
                </div>
                <div class="p-4 text-center rounded testimonial-text">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Client Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="text-center testimonial-item">
                <div class="testimonial-img position-relative">
                    <img class="mx-auto mb-5 img-fluid rounded-circle" src="{{asset('assets/Frontend/img/testimonial-3.jpg')}}">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="text-white fa fa-quote-left"></i>
                        </div>
                    </div>
                    <div class="p-4 text-center rounded testimonial-text">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection