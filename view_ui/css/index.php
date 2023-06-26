<?php
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['fullname'])){
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yoo-Naa Fashion Design Store</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="image\yoo-naa-logo.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- OWL-Carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">yoonaafashion@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+639 165 1217</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <a class="navbar-brand" href="index.php">
          <img src="image\yoo-naa-logo.png" alt="Bootstrap" width="150" height="70">
        </a>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-link active"><a href="index.php">Home</a></li>
          <li><a href="women.php">Women</a></li>
          <!--products-->
          <li><a href="#onsale">On sale</a></li>
          <li><a href="#collection">Collection</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="cart.php"><i class="bi bi-bag-check-fill"></i></a></li>
          <li><a href="regis.php"><i class="bi bi-box-arrow-in-left"></i></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h5 style="color: white;">Hello, <?php echo $_SESSION['fullname']; ?></h5>
          <h2>Welcome to <span>Yoo-naa</span></h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
            <a href="https://fb.watch/hAfqCT8Y-g/" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
        </div>

        <!--header image-->
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="image\header.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>


    <!--icon boxess-->
    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bag-heart"></i></div>
              <h5 class="title"><a href="" class="stretched-link">Dresses</a></h5>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-balloon-heart"></i></div>
              <h5 class="title"><a href="" class="stretched-link">Tops</a></h5>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-box2-heart"></i></div>
              <h5 class="title"><a href="" class="stretched-link">Coordinates</a></h5>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h5 class="title"><a href="" class="stretched-link">Accessories</a></h5>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>

  <!-- ======= Our Product ======= -->
  <div class="container-fluid" id="onsale">
    <div class="div mt-5" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
      <div class="container-fluid" id="our-product">
        <h2 class="text-center mb-5">OUR PRODUCT</h2>
      </div>
    </div>
  </div>
  <!--heading-->
  <div class="div" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
    <div class="container-fluid">
      <div class="nav" id="navPro">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-Hot-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">On Sale</button>
          <button class="nav-link" id="nav-Trending-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Trending Now</button>
          <button class="nav-link" id="nav-new-arrival" data-bs-toggle="tab" data-bs-target="#nav-new-arrival" type="button" role="tab" aria-controls="nav-new-arrival" aria-selected="false">New Arrival</button>
        </div>
      </div>

      <div class="tab-content mt-5" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\tops\310374635_184486067473320_7379843999602038446_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Sando Knitted CropTop</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\tops\310449528_184484434140150_2732681622761583141_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Knitted Tube Tops</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\tops\310478620_184484564140137_6763313513409337211_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Knitted Tube Tops</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\tops\310559998_184484600806800_6913950382708123394_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Knitted Tube Tops</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="space" style="margin-bottom: 5%" ;></div>

              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\earings\302156894_616400303226478_6309861678309026714_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Butterfly Drop Earings</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\earings\302159831_618211686378673_1331292202489018896_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Golden Knot Earings</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\earings\306605717_617422816457560_9141199782628022573_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Starfish Earings</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card" id="Card-Dress" style="width: 15rem;">
                  <img src="image\earings\305453292_616400283226480_7652753860695016927_n.jpg" class="card-img-top" alt="...">
                  <!-- Button trigger-->
                  <button type="button" class="boton btn-dark" data-bs-toggle="modal" data-bs-target="#Modal1">
                    Add to Cart
                  </button>
                  <div class="card-body">
                    <p class="card-text text-center">Round Hallow Earings</p>
                    <div class="row">
                      <div class="col">
                        <p class="fw-light">₱149.00</p>
                      </div>
                      <div class="col" id="Discounted-Price">
                        <p class="text-decoration-line-through">₱200.00</p>
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
            ...
          </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>

      </div>
    </div>
  </div>

  <!-- ======= Owl Carousel ======= -->
  <div class="space" style="margin-top: 10%" ;></div>

  <div class="div" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
    <div class="container-fluid" id="carousel-container">
      <div class="row" id="raw">
        <div class="col" id="panguna">
          <h1 class="text-start">Best Seller <br> Product</h1>
          <p class="text-start">See your favorite pieces to love <br> and layer well into next year! </p>
          <div class="d-grid gap-1 col-6 mx-auto">
            <button class="btn btn-primary" type="button">See more</button>
          </div>
        </div>
        <div class="col-lg-8" id="pangalawa">
          <div class="owl-carousel owl-theme">
            <div class="card" style="width: 18rem;">
              <img src="image\dresses\310687356_184489220806338_4170087587406443507_n.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Sleeveless Knitted Tops</h5>
                <p class="card-text">₱139.00 only</p>
                <a href="#" class="btn btn-dark">Quick View</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="image\earings\305453292_616400283226480_7652753860695016927_n.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Butterfly Drop earings</h5>
                <p class="card-text">₱149.00 only</p>
                <a href="#" class="btn btn-dark">Quick View</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="image\longsleeve\310637524_184486727473254_8142072373575273473_n.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Retro Lapel Longsleeve</h5>
                <p class="card-text">₱159.00 only</p>
                <a href="#" class="btn btn-dark">Quick View</a>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="image\tops\310541192_184484557473471_7197611767225097614_n.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Knitted Tube Tops</h5>
                <p class="card-text">₱149.00 only</p>
                <a href="#" class="btn btn-dark">Quick View</a>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <!--owl-carousel-->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="text/javascript">
    $('.owl-carousel').owlCarousel({
      loop: true,
      nav: true,
      autoplay: true,
      dots: true,
      autoplayTimeout: 2000,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 3
        },
        1000: {
          items: 3
        }
      }
    });
  </script>



  <!-- ======= Collection ======= -->
  <section id="collection" class="collection">
    <div class="container mt-5">
      <div class="row" id="discount">
        <div class="col" id="discount-in">
          <a href="dresses.html">
            <h3 class="text-center">₱150.00 OFF</h3>
            <p class="text-center">ON ORDERS OF 10+</p>
          </a>
        </div>
        <div class="col" id="discount-in">
          <a href="dresses.html">
            <h3 class="text-center">₱250.00 OFF</h3>
            <p class="text-center">ON ORDERS OF 15+</p>
          </a>
        </div>
        <div class="col" id="discount-in">
          <a href="dresses.html">
            <h3 class="text-center">₱450.00 OFF</h3>
            <p class="text-center">ON ORDERS OF 20+</p>
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

    <div class="container" id="styleGallery">
      <h2 class="text-center mt-5">STYLE GALLERY</h2>
      <div class="row row-cols-3" id="#gallery">
        <div class="parent" id="main-galle">
          <div class="child bg-one">
            <p></p>
          </div>
        </div>
        <div class="parent" id="main-galle-1">
          <div class="child bg-two">
            <p></p>
          </div>
        </div>
        <div class="parent" id="main-galle-2">
          <div class="child bg-three">
            <p></p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <div class="space" style="margin-top: 5%" ;></div>

  <div class="container" id="contaner">
    <p class="text-center">Sign up to get advance notice of our sales and other events. We Email you often.
    </p>
    <!--email-->
    <!--form method here-->
    <div class="mb-3" #form>
      <label for="exampleFormControlInput1" class="form-label"></label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Join our mailing list">
    </div>
    <!--form method here-->
    <button type="button" id="Submit-Button" class="btn btn-dark">Submit</button>
  </div>

  <div class="space" style="margin-top: 5%" ;></div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>About</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
            valies darta
            donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Products</a></li>
            <li><a href="#">Collection</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Team</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            2151, C raymundo <br>
            Pasig City<br>
            Manila Philippines <br><br>
            <strong>Phone:</strong> +639 165 1217<br>
            <strong>Email:</strong> yoonaafashion@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Yoo-naa</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
      header("location:index.php");
      exit();

?>