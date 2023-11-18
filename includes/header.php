
<?php
  if( session_status() == PHP_SESSION_NONE){
      session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">

    <!-- <link rel="stylesheet" href="../bootstrap.min.css"> -->
    <link rel="stylesheet" href="headers.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Tout_Est_Science</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="../bootstrap.bundle.min.js"></script>
</head>
<body style="background:#fff; color:black;">
<header style="display: inline-block;" >
<nav class="navbar navbar-default" style="background-color:blue; width:100%;  height: 15lvh; font: siz 12px; border-radius:2px solide #fff; border:2xp;" >
    <div class="collapse navbar-collapse button-container" id="bs-example-navbar-collapse-2" style="background:blue;">
     <div class="div-container">
      <div class="button-container div" style="margin-left:-10px;" >
           <img src="T_E_S.png" alt="logo"  width="10%" height="3%" style="border-radius:80px; top:20px; float: left;"></a>
           <?php if(isset($_SESSION["auth"])):?>
           <button class="button" style="width:20%; background-color:blue; top:20px; border-color:#fff;"><a href="se_deconnecter.php">Se déconnecter</a></button>
           <?php else: ?>
           <button class="button" style="width:20%; background-color:blue; top:20px; border-color:#fff;"><a href="s_enregister.php">S'inscrire</a></button>
           <button class="button" style="width:20%; background-color:blue; top:20px; border-color:#fff;"><a href="se_connecter.php" >Se connecter</a></button>
           <?php endif ?>
      </div>
      <div class="dropdown text-end div "  style="margin-left:-10px;">
         <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" style="  margin-left:-70%; float:right; width:20%;" role="search">
             <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
          </form>
          <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" style="margin-left:-10px;" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu " style="float:right; margin-right:-70%; width:50% ; background-color: blue; ">
            <li><a class="dropdown-item" style="color: #fff;" href="#">New project...</a></li>
            <li><a class="dropdown-item" style="color: #fff;" href="#">Settings</a></li>
            <li><a class="dropdown-item" style="color: #fff;" href="#">Profile</a></li>
            <?php if(isset($_SESSION["auth"])):?>
            <li><a class="dropdown-item" style="color: #fff;" href="se_deconnecter.php">Sign out</a></li>
            <?php else: ?>
            <li><a class="dropdown-item" style="color: #fff;" href="s_enregister.php">S'inscrire</a></li>
            <li><a class="dropdown-item" style="color: #fff;" href="se_connecter.php" >Se connecter</a></li>
            <?php endif ?>
          </ul>
        </div>
     </div>

       </div>
    </div>
  </div>
</nav>
</header>
<div class="container col-md-8 col-md-offset-2" >
<?php if(isset($_SESSION["flach"])):  ?>
     <?php foreach($_SESSION["flash"] as $type => $message): ?>
          <div class="alert alert -<?= $type?>">
               <? $message ?>
          </div>
      <?php    endforeach;   ?> 
      <?php    unset($_SESSION["flash"]) ?>  
<?php    endif;   ?>

<?php
    require_once('footer.php')
?>

<style>

.dropdown-menu {
     position: absolute;
     top: 50px;
    left: 100px;
}

  .button-container {
    text-align: center; /* Centre les boutons horizontalement */
    float:left;
}

.button {
    display: inline-block;
    margin-right: 10px; /* Espace entre les boutons */
    border-radius: 10px;
    font-size: 15px;
}

.div-container {
    width: 100%; /* Assurez-vous que le conteneur occupe toute la largeur disponible */
}

.div {
    width: 50%; /* Chaque div occupe 50% de la largeur */
    box-sizing: border-box; /* Inclut la largeur des bordures et des marges dans les 50% */
    float: left; /* Flotte les divs à gauche pour les aligner côte à côte */
    margin-right: 10px; /* Espace entre les divs */
}


</style>