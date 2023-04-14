<?php
       $conn = mysqli_connect("localhost","root","","scandiweb");
       if(!$conn){
        die('Connection Failed'.mysqli_connect_error());
       }
?>
<?php

function insertProducts($conn){

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
            VALUES('$sku','$name','$price $','$productType','Dimension: $height x $width x $lenght','$description')")
            or die ("Erro ao cadastrar produto!");

        header('location:index.php');
      }
}
function deleteProducts($conn){
       if(isset($_POST)){
              $count = count((array)$_POST['delete-checkbox']);
              $i = 0;
            
              while ($i<$count){
                  $deleteId =$_POST['delete-checkbox'][$i];
                  
                  $delete = mysqli_query($conn, "DELETE from product WHERE sku='$deleteId'")
                                                or die ("Error!!");
                                                
                                                ++$i; 
                                              }
                                              header('location:index.php');
                                          }
}
function histProducts($conn){
       $query = "SELECT * from product";
        $query_run = mysqli_query($conn, $query);
        
        echo "<form action='deleteProduct.php' method='post' class='container'>";
        if(mysqli_num_rows($query_run) > 0){
            foreach ($query_run as $data) {
                echo "<div class='products'>";
                echo "<input type='checkbox' name='delete-checkbox[]' class='delete-checkbox' value='$data[sku]'>";
                echo $data['sku'].'<br>';
                echo $data['name'].'<br>';
                echo $data['price'].'<br>';
                echo $data['info'].'<br>';
                echo "</div>";
            }
        }else{
            echo "<h1>No products found!</h1>";
        }
}

