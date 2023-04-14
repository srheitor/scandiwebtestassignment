<?php
 include "functions.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="app.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <h1>Product List</h1>
    </div>
    <div class="line"></div>

    <div class="container">
    <?php
        include_once dirname(__FILE__) . (histProducts($conn))
        ?>
            </div>
        <div class="buttons">
            <Button name='MASS DELETE' type='submit' value='MASS DELETE'>MASS DELETE</Button>
            </form>
            <Button onclick="redirectNewProduct()">Add</Button>
        </div>

    <div class="line"></div>
    <div class="footer">
        <h3>Scandiweb Test Assignment</h3>
    </div>
</body>
</html>