<?php
include_once('../views/layouts/navbar.php');
?>
<!-- ======= Header ======= -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Contact Us</h2>
      <p>get in touch with us, and get an immidiate response</p>
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
              <p>Info@futuregoldconsortium.com</p>
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

          <form action="../forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" required class="form-control" id="name" maxlength="49" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" required class="form-control" name="email" id="email" maxlength="49" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" required class="form-control" name="subject" id="subject" maxlength="59" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" required name="body" rows="5" maxlength="2399" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center py-2">
              <button type="submit" name='submit' value='contact' class="btn btn-fill btn-primary">Send Message</button>
            </div>
          </form>
          <?php if(isset($_GET['status'])){?>
            <?php if($_GET['status'] ==1){?>
              <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                Message Sent successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php }else{ ?>
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                Message Failed To Send
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php } ?>
            <?php } ?>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php
include_once('../views/layouts/footer.php');
?>