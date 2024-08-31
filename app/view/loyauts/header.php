<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./app/view/loyauts/styles/style.css" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
<header class="p-2 bg-dark">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="navbar-brand text-white">
        TourG
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active text-white" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" href="/#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" href="/#about">About Us</a>
        </li> 
          <li class="nav-item">
            <a class="nav-link active text-white" href="/table">Table</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link active text-white" href="/main_page">Main</a>
          </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <?php
            if($_SESSION['Login']){
          ?>
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true">
              <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle" width="32" height="32">
            </a>
            <ul class="dropdown-menu text-small" style="">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          <?php } else {?>
            <a class="btn btn-outline-light me-2" href="/logine">Login</a>
            <a class="btn btn-warning" href="/register">Sign-up</a>
          <?php }?>
        </div>
      </div>
  </header>