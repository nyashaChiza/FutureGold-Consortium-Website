<?php
include_once('../views/layouts/navbar.php');
include_once('../forms/blog.php');
if(isset($_GET['id'])){
  $data = get_blog($_GET['id']);
}
else{
  $data = _get_blog();

}
$blogs = get_blogs();

?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2><?php echo $data['heading']; ?></h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img src="assets/img/course-details.jpg" class="img-fluid" alt="">
            <h3><?php echo $data['sub_heading']; ?></h3>
            <p>
            <?php echo html_entity_decode($data['body']); ?> </p>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Author</h5>
              <p><a href="#"><?php echo $data['name']; ?></a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Loaction</h5>
              <p><?php echo $data['location']; ?></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>email</h5>
              <p><?php echo $data['email']; ?></p>
            </div>
            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Created On</h5>
              <p><?php echo $data['created_at']; ?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
            <li class="nav-item h3 ul">More Articles</li>
            <?php foreach($blogs as $blog){?>   
            <li class="nav-item">
              <img src='../assets/img/thumbnails/thumb-<?php echo(rand(1,5));?>.jpg' height="25%" width="20%" class='img-fluid thumbnail'>
                <a class="nav-link active show text-danger" href="blog.php?id=<?php echo $blog['id'];?>"><?php echo $blog['heading'];?></a>
              </li>
              <?php }?>         
            </ul>
          </div>
          
        </div>
        
      </div>
    </section><!-- End Cource Details Tabs Section -->
  </main><!-- End #main -->

<?php 
  include_once('../views/layouts/footer.php');  
?>