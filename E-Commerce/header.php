<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce</title>
    <!-- Bootstrap CDN -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <!-- Owl Carsual -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400..800&family=Raleway:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
      rel="stylesheet"
    />
    <!-- include the functions.php that contains all functions that will fetch data frpm DB -->
    <?php require_once './functions.php' ?>
  </head>

  <!-- custom style css -->
  <link rel="stylesheet" href="./style.css" />
  <body>
    <!-- start #header -->
    <header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-14 text-black-50 m-0">
          Jordan Calderon 430-243 Eleif St.Duluth Washongtone 7829 (427) 930
          5255
        </p>
        <div class="font-rale font-size-14">
          <a href="" class="px-3 border-right border-left text-dark">Login</a>
          <a href="" class="px-3 border-right text-dark">Wishlist (0)</a>
        </div>
      </div>
      <!-- primary Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark secondary-color-bg primary-color ">
        <div class="container-fluid d-flex justify-content-between">
          <a class="navbar-brand" href="#">Mobile Shopee</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubic">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">One Sale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Category <i class="fa-solid fa-chevron-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products <i class="fa-solid fa-chevron-down"></i></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Comming Soon</a>
              </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="#" class="py-2 rounded-pill primary-color-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="py-2 px-3 rounded-pill text-dark bg-light">0</span>
                </a>
            </form>
          </div>
        </div>
      </nav>
      <!-- ! primary Navigation -->
    </header>
    <!-- ! start #header -->

    <!-- start #main-site -->
    <main id="main-site">