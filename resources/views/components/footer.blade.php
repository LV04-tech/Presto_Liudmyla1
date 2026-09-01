<!-- Footer -->
<footer class="text-center text-lg-start foot text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>{{__("ui.getConnect")}}</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  {{-- richiesta revisore  --}}
   <div class="col-md-5 offset-md-1 mb-3 mx-auto py-3 text-center canI">
    
   <h5>{{__("ui.revisor")}}</h5>
   <p>{{__("ui.request")}}</p>

   <a href="{{ route('become.revisor')}}" class="canI-btn">{{__("ui.becomeRevisor")}}</a>
   </div>
  {{-- fine richiesta revisore  --}}


  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>{{__("ui.companyName")}}
          </h6>
          <p>
           {{__("ui.text")}}
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           {{__("ui.products")}}
          </h6>
          <p>
            <a href="#!" class="text-reset"> {{__("ui.sport")}}</a>
          </p>
          <p>
            <a href="#!" class="text-reset"> {{__("ui.health&Wellness")}}</a>
          </p>
          <p>
            <a href="#!" class="text-reset"> {{__("ui.pets")}}</a>
          </p>
          <p>
            <a href="#!" class="text-reset"> {{__("ui.books")}}</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
           {{__("ui.usefulLinks")}}
          </h6>
          <p>
            <a href="#!" class="text-reset">{{__("ui.pricing")}}</a>
          </p>
          <p>
            <a href="#!" class="text-reset">{{__("ui.settings")}}</a>
          </p>
          <p>
            <a href="#!" class="text-reset">{{__("ui.orders")}}</a>
          </p>
          <p>
            <a href="#!" class="text-reset">{{__("ui.helps")}}</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">{{__("ui.contact")}}</h6>
          <p><i class="fas fa-home me-3"></i> {{__("ui.address")}}</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
           {{__("ui.mail")}}
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->