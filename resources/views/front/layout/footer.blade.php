 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
     <div class="container py-5">
         <div class="row g-5">
             <div class="col-lg-3 col-md-6">
                 <h5 class="text-white mb-4">Address</h5>
                 <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Accra, Ghana</p>
                 <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+233 (0) 244491803</p>
                 <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@rhodelitconsult.com</p>
                 <div class="d-flex pt-2">
                     <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                     <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h5 class="text-white mb-4">Quick Links</h5>
                 <a class="btn btn-link" href="">About Us</a>
                 <a class="btn btn-link" href="">Contact Us</a>
                 <a class="btn btn-link" href="">Our Services</a>
                 <a class="btn btn-link" href="">Terms & Condition</a>
                 <a class="btn btn-link" href="">Support</a>
             </div>
             <div class="col-lg-3 col-md-6">
                 <h5 class="text-white mb-4">Project Gallery</h5>
                 <div class="row g-2">
                     <div class="col-4">
                         <img class="img-fluid rounded" src="{{ asset('front/img/gallery-1.jpg') }}" alt="">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid rounded" src="{{ asset('front/img/gallery-2.jpg') }}" alt="">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid rounded" src="{{ asset('front/img/gallery-3.jpg') }}" alt="">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid rounded" src="{{ asset('front/img/gallery-4.jpg') }}" alt="">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid rounded" src="{{ asset('front/img/gallery-5.jpg') }}" alt="">
                     </div>
                     <div class="col-4">
                         <img class="img-fluid rounded" src="{{ asset('front/img/gallery-6.jpg') }}" alt="">
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12">
                 <form class="newsletter">
                     <h5 class="text-white mb-4">Newsletter</h5>
                     <p>Subscribe to the mailing list to receive updates on promotions and services.</p>

                     <div class="newsletter__group">
                         <!-- <label for="newsletter"></label> -->
                         <div class="position-relative mx-auto" style="max-width: 400px;">
                             <input class="form-control border-0 w-100 py-4 ps-3 pe-5" type="text" placeholder="Enter your Email" name="subscriber_email" id="subscriber_email" required"">
                             <button class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"  type="button" onclick="addSubscriber()">SUBSCRIBE</button>
                         </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="copyright">
         <div class="row">
             <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                 &copy; <a href="#">RHODEL IT CONSULT</a>.  All Right Reserved. <strong>Copyright &copy; <?php echo date('Y'); ?></strong>
             </div>
             <div class="col-md-6 text-center text-md-end">

                 Designed By <a href="https://rhodelitconsult.com">RHODEL IT CONSULT</a>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- Footer End -->