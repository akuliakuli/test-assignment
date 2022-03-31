<?php
    include  "includes/autoload.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name ="author" content = "me">
    <title>ScandiWeb test</title>
    <link rel ="stylesheet" href ="main.css">
</head>
<body>
    <header>
        <p>Product Add</p>
        <div class ="buttons">
              <button onclick="location.href ='index.php'" type ="button" >SAVE</button>
              <button>CANCEL</button>    
        </div>
</header>
<form id = "product-form">
    <div class ="input-menu">
        <p>SKU</p>
        <input type ="text" placeholder="#sku" id = "sku">
    </div>
    <div class ="input-menu">
        <p>Name</p>
        <input type ="text" placeholder="#name" id = "name">
    </div>
    <div class ="input-menu">
        <p>Price</p>
        <input type ="text" placeholder="#price" id = "price">
    </div>
    <div class ="input-menu">
    <p>Type Switcher</p>
    <select id = "product-type" data-placeholder ="Choose product type">
        <option>DVD</option>
        <option>Book</option>
        <option>Furniture</option>
    </select>
</div>
</form>
<footer>
    <p>Scandiweb Test assignment</p>
</footer>
</body>
</html>