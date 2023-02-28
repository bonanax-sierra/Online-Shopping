<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
        font-family: sans-serif;
        background-color: #B2AC88;
        margin: 0;
        padding: 0;
    }
    fieldset {
        height: 50%;
        width: 25%;
        text-align: center;
        margin: auto;
        table-layout: center;
        background-color: #D3D3D3;
        border: 0;
    }
</style>
</head>
<body>

<?php 
    include 'header.html'
?>
    <form action="homepage.php" method="post">
        <fieldset>
            <h1>Please Login Your Account</h1>
            <input type="text" name="username" placeholder="Username" required />
            <br />
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <br>
            <input type="submit" value="Submit">
            <br>
            <label>
                <input type="checkbox" checked="checkbox" name="remember" 
                style="margin-bottom: 15px;"> Remember me
            </label>
            
            <br>
            <p>By Creating an Account you agree to our <a href="termandpolicy.html"
                style="color: blue;">Terms and Policy</a></p>
            <a href="forgotps.html">Forgot Password?</a>
        </fieldset>
    </form>
</body>
</html>