<?php 
include_once('../../views/layouts/header.php');
include_once('../../views/layouts/sidebar.php');
?>
<main id="main" class="main">
  <div class="pagetitle mx-auto">
    <h1>Add New User</h1>
    <nav>
      <ol class="breadcrumb mx-auto">
        <li class="breadcrumb-item"></li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="col-lg-10 mx-auto">
    <section class="section dashboard">
      <div class="row">
        <div class="card">
          <div class="card-body">

            <form action="../../../admin/controllers/users.php" method="post" class="row g-3">
              <div class="col-md-12">
                <br>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name">
                  <label for="floatingName">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                <input type="email" class="form-control" id="floatingPassword" name= 'email' placeholder="Heading">
                  <label for="floatingPassword">Email</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" name= 'password' placeholder="Sub Heading">
                  <label for="floatingPassword">Password</label>
                </div>
              </div>
             
              
              <div class="col-md-12">
                <div class="form-floating mb-3">
                  <select class="form-select" name='role' id="floatingSelect" aria-label="Category">
                  <option>Select Role</option>  
                <option value='Admin'>Admin</option>
                  <option value='super-user'>Super User</option>
                  </select>
                  <label for="floatingSelect">Role</label>
                </div>
              </div>
              
             
              <div class=" row text-center">
             
              </div>
              <div class="text-center">
                <button type="submit" value='users' name='submit' class="btn btn-primary">Save User</button>
                
              </div>
            </form>
          </div>
        </div>
    </section>

</main>

<?php 
  include_once('../../views/layouts/footer.php');
?>