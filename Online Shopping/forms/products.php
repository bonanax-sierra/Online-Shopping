<!DOCTYPE html>
<html>
    <title>My Products</title>
<body>

    <?php

    include 'header.html';

    echo "<h1>Your Products</h1>";

    if(isset($_POST["netflix"]) && isset($_POST["spotify"]) && isset($_POST["canva"])) {
        $netflix = $_POST["netflix"];
        $spotify = $_POST["spotify"];
        $canva = $_POST["canva"];


        echo "Netlifx: " . $netflix . "<br>";
        echo "Spotify: " . $spotify . "<br>" ; 
        echo "Canva:" . $canva . "<br>";
 
    }
    ?>

<form action="checkout.php" method="post">
    <button type="submit" name="confirm" value="Confirm">Confirm</button>
</form>
    
</body>
</html>