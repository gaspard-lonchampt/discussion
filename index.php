
<?php 

$repere = true;

// session_start();
include ('include/head.php'); 
include ('include/header.php'); 

// print_r($_SESSION)

?>


<main>
<div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="media/CI_1.jpg" alt="premier cochin d'inde">
      <div class="carousel-caption d-md-block">
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="media/CI_2.jpg" alt="Second cochon d'inde" >
      <div class="carousel-caption d-none d-md-block mask flex-center rgba-green-strong">
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="media/CI_3.jpg" alt="Troisième cochon d'inde">
      <div class="carousel-caption d-none d-md-block mask flex-center rgba-green-strong">
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</main>

<?php
include ('include/footer.php'); 
?>