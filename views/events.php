<?php
session_start();
include_once('../views/layouts/navbar.php');
include_once("../forms/requests.php");

 
require_once "../forms/Eventbrite.php"; 

$authentication_tokens = array('app_key'  => 'NUVIJQI5CI2YATM2JN',
'user_key' => 'JHZR2RACCU5V2JV26MS3CPZ3WRBTDSWXBHASXSY6HUKIHRNHOR');


$url = 'https://www.eventbriteapi.com/v3/organizations/1199095923193/events/?token=QJZUZA45G5SFQSPKYER4';

$resp = file_get_contents($url); // returns true only if http response code < 400

#print_r(json_decode($resp)->events[0]->description->text);
#print_r(json_decode($resp)->events);
echo '    <section id="events" class="events"> 
<div class="container" data-aos="fade-up">
<div class="row">';
foreach(json_decode($resp)->events as $event){
  
  $title = $event->name->text;
  $url = $event->url;
  $start = $event->start->local;
  $end = $event->end->local;
  $description = $event->description->text;
  $summary = $event->summary;
  

?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="../assets/img/pexels-christina-morillo-1181400.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a target="_blank" href="<?php print_r($url);?> "> <?php print_r($title);?> </a> </h5>
                <p class="fst-italic text-center"> Start: <?php print_r($start);?></p>
                <p class="fst-italic text-center"> End: <?php print_r($end);?></p>
         
                <p class="card-text"> <?php print_r($summary);?></p>
              </div>
            </div>
          </div>
          <?php
}
          ?>
          
        </div>

      </div>
    </section><!-- End Events Section -->
</main> 

  <?php
include_once('../views/layouts/footer.php');
?>