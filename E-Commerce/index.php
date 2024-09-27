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
      <!-- owl carusor banner -->
       <section id="banner-area">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="./assets/Banner1.png" alt="Banner 1">
          </div>
          <div class="item">
            <img src="./assets/Banner2.png" alt="Banner 2">
          </div>
        </div>
       </section>
      <!-- ! owl carusor banner -->
      <!-- Top Sale -->
       <section class="container py-5" id="top-sale">
          <h4 class="py-3 border-bottom mb-3 font-size-20 font-rubic">Top Sale</h4>
          <!-- start owl carousel -->
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/1.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung Galaxy 10</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$150</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/2.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Readme Note 7</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$125</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/3.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>OPPO Reno 2</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$200</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/4.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung Galaxy 11</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$300</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/5.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>OPPO A35</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$100</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/3.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>OPPO Reno 2</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$200</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/4.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>Samsung Galaxy 11</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$300</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product font-rale">
                <a href="#"><img src="./assets/products/5.png" alt="product 1" class="img-fluid"></a>
                <div class="text-center">
                  <h6>OPPO A35</h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2">
                    <span>$100</span>
                  </div>
                  <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                </div>
              </div>
            </div>
          </div>
          <!-- ! start owl carousel -->
       </section>
      <!-- ! Top Sale -->
      <!-- special price -->
       <section id="special-price">
        <div class="container">
          <h4 class="font-rubic font-size-20">Special Price</h4>
          <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <button class="btn" data-filter=".Apple">Apple</button>
            <button class="btn" data-filter=".Samsung">Samsung</button>
            <button class="btn" data-filter=".Readmi">Readmi</button>
          </div>

          <div class="grid gap-2">
            <div class="grid-item Apple border">
              <div class="item py-2 " style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/13.png" alt="product 13" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Apple</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$1700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/10.png" alt="product 10" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Samsung A23</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Apple border">
              <div class="item py-2" style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/13.png" alt="product 13" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Apple</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$1700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Readmi border">
              <div class="item py-2" style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/13.png" alt="product 13" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Readmi</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$1700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Samsung border">
              <div class="item py-2" style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/10.png" alt="product 10" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Samsung A23</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Readmi border">
              <div class="item py-2" style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/13.png" alt="product 13" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Readmi</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$1700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid-item Readmi border">
              <div class="item py-2" style="width: 200px; ">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/13.png" alt="product 13" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Readmi</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$1700</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </section>
      <!-- ! special price -->
       <!-- banner ads -->
        <section id="banner_ads">
          <div class="container py-5 text-center">
            <img src="./assets/banner1-cr-500x150.jpg" alt="b1" class="img-fluid">
            <img src="./assets/banner2-cr-500x150.jpg" alt="b2" class="img-fluid">
          </div>
        </section>
       <!-- ! banner ads -->
        <!-- New phone -->
         <section id="new-phones">
          <div class="container py-5">
            <h4 class="border-bottom py-3 mb-2 font-size-20 font-rubic">New Phones</h4>
            <!-- carousel new Phones -->
            <div class="owl-carousel owl-theme">
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/1.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Samsung Galaxy 10</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$150</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/2.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Readme Note 7</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$125</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/3.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>OPPO Reno 2</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$200</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/4.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Samsung Galaxy 11</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$300</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/5.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>OPPO A35</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$100</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/3.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>OPPO Reno 2</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$200</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/4.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>Samsung Galaxy 11</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$300</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
              <div class="item bg-light">
                <div class="product font-rale">
                  <a href="#"><img src="./assets/products/5.png" alt="product 1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6>OPPO A35</h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                      <span>$100</span>
                    </div>
                    <button class="btn btn-warning font-size-14" type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- ! carousel new Phones -->
          </div>
         </section>
        <!-- ! New phone -->
        <!-- Latest Blog -->
         <section id="blogs">
          <div class="container">
            <h4 class="font-rubic py-3 border-bottom font-size-20">Latest Blog</h4>
            <div class="blog-contnets">
              <div class="owl-carousel owl-theme">
                <div class="item mr-2">
                  <div class="card border-0">
                    <h4 class="card-title font-size-16 font-rale">Upcomig Mobiles</h4>
                    <img src="./assets/blog/blog1.jpg" alt="blog-1" class="fluid card-img-top">
                    <p class="font-size-14 card-text color-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et eligendi quas dolor laudantium excepturi. Reprehenderit cum id veniam tenetur quia?</p>
                    <button type="submit" class="btn text-left secondary-color">Go Somewhere</button>
                  </div>  
                </div>
                <div class="item mr-2">
                  <div class="card border-0">
                    <h4 class="card-title font-size-16 font-rale">Upcomig Mobiles</h4>
                    <img src="./assets/blog/blog2.jpg" alt="blog-1" class="fluid card-img-top">
                    <p class="font-size-14 card-text color-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et eligendi quas dolor laudantium excepturi. Reprehenderit cum id veniam tenetur quia?</p>
                    <button type="submit" class="btn text-left secondary-color">Go Somewhere</button>
                  </div>  
                </div>
                <div class="item mr-2">
                  <div class="card border-0">
                    <h4 class="card-title font-size-16 font-rale">Upcomig Mobiles</h4>
                    <img src="./assets/blog/blog3.jpg" alt="blog-1" class="fluid card-img-top">
                    <p class="font-size-14 card-text color-black-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et eligendi quas dolor laudantium excepturi. Reprehenderit cum id veniam tenetur quia?</p>
                    <button type="submit" class="btn text-left secondary-color">Go Somewhere</button>
                  </div>  
                </div>
              </div>
            </div>
          </div>
         </section>
        <!-- ! Latest Blog -->
    </main>
    <!-- ! start #main-site -->

    <!-- start #footer -->
    <footer id="footer" class="bg-dark text-white py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-12">
            <h4 class="font-rubic font-size-20">Mobile Shopee</h4>
            <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, distinctio assumenda? Officia, corporis error.</p>
          </div>
          <div class="col-lg-4 col-12">
            <h4 class="font-rubic font-size-20">Newslatter</h4>
            <form class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email *">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary form-control">Send</button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubic font-size-20">Information</h4>
            <div class="d-flex flex-wrap flex-column">
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">About Us</a>
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">Delivery Information</a>
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">Privacy & Policy</a>
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">Terms & Condition</a>
            </div>
          </div>
          <div class="col-lg-2 col-12">
            <h4 class="font-rubic font-size-20">Account</h4>
            <div class="d-flex flex-wrap flex-column">
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">My Acount</a>
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">Ordered History</a>
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">Wishlist</a>
              <a href="" class="font-rale font-size-14 text-white-50 mb-1">Newslatter</a>
            </div>          
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright text-center bg-dark text-white">
      &copy; Copyright 2025, Designed By <a href="#" class="font-rubic bold">Mohamed Mahdi</a>
    </div>
    <!-- ! start #footer -->

    <!-- JS Bootsrap and Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
      integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <!-- owal-carousel js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom Javascript files -->
     <script src="./index.js"></script>
     <!-- isotope plugin cdn to filter prodycts -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>