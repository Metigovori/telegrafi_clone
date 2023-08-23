<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">

  <head>
    <!-- Other meta tags, styles, and scripts -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  </head>

  <title>Bootstrap Navbar Example</title>
</head>

<body>

  <!-- Navi -->

  <div class="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom ">
      <button class="navbar-toggler always-show custom-toggler ml-lg-5 mr-4 " type="button" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <a href="#" class="menu-btn mr-2 mt-2"></a>
      </button>
      <!-- Move the logo image outside of the collapse div -->
      <a href="https://telegrafi.com/">
        <img class="nav-link d-lg-none" id="logo-small-screen" src="assets/Ulye2560px-Telegrafi_Logo__282023_29.svg.png" alt="Logo"></a>

      <button class="navbar-toggler always-show custom-toggler" type="button" data-toggle="collapse" data-target="#searchNav" aria-controls="searchNav" aria-expanded="false" aria-label="Toggle search">
        <span class="material-symbols-outlined mr-1">search</span>
      </button>



      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item ml-5">
            <a class="nav-link pr-4 mt-1" id="navitem" href="#">Të Fundit</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4 mt-1" id="navitem" href="#">Lufta në Ukrainë</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mt-1" id="navitem" href="#">Games</a>
          </li>
          <li class="nav-item text-center d-none d-lg-block">
            <!-- Logo for larger screens -->
            <img class="nav-link" id="logo" src="assets/Ulye2560px-Telegrafi_Logo__282023_29.svg.png" alt="Logo">
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4 mt-1" id="navitem" href="#">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4 mt-1" id="navitem" href="#">Real Estate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link pr-4 mt-1" id="navitem" href="#">Deals</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>



  <!-- Navi -->