<?php
session_start();
if (!$_SESSION['is_authenticated']) {
  header('location: ../views/login.php');
}
include_once('../views/layouts/navbar.php');
?>
<link rel="stylesheet" href="../assets/res/style.css" />
<!-- ======= Header ======= -->
<base href='../' />
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Write Article</h2>
      <p>share your thoughts on our Markets page</p>
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

          <form action="../forms/blog.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text"   class="form-control" required id="name" maxlength="49" placeholder="your name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" required name="location" id="location" maxlength="119" placeholder="location" required>
              </div>
            </div>
            <div class="row">

              <div class="col-md-12 form-group mt-3 mt-md-0">
                <select class="form-control">
                <option>Select Category</option>  
                <option value='economic calendar'>Economic calendar</option>
                  <option value='charts'>Charts</option>
                  <option value='forex'>Forex</option>
                  <option value='commodities'>Commodities</option>
                  <option class='index'>Index</option>
                  <option class='stocks'>Stocks</option>
                </select>
              </div>
              <div class="col-md-12 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" required name="email" id="email" maxlength="79" placeholder="Your Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" required name="heading" maxlength="29" id="subject" placeholder="heading" required>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" required name="sub_heading" maxlength="59" id="subject" placeholder="sub-heading" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <!--Include the JS & CSS-->
              <link rel="stylesheet" href="./assets/richtexteditor/rte_theme_default.css" />
              <script type="text/javascript" src="../assets/richtexteditor/rte.js"></script>
              <script>
                RTE_DefaultConfig.url_base = 'richtexteditor'
              </script>
              <script type="text/javascript" src='./assets/richtexteditor/plugins/all_plugins.js'></script>
              <textarea maxlength="16379" name='body' id="inp_editor1"></textarea>

              <script>
                var editor1cfg = {}
                editor1cfg.toolbar = "basic";
                var editor1 = new RichTextEditor("#inp_editor1");
              </script>

            </div>

        </div>
      </div>

      <div class="text-center ">
        <button type="submit" name='submit' value='blog' class="btn btn-fill btn btn-success">Publish Article</button>
      </div>
      </form>

      <?php if (isset($_GET['status'])) { ?>
        <?php if ($_GET['status'] == 1) { ?>
          <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            Article Published successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php } else { ?>
          <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            Article Failed To Save
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