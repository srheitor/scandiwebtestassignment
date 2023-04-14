<?php
include "functions.inc.php";


       $sku = $_POST['sku'];
       $name = $_POST['name'];
       $price = $_POST['price'];
       $productType = $_POST['productType'];
       $description = $_POST['description'];
       
      if ($productType == 'DVD-Disc'){
       $size = $_POST['size'];
        $query = mysqli_query($conn, "INSERT INTO product(SKU,name,price,productType,info,description)
            VALUES('$sku','$name','$price','$productType','Size: $size MB','$description')")
            or die ("Erro ao cadastrar produto!");

            header('location:index.php');

      }else if($productType == 'Book'){
       $weight = $_POST['weight'];

        $query = mysqli_query($conn, "INSERT INTO product(SKU,name,price,productType,info,description)
        VALUES('$sku','$name','$price','$productType','Weight: $weight KG','$description')")
        or die ("Erro ao cadastrar produto!");

        header('location:index.php');

      }else if($productType == 'Furniture'){
       $height = $_POST['height'];
       $width = $_POST['width'];
       $lenght = $_POST['lenght'];

          $query = mysqli_query($conn, "INSERT INTO product(SKU,name,price,productType,info,description)
            VALUES('$sku','$name','$price','$productType','Dimension: $height x $width x $lenght','$description')")
            or die ("Erro ao cadastrar produto!");

        header('location:index.php');
      }
