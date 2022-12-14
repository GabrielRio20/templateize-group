<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Tes Feedback</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   <style>
    #text{
      text-decoration: none;
    }
    
    #text:hover {
      text-decoration: underline;
    }
   </style>
   <body>

<!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #226bb4"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4"
             style="background-color: #3096fd"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="https://id-id.facebook.com" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.google.com/?hl=id" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="https://www.instagram.com" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://www.linkedin.com/login" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div id="text-footer" class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="display: flex; align-items: center; font-size: 18px;">
            <!-- Content -->
            <p style=" text-align: justify;">
            Email us with any questions, we will be happy to answer them. <br> For contributors, join us and sell your templates on our website. 
            <br> We will help our customers find the right template for your portfolio.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="text-decoration:none">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a id="text" href="shop" class="text-white">Template</a>
            </p>
            <p>
              <a id="text" href="checkout" class="text-white">Cart</a>
            </p>
            <p>
              <a id="text" href="{{ route('register') }}" class="text-white">Become an Contributor</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Other</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a id="text" href="about" class="a text-white">About Us</a>
            </p>
            <p>
              <a id="text" href="faq" class="text-white">FAQ</a>
            </p>
            <p>
              <a id="text" href="TermsAndConditions" class="text-white">Terms and Conditions</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> D.I.Y Indonesia</p>
            <p><i class="fas fa-envelope mr-3"></i> templateize01@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 62-8123-4567-8910</p>
            <p><i class="fas fa-print mr-3"></i> + 62-8109-8765-4321</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <br>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: #164472"
         >
      ?? 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >templateize.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </body>
</html>