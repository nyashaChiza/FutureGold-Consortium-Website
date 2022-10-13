<?php
include_once('../views/layouts/navbar.php');
include_once('../forms/blog.php');

$category = $_GET['category'];
$categories = ['stocks', 'index', 'charts', 'forex', 'commodities', 'economic calendar'];

$is_valid = in_array($category, $categories);
 

if ($is_valid){
  $category = $_GET['category'];
} else{
  $category = 'stocks';
}

if (isset($_GET['id'])) {
  $data = get_blog($_GET['id']);
} else {
  $data = _get_blog($category);
}
$blogs = get_blogs($category);

?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php echo $category; ?></h2>

    </div>
  </div><!-- End Breadcrumbs -->
  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

      <div class="row py-2">
        <div class="col-md-11">
          <ul class="nav nav-tabs flex-column">

            <?php foreach ($blogs as $blog) { ?>
              <div class="card mb-3" style="max-width: 740px;max-height:400px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img style="max-width: 90%;max-height:400px;"src="../assets/img/thumbnails/thumb-<?php echo (rand(1, 5)); ?>.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start h-100" />
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="card-title text-muted"><?php echo $blog['heading']; ?></h3>
                      <h6 class="card-title text-sm text-info">By <?php echo $blog['name']; ?> &nbsp; <i class="bi bi-clock "></i><?php echo substr($blog['created_at'],0,10); ?> </h6>
                      <p class="card-text">
                      <?php echo $blog['sub_heading']; ?>
                      </p>
                      <p class="card-text">
                      <a  href="blog.php?id=<?php echo $blog['id'];?>"><div class='btn btn-sm btn-warning'><small class="text-muted">Read More</small></div></a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              

              <!-- <li class="nav-item">
              <img src='../assets/img/thumbnails/thumb-<?php echo (rand(1, 5)); ?>.jpg' height="25%" width="20%" class='img-fluid thumbnail'>
                <a class="nav-link active show text-danger" href="blog.php?id=<?php echo $blog['id']; ?>"><?php echo $blog['heading']; ?></a>
              </li> -->
            <?php } ?>
          </ul>
        </div>

      </div>

    </div>
  </section><!-- End Cource Details Tabs Section -->
</main><!-- End #main -->

<?php
include_once('../views/layouts/footer.php');
?>