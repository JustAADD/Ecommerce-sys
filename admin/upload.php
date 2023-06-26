<?php
include_once 'connect.php';

//check if form submitted
if (isset($_POST[''])) {
  $img_name = $_FILES['glryimage']['name'];
  $Product = $_POST['Product'];
  $Stocks = $_POST['stocks'];

  //upload file
  if ($img_name != '') {
    $ext = pathinfo($img_name, PATHINFO_EXTENSION);
    $allowed = ['png', 'gif', 'jpg', 'jpeg'];

    function generateProductID()
    {

      $prefix = 'PRD-';
      $unique_id = uniqid();
      $product_id = $prefix . $unique_id;
      return $product_id;
    }

    $product_id = generateProductID();

    //check if it is valid image type
    if (in_array($ext, $allowed)) {
      $created = @date('Y-m-d H:i:s');

      // read image data into a variable for inserting
      $img_data = addslashes(file_get_contents($_FILES['glryimage']['tmp_name']));

      // insert image into mysql database
      $sql = "INSERT INTO product_stocks(product_id, product, imagedata, Stocks, date) VALUES('$product_id','$Product','$img_data','$Stocks','$created') ORDER BY product_id DESC LIMIT 1";
      mysqli_query($con, $sql) or die("Error " . mysqli_error($con));
      //header("Location: index.php?st=success");
      header("Location:admin-blog.php");
    } else {
      header("Location: index.php?st=error");
    }
  } else
    header("Location:admin\admin-view-stocks.php");
}
