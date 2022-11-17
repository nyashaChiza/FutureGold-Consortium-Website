<?php 
include_once('../../views/layouts/header.php');
include_once('../../views/layouts/sidebar.php');

include_once('../../../forms/application.php');
$apps = get_all_applications();


?>



  <main id="main" class="main">

    <div class="pagetitle mx-auto">
      <h1>Application</h1>
      <nav>
        <ol class="breadcrumb mx-auto">
          <li class="breadcrumb-item"></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-10 mx-auto">
          <div class="row">

           
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                  <h5 class="card-title"> Applications</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Course</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($apps as $app){?>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $app['name']?></a></th>
                        <td><?php echo $app['contact']?></td>
                        <td><?php echo $app['course']?></td>
                        <td><?php echo $app['email']?></td>
                        <td><?php echo $app['created_at']?></td>
                        
                      </tr>
                      <?php }?>
                      
                      
                      
                      
                    </tbody>
                  </table>

                </div>

                

              </div>
            </div>

            
            <!-- Top Selling -->
            <!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

<?php 
  include_once('../../views/layouts/footer.php');
?>