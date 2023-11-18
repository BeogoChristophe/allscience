<?php

    if( session_status() == PHP_SESSION_NONE){
    session_start();
    }

    require_once ('./includes/bd.php');
    
    require_once ('function.php');
    
    reconnect_auto();
    is_connect();

?>




<!DOCTYPE html>
<html lang="en">
<head>


<title>Tout_Est_Science</title>
</head>
<body>
<?php

if( session_status() == PHP_SESSION_NONE){
    session_start();
}
require_once('header1.php')
?>

<!-- <header> 
  <div class="head">
      <div class="logo">
         <p><img src="T_E_S.png" alt="logo"  width="25%" height="5%" style="border-radius:70px; top:20px; float: left; margin: left 10px;"></p>
      </div>
      <div class="nav">
           <nav>
             <ul class="menu">
               <li><a href="index.php#Accueil">Accueil</a></li>
               <li><a href="index.php#cours">Cours</a></li>
               <li><a href="index.php#exercices">Exercices</a></li>
               <li><a href="index.php#progression">Progression</a></li>
               <li><a href="F_index.php">Forum</a></li>
              <li><a href="login.php">Profil</a></li> 
             </ul>
           </nav>
      </div>

     <div class="ligne"  >
       <div class="ligne1" style=" display: flex; justify-content: space-between; align-items: center;" >
        <div class="social-icons">
            <a href="mailto:tourestscience@gmail.com" style="width:200%; height:15lvh;"><i class="fas fa-envelope"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61550799515537" style="width:200%; height:15lvh;"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/ " style="width:200%; height:15lvh;"><i class="fab fa-instagram"></i></a>
       
            <div class="ligne2">
               <div class="button-container div" style="margin-left:-10px; height:1lvh;top:20px;" >
                  <?php if(isset($_SESSION["auth"])):?>
                  <button class="button" style="width:200%; height:7lvh;top:20px; background-color:blue; top:20px; border-color:#fff; font-size:3px;"><a href="se_deconnecter.php" style="font-size:10px; background-color:blue; color:#fff;">Se déconnecter</a></button>
                  <?php else: ?>
                  <button class="button" style="width:120%; background-color:blue; top:20px; border-color:#fff;"><a href="s_enregister.php">S'inscrire</a></button>
                  <button class="button" style="width:120%; background-color:blue; top:20px; border-color:#fff;"><a href="se_connecter.php" >Se connecter</a></button>
                  <?php endif ?>
              </div>
              
              </div>
              <div class="dropdown text-end div "  style="margin-left:-10px;">
         
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" style="margin-left:-10px;" data-bs-toggle="dropdown" aria-expanded="false">
                   <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu " style="float:right; margin-right:-70%; width:60% ; background-color: blue; ">
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
</header> -->
<link href="navbars-offcanvas.css" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="index.css">
<!-- <link rel="stylesheet" href="headers.css"> -->
<!-- <link rel="stylesheet" href="header.css"> -->


<main>



  
  

</main>





    <?php require_once 'footer.php';?>



</body>
<!-- <script src="bootstrap.bundle.min.js"></script> -->
<script src="color-modes.js"></script>
<script src="cours.js"></script>
</html>
