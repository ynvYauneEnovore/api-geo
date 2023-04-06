<?php
/**
*============================================================================
* Name        : Cabeza_2
* Author      : Yovan Y. enovore
* Version     : 1.0.0
* Copyright   : YNV Ⓒ 2023
* Description : Head de el inicio.
*============================================================================
*/
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<nav class="navbar navbar-dark" style="background-image: linear-gradient(220deg, #0081ff 0, #007dff 5.56%, #0077ff 11.11%, #0070ff 16.67%, #0068ff 22.22%, #005eff 27.78%, #5553fb 33.33%, #8144ef 38.89%, #9f31e0 44.44%, #b711d0 50%, #ca00be 55.56%, #d800ac 61.11%, #e30098 66.67%, #eb0084 72.22%, #f00071 77.78%, #f3005d 83.33%, #f2004a 88.89%, #ef0037 94.44%, #ea0023 100%);">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://wevote.eu">weVote.eu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Geolocate Api</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Author</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://port.ynv-servis.tech">Name: Yovan Yaune Enovore</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://ynv-servis.tech">webOficial: ynv-servis.com</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link text-dark" aria-current="page" href="./index.php">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-success text-white" href="./guardar.php">Registros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Ubicación</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled">Api</a>
  </li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
