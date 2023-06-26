<?php 
  
  include_once('../admin/connect.php');

  if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $query="DELETE FROM product_stocks WHERE id='$id'";
    $query_run=mysqli_query($con,$query);
    if ($query_run){
      
      header('location:../admin/admin-blog.php');

    }else{
        die(mysqli_error($con));
    }
  }
?>