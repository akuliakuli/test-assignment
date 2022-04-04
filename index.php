<?php
    include  "includes/autoload.inc.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name ="author" content = "me">
    <title>OOP PHP</title>
    <link rel ="stylesheet" href ="main.css">
</head>
<body>
    <header>
            <p>Product List</p>
            <div class ="buttons">
                  <button onclick="location.href ='add.php'" type ="button">ADD</button>
                  <button>MASS DELETE</button>    
            </div>
    </header>
<main>
    <?php 
        $a = new View();
        $a->showItems(0);
    ?>
</main>
<footer>
    <p>OOP PHP</p>
</footer>
<script defer src ="script.js"></script>
</body>
</html>