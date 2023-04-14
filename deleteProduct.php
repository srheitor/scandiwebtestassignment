<?php
include "functions.inc.php";

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