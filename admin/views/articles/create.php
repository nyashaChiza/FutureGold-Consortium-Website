<?php
include_once('../../../admin/views/layouts/header.php');
include_once('../../../admin/views/layouts/sidebar.php');
?>
<link rel="stylesheet" href="http://localhost:9000/assets/res/style.css" />
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						
<main id="main" class="main">
  <div class="pagetitle mx-auto">
    <h1>Write New Article</h1>
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

            <form action="http://localhost:9000/admin/controllers/blog.php" method="post" class="row g-3">
              <div class="col-md-12">
                <br>
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name">
                  <label for="floatingName">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name= 'heading' placeholder="Heading">
                  <label for="floatingPassword">Heading</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingPassword" name= 'sub_heading' placeholder="Sub Heading">
                  <label for="floatingPassword">Sub Heading</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                <input type="text" class="form-control" name='location' id="floatingName" placeholder="Your Location">
                    <label for="floatingEmail">Your Location</label> </div>
              </div>
              <div class="col-md-6">
                <div class="col-md-12">
                  <div class="form-floating">
                  <input type="email" class="form-control" id="floatingEmail" name="email"  placeholder="Your Email">
                  <label for="floatingEmail">Your Email</label>
                   
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-3">
                  <select class="form-select" name='category' id="floatingSelect" aria-label="Category">
                  <option>Select Category</option>  
                <option value='economic calendar'>Economic calendar</option>
                  <option value='charts'>Charts</option>
                  <option value='forex'>Forex</option>
                  <option value='commodities'>Commodities</option>
                  <option class='index'>Index</option>
                  <option class='stocks'>Stocks</option>
                  </select>
                  <label for="floatingSelect">Category</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-3">
                  <select class="form-select" name='status' id="floatingSelect" aria-label="Status">
                  <option>Select Status</option>  
                  <option value='post'>Post Article</option>
                  <option value='trash'>Send To Trash</option>
                  <option value='Pending'>Set As Pending</option>
                  <option value='draft'>Send To Drafts</option>
                  </select>
                  <label for="floatingSelect">Status</label>
                </div>
              </div>
              <div id="sample">
  <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
  <script type="text/javascript">
 
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>

  <h4>
    Content
  </h4>
  <textarea name="area2" style="width: 100%;height:200px;"> </textarea>
  <br>

</div>
         
              <div class=" row text-center">
             
              </div>
              <div class="text-center">
                <button type="submit" value='blog' name='submit' class="btn btn-primary">Submit</button>
                
              </div>
            </form>
          </div>
        </div>
    </section>

</main>

<?php
include_once('../../../admin/views/layouts/footer.php');
?>