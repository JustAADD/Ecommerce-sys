<?php
session_start();
include('../SE/connection/connect.php');

if (isset($_POST['submit1'])) {

  $sql = "SELECT * FROM product_stocks where id = 8";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $stocks = $row['Stocks'];
      $total = $row['price'];

      $size = $_POST['size'];

      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart (User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total', '$date_time')";
      $con->query($sql);

      if ($con) {
        
        $newStocks = $stocks - $quantity;
        $updateQuery = "UPDATE product_stocks SET Stocks = '$newStocks' WHERE id = '8'";
        if(mysqli_query($con, $updateQuery )){

          header("refresh:0.1;url=women.php");
        }

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit2'])) {

  $sql = "SELECT * FROM product_stocks where id = 9";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart (User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit3'])) {

  $sql = "SELECT * FROM product_stocks where id = 29";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];


      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit4'])) {

  $sql = "SELECT * FROM product_stocks where id = 11";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

     
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit5'])) {

  $sql = "SELECT * FROM product_stocks where id = 12";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];


      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit6'])) {

  $sql = "SELECT * FROM product_stocks where id = 13";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

   
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit7'])) {

  $sql = "SELECT * FROM product_stocks where id = 14";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

    
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart (User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit8'])) {

  $sql = "SELECT * FROM product_stocks where id = 15";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

    
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit9'])) {

  $sql = "SELECT * FROM product_stocks where id = 16";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

    
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit10'])) {

  $sql = "SELECT * FROM product_stocks where id = 17";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

     
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit11'])) {

  $sql = "SELECT * FROM product_stocks where id = 18";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

      
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit12'])) {

  $sql = "SELECT * FROM product_stocks where id = 20";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

 
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit13'])) {

  $sql = "SELECT * FROM product_stocks where id = 22";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

      
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit14'])) {

  $sql = "SELECT * FROM product_stocks where id = 23";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

    
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit15'])) {

  $sql = "SELECT * FROM product_stocks where id = 24";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

     
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit16'])) {

  $sql = "SELECT * FROM product_stocks where id = 25";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

   
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit17'])) {

  $sql = "SELECT * FROM product_stocks where id = 1";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit18'])) {

  $sql = "SELECT * FROM product_stocks where id = 2";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];


      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit19'])) {

  $sql = "SELECT * FROM product_stocks where id = 3";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

     
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}
if (isset($_POST['submit20'])) {

  $sql = "SELECT * FROM product_stocks where id = 4";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

  
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart (User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit21'])) {

  $sql = "SELECT * FROM product_stocks where id = 5";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];


      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit22'])) {

  $sql = "SELECT * FROM product_stocks where id = 6";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];


      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart (User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit23'])) {

  $sql = "SELECT * FROM product_stocks where id = 7";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];


      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ( '$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}

if (isset($_POST['submit24'])) {

  $sql = "SELECT * FROM product_stocks where id = 21";
  $result = $con->query($sql);

  if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      $User = $_SESSION['fullname'];

 
      $product_id = $row['product_id'];
      $product_name = $row['product'];
      $imagedata = $row['imagedata'];
      $price = $row['price'];
      $total = $row['price'];
      

      $size = $_POST['size'];
      $quantity = $_POST['quantity'];


      $date = new DateTime('now', new DateTimeZone('UTC'));
      $date->setTimezone(new DateTimeZone('Asia/Manila'));
      $date_time = date("Y-m-d h:i:s A");

      $sql = "INSERT INTO customer_cart ( User, order_number, imagedata, product_name, price, size, quantity, total, date_time) VALUES ('$User','$product_id','$imagedata','$product_name','$price', '$size', '$quantity','$total',  '$date_time')";
      $con->query($sql);

      if ($con) {

        header("refresh:0.1;url=women.php");
        //echo "inserted successfully";
      }
    }

    $result->close();
  }
}


