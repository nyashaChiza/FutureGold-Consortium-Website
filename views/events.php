<?php
include_once('../views/layouts/navbar.php');
include_once("../forms/requests.php");

// $results = file_get_contents('https://www.eventbriteapi.com/v3/series/15241955098/?token=QJZUZA45G5SFQSPKYER4');

// $results = array(json_decode($results[0][0]));


// $description = $results['description']['text'];
// $start_text = $results['start']['text'];
// $stop_text = $results['stop']['text'];
// $logo = $results['logo']['original']['url'];
// $summary = $results['summary'];
?>
<main id="main">
 
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events"> 
      <div class="container" data-aos="fade-up">
      <img src="../assets/img/coming-soon.png" class="img-fluid mx-auto" alt="">
        <div class="row">
          <!-- <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="../assets/img/pexels-christina-morillo-1181400.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Test Event</a></h5>
                <p class="fst-italic text-center">test time</p>
                <p class="card-text">test description</p>
              </div>
            </div>
          </div> -->
          
          
        </div>

      </div>
    </section><!-- End Events Section -->
</main> 

  <?php
include_once('../views/layouts/footer.php');
?>