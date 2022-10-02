<?php
include_once('../views/layouts/navbar.php');
?>
<!-- ======= Header ======= -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Log In</h2>
      <p>sign in to create blog </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">


    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>311 CAIPF Building, 3rd floor </p>
              <p>4<sup>Th</sup> street, Mutare, Mutare, Zimbabwe</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>Info@futuregoldconsortium</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+263 778 661 538</p>
            </div>
            <div class="phone">
              <i class="bi bi-telephone"></i>
              <h4>Telephone:</h4>
              <p> +2632 020 6199</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="../forms/auth.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-12 form-group">
                <input type="email" name="email" class="form-control" required id="email" maxlength="49" placeholder="Example@email.com" required>
              </div>

            </div>
            <div class="row">


            </div>
            <div class="row">
              <div class="col-md-12form-group">
                <input type="password" class="form-control" required name="password" maxlength="29" id="password" placeholder="password" required>
              </div>

            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">log in successful.</div>
            </div>
            <div class="text-center py-3">
              <button type="submit" name='submit' value='auth' class="btn btn-fill btn-primary">Log In</button>
            </div>
          </form>
          <?php if(isset($_GET['status'])){?>
          <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            Invalid Log In Credentials
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php } ?>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php
include_once('../views/layouts/footer.php');
?>