<?php 
session_start();
?>

<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgba(29, 26, 26, 0.493);" id="header">
<a class="navbar-brand" href=" <?php 
                if (!isset($repere)) {
                    echo '../index.php';
                }
                else {
                    echo 'index.php';
                }?>
                ">
    <img src="<?php 
                if (!isset($repere)) {
                    echo '../media/CI_logo.png';
                }
                else {
                    echo 'media/CI_logo.png';
                }?>
                " width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Forum officiel de Neurchi de Pouik Pouik
  </a>
  <button class="navbar-toggler navbar-toggler-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav ">
    </div>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">

      <?php 
      date_default_timezone_set('Europe/Paris');

      if (isset($_SESSION['id'])) 
      {
      ?>
              <li class="nav-item">
              <a class="nav-link" href="<?php 
                if (!isset($repere)) {
                    echo '../pages/discussion.php';
                }
                else {
                    echo 'pages/discussion.php';
                }?>
                ">
                <span class="fa fa-pencil"></span> Discussion </a>
              <li class="nav-item">
              <a class="nav-link" href="
              <?php 
                if (!isset($repere)) {
                    echo '../pages/profil.php';
                }
                else {
                    echo 'pages/profil.php';
                }?>
                ">
                <span class="fas fa-user"></span> Profil </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="?link=1" name="deconnect"><span class="fas fa-sign-in-alt"></span> Deconnexion </a>
      <?php
      }

      else 
      {
      ?>

              <a class="nav-link" href="<?php 
                if (!isset($repere)) {
                    echo '../pages/inscription.php';
                }
                else {
                    echo 'pages/inscription.php';
                }?>
                ">
                <span class="fas fa-user"></span> Inscription </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<?php 
                if (!isset($repere)) {
                    echo '../pages/connexion.php';
                }
                else {
                    echo 'pages/connexion.php';
                }?>
                "><span class="fas fa-sign-in-alt"></span> Connexion </a>
      <?php
      }
      ?>

      </li>
    </ul>
  </div>
</nav> 
</header>



<?php 

if (isset($_GET['link'])) {
   if ($_GET['link'] == '1') {
     if ($repere == NULL) {
     session_destroy();
     header('Location:../index.php');
     exit();
     }
     else {
      session_destroy();
      header('Location:index.php');
      exit();
     }
   }
}

?>
