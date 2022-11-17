<?php 
// session_start();
// if (!$_SESSION['is_authenticated']) {
//   header('location: ../views/login.php');
// }
include_once('../../../admin/views/layouts/header.php');
include_once('../../../admin/views/layouts/sidebar.php');

include_once('../../../admin/controllers/blog.php');
$blogs = get_all_blogs();
$stats = get_post_stats();



?>



  <main id="main" class="main">

  <?php if (isset($_GET['status'])) { ?>
      <?php if ($_GET['status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-success text-light border-0 alert-dismissible fade show" role="alert">
        Article Saved successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

<?php if (isset($_GET['update-status'])) { ?>
      <?php if ($_GET['update-status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-success text-light border-0 alert-dismissible fade show" role="alert">
        Article Updated successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

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
            <div class="card">
              <div class="card-body d-flex justify-content-around my-3">
                
                <button type="button" class="btn btn-warning ">
                  All <span class="badge bg-white text-dark"><?php echo $stats['all'];?></span>
                </button>
              <button type="button" class="btn btn-warning ">
                Draft <span class="badge bg-white text-dark"><?php echo $stats['drafts'];?></span>
              </button>
              <button type="button" class="btn btn-warning ">
                Pending <span class="badge bg-white text-dark"><?php echo $stats['pending'];?></span>
              </button>
              <button type="button" class="btn btn-warning ">
                Trash <span class="badge bg-white text-dark"><?php echo $stats['trash'];?></span>
              </button>
              
            </div>
          </div>
          
          <span class="py-2"> <a href="views/articles/create.php" class="btn btn-dark">New Article</a></span> 
            <div class='col-md-3 py-2'>
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
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($blogs as $blog){?>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $blog['name']?></a></th>
                        <td><?php echo $blog['heading']?></td>
                        <td><?php echo $blog['category']?></td>
                        <td><?php echo $blog['status']?></td>
                        <td><?php echo $blog['email']?></td>
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
  include_once('../../../admin/views/layouts/footer.php');
?>