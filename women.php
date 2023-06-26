<?php

session_start();
error_reporting(0);
include('../SE/connection/connect.php');

date_default_timezone_set('Asia/Manila');

/*
if (isset($_POST['add_to_cart'])) {

  $User = $_SESSION['fullname'];

  $product = $_POST['product'];
  $image = $_POST['image'];
  $prod_name = $_POST['name'];
  $size = $_POST['size'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  $total_price =  $price * $quantity;
  $total = $total_price;

  // Set the new timezone

  // $date = date('Y-m-d h:i:sa');
  $current_datetime = date('Y-m-d H:i:s');

  $query = "INSERT INTO customer_cart (User,image,prod_name,prod_size,quantity,srp_price,total,date_time) VALUES ('$User','$image','$prod_name','$size','$quantity','$price','$total','$current_datetime')";
  $query_run = mysqli_query($con, $query) or die(mysqli_error($con));

  if ($query_run == 1) {
    $sql = "INSERT INTO customer_orders (User,image,prod_name,prod_size,quantity,srp_price,total,date_time) VALUES ('$User','$image','$prod_name','$size','$quantity','$price','$total','$current_datetime')";
    $sql_run = mysqli_query($con, $sql) or die(mysqli_error($con));

    if ($sql_run == 1) {
      $success = "Thank you. Your order has been placed!";

      header("refresh:0.1;url=women.php");
    }
  } else {

    echo "There was a problem";
  }
}
?>


<?php */

include('../SE/connection/connect.php');

if (isset($_POST['submit'])) {

  $sql = "SELECT * FROM product_stocks where id = 1";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

      $id = $row['id'];
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];
      $quantity = "1";


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart (id, User, order_number, imagedata, product_name, price, quantity, total, date_time) VALUES ('$id', '$User','$product_id','$imagedata','$product_name','$price', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        //echo "inserted successfully";
      }
    }

    $result->close();
  }
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
  <link href="women.css" rel="stylesheet">

  <!-- OWL-Carousel-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--mobile responsive-->
  <style>
    .card-body h5 {
      font-size: 16px;
      text-align: center;

    }

    @media screen and (max-width: 768px) {

      #Card-Dress {
        display: flex;
        justify-content: center;
        margin: 0 auto;
      }

      .col {
        margin-bottom: 25px;
      }



    }
  </style>

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
      <a href="home.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <a class="navbar-brand" href="home.php">
          <img src="image\yoo-naa-logo.png" alt="Bootstrap" width="150" height="70">
        </a>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li class=" nav-link active"><a href="women.php">Women</a></li>
          <!--products-->
          <li><a href="#onsale">On sale</a></li>
          <li><a href="#collection">Collection</a></li>

          <li><a href="cart.php"><i class="bi bi-bag-check-fill"></i></a></li>
          <li><a href="index.php"><i class="bi bi-box-arrow-in-left"></i></a></li>
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
          <p>YOO-NAA brings the business into the modern era with its unique fashion designs and serve countries within less than a decade.
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

  <!-- ======= Coming Soon ======= -->
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../SE/image/scent.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Coming Soon</h5>

          </div>
        </div>
        <div class="carousel-item">
          <img src="../SE/image/hikaw.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>More Accessories Coming Soon</h5>

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- ======= Our Product ======= -->
  <div class="container-fluid" id="onsale">
    <div class="div mt-5" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
      <div class="container-fluid" id="our-product">
        <h2 class="text-center mb-5">YOO-NAA PRODUCT</h2>
      </div>
    </div>
  </div>
  <!--heading-->
  <div class="div" data-aos="fade-up" data-aos-duration="900" data-aos-once="false">
    <div class="container-fluid">
      <div class="nav" id="navPros">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Coordinates</button>
          <button class="nav-link" id="nav-tops-tab" data-bs-toggle="tab" data-bs-target="#nav-tops" type="button" role="tab" aria-controls="nav-tops" aria-selected="false">Tops</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pants</button>
          <button class="nav-link" id="nav-access-tab" data-bs-toggle="tab" data-bs-target="#nav-access" type="button" role="tab" aria-controls="nav-access" aria-selected="false">Accessories</button>
        </div>
      </div>

      <div class="tab-content mt-5" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '8'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
                      <img src="' . $row['imagedata']  . '"/>
                    ';
                    }

                    ?>
                    <input type="hidden" name="image" value="image\dresses\310679565_184492147472712_8153640185423997398_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 8";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Longsleve Crystal Rompers">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 8";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱350.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit1" class="btn btn-dark" name="submit1" id="submit1" value="submit1">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '9'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
  <img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image\dresses\310687356_184489220806338_4170087587406443507_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 9";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Knitted Tube Tops Rompers">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 9";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit2" class="btn btn-dark" name="submit2" id="submit2" value="submit2">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '29'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image\dresses\310687356_184489220806338_4170087587406443507_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 29";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Retro Lapel Crop Top Longsleeve">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 29";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit3" class="btn btn-dark" name="submit3" id="submit3" value="submit3">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '11'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image\dresses\310679565_184492147472712_8153640185423997398_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 11";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Longsleve Collared Crop Top">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 11";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱350.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit4" class="btn btn-dark" name="submit4" id="submit4" value="submit4">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


              <div class="space" style="margin-bottom: 5%" ;></div>

            </div>
          </div>
        </div>
        <!--end of tab1-->
        <div class="tab-pane fade" id="nav-tops" role="tabpanel" aria-labelledby="nav-tops-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '12'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/tops/310374635_184486067473320_7379843999602038446_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 12";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Sando Knitted Croptop">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 12";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱250.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit5" class="btn btn-dark" name="submit5" id="submit5" value="submit5">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '13'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image/tops/310449528_184484434140150_2732681622761583141_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 13";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Knitted Tube Tops">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 13";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit6" class="btn btn-dark" name="submit6" id="submit6" value="submit6">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '14'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image/tops/310478620_184484564140137_6763313513409337211_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 14";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Knitted Tube Tops">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 14";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit7" class="btn btn-dark" name="submit7" id="submit7" value="submit7">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '15'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/tops/310494105_184485390806721_3730371512551063325_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 15";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Halter Tops Backless">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 15";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱190.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit8" class="btn btn-dark" name="submit8" id="submit8" value="submit8">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


              <div class="space" style="margin-bottom: 5%" ;></div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '16'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/tops/310374635_184486067473320_7379843999602038446_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 16";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Sando Knitted Croptop">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 16";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit9" class="btn btn-dark" name="submit9" id="submit9" value="submit9">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '17'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image/tops/310449528_184484434140150_2732681622761583141_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 17";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Sando Knitted Croptop">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 17";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit10" class="btn btn-dark" name="submit10" id="submit10" value="submit10">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '18'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image/tops/310541192_184484557473471_7197611767225097614_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 18";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Knitted Tube Tops">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 18";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit11" class="btn btn-dark" name="submit11" id="submit11" value="submit11">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '20'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/tops/310550111_184484614140132_9088179355493191898_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 20";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Knitted Tube Tops">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 20";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱350.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit12" class="btn btn-dark" name="submit12" id="submit12" value="submit12">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>

        <!--PANTS-->
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '22'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image\dresses\310679565_184492147472712_8153640185423997398_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 22";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Beige Women Pants">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 22";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱350.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit13" class="btn btn-dark" name="submit13" id="submit13" value="submit13">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '23'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="product" value="image\dresses\310687356_184489220806338_4170087587406443507_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 23";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Knitted Women Pants">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 23";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit14" class="btn btn-dark" name="submit14" id="submit14" value="submit14">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '24'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 24";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Blues Woman Pants">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 24";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱350.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit15" class="btn btn-dark" name="submit15" id="submit15" value="submit15">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '25'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 25";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Rompers Woman Pants">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 25";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱350.00</p>
                        </div>
                        <select class="form-select" name="size" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Get your size</option>
                          <option value="small">Small</option>
                          <option value="medium">Medium</option>
                          <option value="large">Large</option>
                          <option value="xl">Xl</option>
                        </select>
                        <select class="form-select mb-2 mt-2" name="quantity" aria-label="Default select example">
                          <option selected style="font-size: 0px;">Quantity</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="3">4</option>
                          <option value="3">5</option>
                        </select>
                        <button type="submit16" class="btn btn-dark" name="submit16" id="submit16" value="submit16">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


              <div class="space" style="margin-bottom: 5%" ;></div>

            </div>
          </div>
        </div>

        <!--Accessories-->
        <div class="tab-pane fade" id="nav-access" role="tabpanel" aria-labelledby="nav-access-tab">

          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">

                    <?php

                    include('../SE/connection/connect.php');

                    $sql = "SELECT * FROM product_stocks where id = '1'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
                      <img src="' . $row['imagedata']  . '"/>
                    ';
                    }

                    ?>

                    <input type="hidden" name="image" value="image/earings/302156894_616400303226478_6309861678309026714_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center">
                        <?php

                        include('../SE/connection/connect.php');

                        $sql = "SELECT * FROM product_stocks WHERE id = 1";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {

                          echo "<h5>" . $row['product'] . "</h5>";
                        }

                        ?>

                      </p>

                      <input type="hidden" name="name" value="Butterfly Drop Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 1";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit17" class="btn btn-dark" name="submit17" id="submit17" value="submit17">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">

                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 2";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
                      <img src="' . $row['imagedata']  . '"/>
                      ';
                    }

                    ?>


                    <input type="hidden" name="product" value="image/earings/302159831_618211686378673_1331292202489018896_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center">
                        <?php

                        include('../SE/connection/connect.php');

                        $sql = "SELECT * FROM product_stocks WHERE id = 2";
                        $result = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {

                          echo "<h5>" . $row['product'] . "</h5>";
                        }

                        ?>
                      </p>
                      <input type="hidden" name="name" value="Marble Heart Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 2";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit18" class="btn btn-dark" name="submit18" id="submit18" value="submit18">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 3";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
  <img src="' . $row['imagedata']  . '"/>
  ';
                    }

                    ?>
                    <input type="hidden" name="product" value="image/earings/305453292_616400283226480_7652753860695016927_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"> <?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 3";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Starfish Drop Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 3";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit19" class="btn btn-dark" name="submit19" id="submit19" value="submit19">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 4";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/earings/305767448_618211666378675_3543428183208237423_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 4";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Golden Knot Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 4";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit20" class="btn btn-dark" name="submit20" id="submit20" value="submit20">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


              <div class="space" style="margin-bottom: 5%" ;></div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 5";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/earings/305933897_616361979896977_7696460573087726419_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 5";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Hoop Small Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 5";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit21" class="btn btn-dark" name="submit21" id="submit21" value="submit21">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 6";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/earings/306046315_616367433229765_5411157087427218520_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 6";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Flat Hoop Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 6";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit22" class="btn btn-dark" name="submit22" id="submit22" value="submit22">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 7";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/earings/306050476_616364499896725_8915391765681055240_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 7";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Pearl Hop Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 7";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit23" class="btn btn-dark" name="submit23" id="submit23" value="submit23">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col">
                <form action="women_insertquery.php" method="POST">
                  <div class="card" id="Card-Dress" style="width: 15rem;">
                    <?php

                    include('../SE/connection/connect.php');

                    $sql1 = "SELECT * FROM product_stocks where id = 21";
                    $result = mysqli_query($con, $sql1);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $row['id'];
                      $imagedata = $row['imagedata'];

                      echo '
<img src="' . $row['imagedata']  . '"/>
';
                    }

                    ?>
                    <input type="hidden" name="image" value="image/earings/306050741_616361993230309_7973811235143826940_n.jpg">
                    <div class="card-body">
                      <p class="card-text text-center"><?php

                                                        include('../SE/connection/connect.php');

                                                        $sql = "SELECT * FROM product_stocks WHERE id = 21";
                                                        $result = mysqli_query($con, $sql);

                                                        while ($row = mysqli_fetch_assoc($result)) {

                                                          echo "<h5>" . $row['product'] . "</h5>";
                                                        }

                                                        ?></p>
                      <input type="hidden" name="name" value="Hoop Big Earings">
                      <div class="row">
                        <div class="col">
                          <?php

                          include('../SE/connection/connect.php');

                          $sql = "SELECT * FROM product_stocks WHERE id = 21";
                          $result = mysqli_query($con, $sql);

                          while ($row = mysqli_fetch_assoc($result)) {

                            echo "<p> ₱" . $row['price'] . ".00</p>";
                          }

                          ?>
                          <input type="hidden" name="price" value="149">
                        </div>
                        <div class="col" id="Discounted-Price">
                          <p class="text-decoration-line-through">₱200.00</p>
                        </div>
                        <button type="submit24" class="btn btn-dark" name="submit24" id="submit24" value="submit24">
                          Add to Cart
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


            </div>
          </div>
        </div>
        <!--end of tab4-->

      </div>
    </div>

    <div class="space" style="margin-top: 5%" ;></div>
    <?php

    if (isset($_POST['sobmit'])) {

      $user = $_SESSION['fullname'];
      $feedback = $_POST['feedback'];

      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $query = "INSERT INTO customer_feedback (user,feedback,date_time) VALUES ('$user','$feedback','$date_time')";
      $query_run = mysqli_query($con, $query) or die(mysqli_error($con));

      if ($query_run) {

        header("refresh:0.1;url=women.php");
      }
    }

    ?>

    <div class="container" id="contaner">
      <p class="text-center">You can send a feedback to us! Thank you!
      </p>
      <!--email-->
      <!--form method here-->
        <form action="women.php" method="POST">
          <div class="mb-3" #form>
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="feedback" name="feedback"  class="form-control" id="exampleFormControlInput1" placeholder="Send a Feedback">
          </div>
          <!--form method here-->
          <button type="sobmit" id="Submit-Button" name="sobmit" class="btn btn-dark">Submit</button>

        </form>
      </div>
    </div>

    <div class="space" style="margin-top: 5%" ;></div>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="home.html" class="logo d-flex align-items-center">
              <span>YOO-NAA</span>
            </a>
            <p>Aims to be the best online shopping experience that approaches to meet customers even if they are on mobile, online, and social media by offering a variety of content streams within the Yoo-Naa platform website.</p>
            <div class="social-links d-flex mt-4">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/yoonaafashion" class="facebook"><i class="bi bi-facebook"></i></a>
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