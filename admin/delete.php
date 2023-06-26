<?php 
  
  include_once('../admin/connect.php');

  if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $query="DELETE FROM customer_details WHERE id='$id'";
    $query_run=mysqli_query($con,$query);
    if ($query_run){
      
      header('location:../admin/admin-customers.php');

    }else{
        die(mysqli_error($con));
    }
  }

  if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $query="DELETE FROM customer_order_history WHERE id='$id'";
    $query_run=mysqli_query($con,$query);
    if ($query_run){
      
      header('location:../admin/admin-orders.php');

    }else{
        die(mysqli_error($con));
    }
  }
?>