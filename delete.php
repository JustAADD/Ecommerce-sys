<?php

use GuzzleHttp\Psr7\Query;

include_once('../SE/connection/connect.php');

if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  $query = "DELETE FROM customer_cart WHERE id='$id'";
  $query_run = mysqli_query($con, $query);
  if ($query_run == 1) {

    $sql = "DELETE FROM customer_orders WHERE id='$id'";

    if (mysqli_query($con, $sql)) {


      //echo "delete successfully";
      header('location:cart.php');
    }
  } else {
    die(mysqli_error($con));
  }
}




