<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naori</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="icon" type="image/x-icon" href="pictures/na.png">
</head>
<body>

<?php
    include 'header.html';
?>
    <h1>Products</h1>
    <form method="post" action="products.php">
        <!-- Search Bar -->
        <div class="searchbar">
            <input type="text" placeholder="Search" name="search..">
            <button type="submit"><i class="fa fa-search">Search..</i></button>
         </div>
         <br><br>

         <div class="container">
            <div class="nf.container">
                <nav>
                    <a href="">Netflix</a>
                </nav>
                <a href=""><img src="pictures/img1.webp" alt="netflix"></a>
                <label for="quantity">Quantity: </label>
                <input type="number" id="quantity" name="netflix" min="1" max="3">
            </div>

            <div class="spoti.container">
                <nav>
                    <a href="">Spotify</a>
                </nav>
                <img class="image" src="pictures/img2.jpg" alt="Canva">
                <label for="quantity">Quantity: </label>
                <input type="number" id="quantity" name="spotify" min="1" max="3">
            </div>

            <div class="canva.container">
                <nav>
                    <a href="">Canva</a>
                </nav>
                <img class="image" src="pictures/img3.webp" alt="Spotify">
                <label for="quantity">Quantity: </label>
                <input type="number" id="quantity" name="canva" min="1" max="3">
            </div>
        </div>
    </form>

    <?php 
        include 'footer.html';
    ?>
</body>
</html>