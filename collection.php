<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yoo-Naa | Fashion Design & Accessories</title>

  <link rel="shorcut icon" style="width: 150px;" href="image\yoo-naa-logo.png">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!--boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css\category.css">
  <link rel="stylesheet" href="css\content.css">
  <link rel="stylesheet" href="css\footer.css">

  <!--Carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>

  <!--navbar-->
  <!--use alt+shift+F to arrange the code-->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="home.php">
        <img src="image\yoo-naa-logo.png" alt="Bootstrap" width="120" height="60">
      </a>
      <button class="navbar-toggler" style="color:#fff;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-thin fa-bars" style="color:#fff;"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="women.php">WOMEN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfume.php">PERFUME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="collection.php">COLLECTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">CONTACT</a>
          </li>
          <div class="icon">
            <a href="cart.php">
              <ion-icon name="bag-handle-outline">
              </ion-icon>
            </a>
          </div>
          <div class="icon">
            <a href="login.php">
              <ion-icon name="person-circle-outline"></ion-icon>
            </a>
          </div>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image\HC-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item active">
        <img src="image\HC-3.jpg" class="d-block w-100" alt="...">
        <a href="#Shop-Category"><button type="button" id="ShopNow" class="btn btn-outline-secondary btn-responsive">SHOP
            NOW</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>


  <div class="container mt-5">
    <div class="row" id="discount">
      <div class="col" id="discount-in">
        <a href="dresses.html">
          <h3 class="text-center">₱150.00 OFF</h3>
          <p class="text-center">ON ORDERS OF 1000+</p>
        </a>
      </div>
      <div class="col" id="discount-in">
        <a href="dresses.html">
          <h3 class="text-center">₱250.00 OFF</h3>
          <p class="text-center">ON ORDERS OF 1000+</p>
        </a>
      </div>
      <div class="col" id="discount-in">
        <a href="dresses.html">
          <h3 class="text-center">₱450.00 OFF</h3>
          <p class="text-center">ON ORDERS OF 1000+</p>
        </a>
      </div>
      <div class="col" id="code-yoo-naa">
        <a href="dresses.html">
          <h3 class="text-center">CODE YOO-NAA</h3>
          <p class="text-center">ORDER AND GET DISCOUNT</p>
        </a>
      </div>
    </div>
  </div>

  <div class="space" style="margin-top: 10%" ;></div>


  <div class="container-fluid">
    <div class="div" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
      <div class="container-fluid" id="our-product">
        <h2 class="text-center mb-5">FAVORITES</h2>
      </div>
    </div>
  </div>
  <!--heading-->
  <div class="div" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
    <div class="container-fluid">
      <div class="nav">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-Hot-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Clothes</button>
          <button class="nav-link" id="nav-OnSale-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Perfume</button>
          <button class="nav-link" id="nav-Trending-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Accessories & Jewelry</button>
          <button class="nav-link" id="nav-Trending-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Shoes & Bags</button>
        </div>
      </div>

      <div class="tab-content mt-5" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="space" style="margin-bottom: 5%" ;></div>

              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\dress-4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Centered On Style Ruched Midi Dress</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--end of tab1-->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-3.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-4.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="space" style="margin-bottom: 5%" ;></div>

              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-1.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\perfume-2.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Giorgio Armani Code EDT 100ml</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱280.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱350.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>

      </div>
    </div>
  </div>





  <div class="space" style="margin-bottom: 15%" ;></div>
  <!--footer-->

  <div class="container-fluid">
    <p class="text-center">Sign up to get advance notice of our sales and other events. We Email you often.
    </p>

    <!--email-->
    <!--form method here-->
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label"></label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Join our mailing list">
    </div>
    <!--form method here-->
    <button type="button" id="Submit-Button" class="btn btn-dark">Submit</button>

    <div class="space" style="margin-top: 5%" ;></div>

    <div class="container">
      <div class="row row-cols-4" id="section">
        <div class="col">
          <h5 class="fw-bolder">Company Info</h5>
          <ul class="list">
            <li>
              <a href="">
                <p class="fw-normal">About Yoo-Naa</p>
              </a>
            </li>
            <li>
              <a href="">
                <p class="fw-normal ">Fashion Blogger</p>
              </a>
            </li>
            <li>
              <a href="">
                <p class="fw-normal ">Social Responsibility</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h5 class="fw-bolder">Help & Support</h5>
          <ul class="list">
            <li>
              <a href="">
                <p class="fw-normal">Shipping Fee</p>
              </a>
            </li>
            <li>
              <a href="">
                <p class="fw-normal">Returns</p>
              </a>
            </li>
            <li>
              <a href="">
                <p class="fw-normal">How to order</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h5 class="fw-bolder">Customer Care</h5>
          <ul class="list">
            <li>
              <a href="">
                <p class="fw-normal">Contact us</p>
              </a>
            </li>
            <li>
              <a href="">
                <p class="fw-normal">Payment Method</p>
              </a>
            </li>
            <li>
              <a href="">
                <p class="fw-normal">Mail List</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h5 class="fw-bolder">Find us on</h5>
          <!--social icons-->

          <div class="ion-icon">
            <a href="">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </div>
          <div class="payment">
            <img src="image\gcash.png" alt="">
            <img src="image\paymaya.PNG" alt="">
            <img src="image\paypal.png" alt="">
            <img src="image\cod.png" alt="">
          </div>
        </div>

      </div>

    </div>
    <div class="reserved">
      <p class="text-center">2022 Yoo-Naa All Right Reserved</p>
    </div>
  </div>

  <div class="space" style="margin-top: 7%" ;></div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("ul.navbar-nav > li > a").click(
        function(e) {
          $("ul.navbar-nav > li").removeClass(
            "active");
          $("ul.navbar-nav > li > a").css(
            "color", "white");

          $(this).css("color", "red");
        });
    });
    //disable right click
    $(document).bind("contextmenu", function(e) {
      return false;
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!--ionics icon-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script>
    AOS.init({
      duration: 300

    });
  </script>

</body>

</html>