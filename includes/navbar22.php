<nav class="navbar navbar-expand-lg navbar-light" style="background-color: blue;" >
  <div class="container">
    <a class="navbar-brand" href="../index1.php" style="font-size:30px; color:#fff; margin-left: -8%;" ><img src="../T_E_S.png" alt="logo"  width="8%" height="8%" style="border-radius:80px; top:20px; float: left;">Tout_Est_Science</a></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#globalNavbar" aria-controls="globalNavbar" aria-expanded="false" aria-label="Toggle navigation" _mstaria-label="320099"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" style="margin-left: -20%;" id="globalNavbar">
      <form class="form-inline form-navbar my-2 my-lg-0 order-2" action="https://themes.getbootstrap.com/shop/">
        <input class="form-control" name="s" type="text" placeholder="Search" _mstplaceholder="74607">
      </form>
      <ul class="navbar-nav mr-auto order-1" style="display: block;">
        <li class="nav-item"><a class="nav-link" style="color: #fff; font-size:18px;" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" style="color: #fff; font-size:18px;" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" style="color: #fff; font-size:18px"  href="#">Testimony</a></li>
        <li class="nav-item"><a class="nav-link" style="color: #fff;font-size:18px;" href="#">Cours</a></li>
      </ul>
      <ul class="navbar-nav d-none d-lg-flex ml-2 order-3">
        <?php if(isset($_SESSION["auth"])):?>
        <li><a class="dropdown-item" style="color: #fff;" href="se_deconnecter.php">Sign out</a></li>
        <?php else: ?>
        <li><a class="dropdown-item" style="color: #fff;" href="s_enregister.php">S'inscrire</a></li>
        <li><a class="dropdown-item" style="color: #fff;" href="se_connecter.php" >Se connecter</a></li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>




    
<main style=" color:#fff; height:50lvh;">
  <nav class="navbar navbar-dark bg-dark1" style="background-color: blue; color:#fff;" aria-label="Dark offcanvas navbar">
    <div class="container-fluid" style="background-color: blue; color:#fff;">
      
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark1" style="background-color: blue; color:#fff;" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarDarkLabel">Tout_Est_Science</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color:#fff">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              
              </a>
             
          
        </div>
      </div>
    </div>
  </nav>