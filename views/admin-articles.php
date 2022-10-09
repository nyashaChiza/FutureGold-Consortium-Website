<?php
session_start();
if(!$_SESSION['is_authenticated']){
  header('location: ../views/login.php');
}
include_once('../views/layouts/navbar.php');
include_once('../forms/blog.php');
$blogs = get_all_blogs();

?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Articles</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
    <div class = 'pt-3'>
        <a href="../views/write.php" class="write-blog-btn  blockquote">Write Blog</a>
</div>
    <?php if(isset($_GET['update-status'])){?>
            <?php if($_GET['update-status'] ==1){?>
              <div class=" col-md-10 mx-auto alert alert-success alert-dismissible fade show text-center" role="alert">
                blog updated successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

          <?php }} ?>
          <?php if(isset($_GET['delete-status'])){?>
            <?php if($_GET['delete-status'] ==1){?>
              <div class="col-md-10 mx-auto alert alert-danger alert-dismissible fade show text-center" role="alert">
                blog deleted successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

          <?php }} ?>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-7">
          <table class="table">
  <thead class="thead-warning">
    <tr>

      <th scope="col">Blogger</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($blogs as $blog){?>
    <tr>
      <th scope="row"><?php echo $blog['name'];?></</th>
     
      <td><?php echo $blog['heading'];?></td>
      <td><?php echo $blog['created_at'];?></td>
      <td>
        <div class="btn-grouphg" role="group" aria-label="Basic example">
 
  <a href="../views/update.php?&id=<?php echo $blog['id'];?>"><button type="button" class="btn btn-secondary">Update</button></a> &nbsp;
  <a href="../forms/blog.php?action=delete&id=<?php echo $blog['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
</div></td>
    </tr>
    <?php }?>
    
  </tbody>
</table>
          </div>
          <div class="col-lg-4">

            <a href ='../views/admin-articles.php'><div class="course-info d-flex justify-content-between align-items-center" style = "background: #ffc107;">
              <h5>Articles</h5>
              
            </div>
            </a>

            <a href ='../views/admin-applications.php'<div class="course-info d-flex justify-content-between align-items-center">
              <h5>Applications</h5>
             
            </div>
            </a>

           

          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div class="col-lg-9 mt-4 mt-lg-0"></div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->
  </main><!-- End #main -->

<?php 
  include_once('../views/layouts/footer.php');  
?>