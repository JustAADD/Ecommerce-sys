

<?php

include("connect.php");

$id = $_GET['updateid'];

$sql = "SELECT * FROM stock WHERE id=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);

$id = $row['id'];
$product = $row['Product'];
$imagedate = $row['imagedate'];
$Stock = $row['Stock'];
$date = $row['date'];
$number = 1;

if (isset($_POST['update'])) {

  $Stock = $_POST['Stock'];

  $sql = "UPDATE stock SET id='$id', Stocks='$Stocks' where id='$id'";

  $result = mysqli_query($con, $sql);
  if ($result) {

    //echo "Update Successfully";
    header('location: ../admin/admin-view-stocks.php');
  } else {
    die(mysqli_error($con));
  }
}
