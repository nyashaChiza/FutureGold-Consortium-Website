<?php 

// if (!$_SESSION['is_authenticated']) {
//   header('location: ../views/login.php');
// }
include_once('../../../admin/views/layouts/header.php');
include_once('../../../admin/views/layouts/sidebar.php');

include_once('../../../admin/controllers/users.php');
$users = get_all_users();




?>



  <main id="main" class="main">

  <?php if (isset($_GET['status'])) { ?>
      <?php if ($_GET['status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        User Saved Successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

<?php if (isset($_GET['update-status'])) { ?>
      <?php if ($_GET['update-status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        User Updated Successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

<?php if (isset($_GET['delete-status'])) { ?>
      <?php if ($_GET['delete-status'] == 1) { ?>
  <div class="alert alert-success col-md-10 mx-auto bg-warning text-light border-0 alert-dismissible fade show" role="alert">
        User Deleted Successfully
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }
    } ?>

    <div class="pagetitle mx-3">
      <h1>Users</h1>
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
            
          
          <?php if ($_SESSION['current_user']['role'] == 'super-user'){?> <td> <span class="py-2"> <a href="views/users/create.php" class="btn btn-dark">Add New User</a></span> <?php } ?>
            <div class='col-md-3 py-2'>
          </div>
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title"> Users</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <?php if ($_SESSION['current_user']['role'] == 'super-user'){?>   <th scope="col">Remove</th> <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($users as $user){?>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $user['name']?></a></th>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['role']?></td>
                        <?php if ($_SESSION['current_user']['role'] == 'super-user'){?> 
                        <td>
                        <a href="../../../admin/controllers/users.php?action=delete&id=<?php echo $user['id']?>" class="btn btn-danger"><i class="bi bi-x-circle"></i></a>
                        
                       </td>
                       <?php } ?>
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