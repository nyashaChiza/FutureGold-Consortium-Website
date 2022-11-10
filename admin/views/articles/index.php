<?php 
include_once('../../../admin/views/layouts/header.php');

include_once('../../../admin/views/layouts/sidebar.php');
?>



  <main id="main" class="main">

    <div class="pagetitle mx-auto">
      <h1>Articles</h1>
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

            <div class='col-md-3 py-2'>
              <button type="button" class="btn btn-dark">New Article</button>
          </div>
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title"> Articles</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td>12-07-2022</td>
                        <td><span class="badge badge-primary bg-primary text-dark rounded-4 py-2 mx-3">pending</span></td>
                        <td>test@email.com</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2147</a></th>
                        <td>Bridie Kessler</td>
                        <td>12-07-2022</td>
                        <td><span class="badge badge-primary bg-primary text-dark rounded-4 py-2 mx-3">pending</span></td>
                        <td>test@email.com</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2049</a></th>
                        <td>Ashleigh Langosh</td>
                        <td>12-07-2022</td>
                        <td><span class="badge badge-primary bg-primary text-dark rounded-4 py-2 mx-3">pending</span></td>
                        <td>test@email.com</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Angus Grady</td>
                        <td>12-07-2022</td>
                        <td><span class="badge badge-primary bg-primary text-dark rounded-4 py-2 mx-3">pending</span></td>
                        <td>test@email.com</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#2644</a></th>
                        <td>Raheem Lehner</td>
                        <td>12-07-2022</td>
                        <td><span class="badge badge-primary bg-primary text-dark rounded-4 py-2 mx-3">pending</span></td>
                        <td>test@email.com</td>
                      </tr>
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
  include_once('../../../admin/views/layouts/footer.php');
?>