<?php 
include_once('../../views/layouts/header.php');
include_once('../../views/layouts/sidebar.php');
include_once('../../controllers/applications.php');

if(isset($_GET['action'])){
    if($_GET['action'] == 'view'){
        $id = $_GET['id'];
    }    
}
$app = get_application($id)[0];
?>
  <main id="main" class="main">

<div class="pagetitle mx-auto">
  <h1>Application Details</h1>
 
</div><!-- End Page Title -->
<section class="section profile">
      <div class="row mx-auto">
        

        <div class="col-xl-10 mx-auto">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active h2" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile Details</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  
                

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label ">Applicant Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['name']; ?></div>
                  </div>

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label">Contact</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['contact']; ?></div>
                  </div>

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label">Course</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['course']; ?></div>
                  </div>

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label">Applicant Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['email']; ?></div>
                  </div>

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label">Payment Method</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['payment_method']; ?></div>
                  </div>

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label">Level of Education</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['education']; ?></div>
                  </div>

                  <div class="row bg-light py-4">
                    <div class="col-lg-3 col-md-4 label">Applied On</div>
                    <div class="col-lg-9 col-md-8"><?php echo $app['created_at']; ?></div>
                  </div>

                  

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
</main>
<?php 
  include_once('../../views/layouts/footer.php');
?>