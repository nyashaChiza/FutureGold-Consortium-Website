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
  <div class="alert alert-success col-md-10 mx-auto bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        Article Saved Successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

<?php if (isset($_GET['update-status'])) { ?>
      <?php if ($_GET['update-status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        Article Updated Successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

<?php if (isset($_GET['delete-status'])) { ?>
      <?php if ($_GET['delete-status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        Article Deleted Successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

    <div class="pagetitle mx-3">
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
                
                <button type="button" class="btn btn-dark">
                  All <span class="badge bg-white text-dark"><?php echo $stats['all'];?></span>
                </button>
                <button type="button" class="btn btn-dark">
                Posted <span class="badge bg-white text-dark"><?php echo $stats['posted'];?></span>
              </button>
              <button type="button" class="btn btn-dark ">
                Draft <span class="badge bg-white text-dark"><?php echo $stats['drafts'];?></span>
              </button>
              <button type="button" class="btn btn-dark ">
                Pending <span class="badge bg-white text-dark"><?php echo $stats['pending'];?></span>
              </button>
              <button type="button" class="btn btn-dark ">
                Trash <span class="badge bg-white text-dark"><?php echo $stats['trash'];?></span>
              </button>
              
            </div>
          </div>
          
         <?php if($_SESSION['current_user']['role'] == 'super-user'){?> <span class="py-2"> <a href="../../admin/views/articles/create.php" class="btn btn-dark">New Article</a></span> <?php } ?>
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
                        <?php if ($_SESSION['current_user']['role'] == 'super-user'){?> <th scope="col">Delete</th> <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($blogs as $blog){?>
                      <tr>
                        <th scope="row"><?php echo $blog['name']?></th>
                        <td><?php echo $blog['heading']?></td>
                        <td><?php echo $blog['category']?></td>
                        <td><?php echo $blog['status']?></td>
                      
                        <?php if ($_SESSION['current_user']['role'] == 'super-user'){?> <td>
                        <a href="../../admin/controllers/blog.php?action=delete&id=<?php echo $blog['id']?>" class="btn btn-danger"><i class="bi bi-x-circle"></i></a>
                        
                       </td>
                       <?php } ?>
                      </tr>
                      <?php } ?>
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