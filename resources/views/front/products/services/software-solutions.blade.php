@extends('Frontend.layout.app')
@section('content')
<!-- Page Header Start -->
<div class="py-5 mb-5 container-fluid page-header">
    <div class="container py-5">
        <h1 class="mb-3 text-white display-3 animated slideInDown">Software Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="text-white breadcrumb-item active" aria-current="page">Software Service</li>
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
            <h1 class="mb-4">Our Most Selling Products Order for Yours Now!</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/RHODEL HR.png')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">HR & PAYROLL SOFTWARE</h4>
                        <p>HR & Payroll software automates HR tasks, improving efficiency and accuracy.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/RHODEL-CRM.png')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">CRM SOFTWARE</h4>
                        <p>CUSTOMER RELATINS MANAGEMENT software centralizes customer data and automates tasks.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/RHODEL-HOSPITAL.png')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">HOSPITAL MNGMT SOFTWARE</h4>
                        <p>Hospital software automates tasks and improves patient care.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/RHODEL-POS.png')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-solar-panel fa-3x"></i>
                        </div>
                        <h4 class="mb-3">INVENTORY & POS</h4>
                        <p>Inventory & POS software tracks stock and automates sales.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/RHODEL-SMS.png')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-wind fa-3x"></i>
                        </div>
                        <h4 class="mb-3">SCHOOL MNGMT SOFTWARE</h4>
                        <p>Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam.</p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="overflow-hidden rounded service-item">
                    <img class="img-fluid" src="{{asset('assets/Frontend/img/RHODEL-WAYBILL.png')}}" alt="">
                    <div class="p-4 pt-0 position-relative">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb fa-3x"></i>
                        </div>
                        <h4 class="mb-3">WAYBILL SOFTWARE</h4>
                        <p>Waybill software automates waybill creation and tracking.
                        </p>
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