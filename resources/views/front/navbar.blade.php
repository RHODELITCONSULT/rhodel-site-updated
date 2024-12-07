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
              <a href="" class="nav-item nav-link active">Home</a>
            
              <a href="{{ route('about-us') }}" class="nav-item nav-link">About</a>
              <a href="service.html" class="nav-item nav-link">Career</a>
              <a href="project.html" class="nav-item nav-link">Project</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                  <div class="dropdown-menu bg-light m-0">
                      <a href="feature.html" class="dropdown-item">Consultation & Support</a>
                      <a href="quote.html" class="dropdown-item">Software Solutions</a>
                      <a href="team.html" class="dropdown-item">Cooling & Heating</a>
                      <a href="testimonial.html" class="dropdown-item">Home & Business Security</a>
                      <a href="testimonial.html" class="dropdown-item">Renewable Energy</a>

                  </div>
              </div>
              <a href="{{route('contact-us')}}" class="nav-item nav-link">Contact</a>
          </div>
          <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
      </div>
  </nav>
  <!-- Navbar End -->