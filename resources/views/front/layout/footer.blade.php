
    <!-- Footer Start -->
    <div class="pt-5 mt-5 container-fluid bg-dark text-body footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Michel Camp, Tema</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+233 2444 91803</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@rhodelitconsult.com</p>
                    <div class="pt-2 d-flex">
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Quick Links</h5>
                    <a href="{{route('about-us')}}" class="btn btn-link" href="">About Us</a>
                    <a href="{{route('contact-us')}}" class="btn btn-link" href="">Contact Us</a>
                    <a href="{{route('projects')}}" class="btn btn-link" href="">Our Projects</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Project Gallery</h5>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="rounded img-fluid" src="{{ asset('assets/Frontend/img/gallery-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="rounded img-fluid" src="{{ asset('assets/Frontend/img/gallery-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="rounded img-fluid" src="{{ asset('assets/Frontend/img/gallery-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="rounded img-fluid" src="{{ asset('assets/Frontend/img/gallery-4.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="rounded img-fluid" src="{{ asset('assets/Frontend/img/gallery-5.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="rounded img-fluid" src="{{ asset('assets/Frontend/img/gallery-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4 text-white">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="mx-auto position-relative" style="max-width: 400px;">
                        <input class="py-3 border-0 form-control w-100 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="top-0 py-2 mt-2 btn btn-primary position-absolute end-0 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="mb-3 text-center col-md-6 text-md-start mb-md-0">
                        &copy; <a href="#">RHODEL IT CONSULT</a>, All Right Reserved.
                    </div>
                    <div class="text-center col-md-6 text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https:rhodelitconsult.com">RHODEL IT CONSULT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/Frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{asset('assets/Frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{asset('assets/Frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{asset('assets/Frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{asset('assets/Frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{asset('assets/Frontend/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset('assets/Frontend/lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/Frontend/js/main.js') }}"></script>
</body>

</html>
