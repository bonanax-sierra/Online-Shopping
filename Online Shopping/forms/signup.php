<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    include 'header.html';
?>

        <form method="POST" action="login.html">
            <h1>Please fill up the forms below</h1>
        <input type="text" name="email" placeholder="Email" required>
        <br>
        <br>
        <input type="text" name="fname" placeholder="First Name" required />
        <br />
        <br>
        <input type="text" name="lname" placeholder="Last Name" required>
        <br>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <br>
        <input type="password" name="confirm" placeholder="Confirm Passowrd" required>
        <br>
        <br>
        <input type="tel" name="contactnumber" placeholder="Phone Number" required>
        <br>
        <br>
        <div class="rad1">
            <label for="gender">Select your Gender: </label>
            <br>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
        </div>
        <br>
        <button>Cancel</button>
        <button>Submit</button>
        <br>
        <br>
        </form>
        <div class="hyperlink">
            <a href="https://www.facebook.com/">
                <button>Connect with Facebook</button>
            </a>
            <a href="https://twitter.com/home?lang=en">
                <button>Connect with Twitter</button>
        </div>
</body>
</html>