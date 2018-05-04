<?php
session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <title> HOME </title>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body background="image/background2.png">
        <div class="headersection template clear">
            <p><img src="image/pstu.jpg" height="160" width="150" alt="upload image"></p>
            <h2>PSTU BLOOD BANK</h2>
            <h2>"registration form"</h2>
        </div>

        <?php
        if (isset($_SESSION['message'])) {
            echo "<div id='error_msg'>" . $_SESSION['message'] . "</div>";
            unset($_SESSION['message']);
        }
        ?> 
        <br><br><br><br>
    <center><h1>WELCOME HOME </h1>
        <div><br>
            <h4> <?php echo $_SESSION['username']; ?> </h4>
        </div><br><br><br><br><br><br>
        <a href="logout.php"> Logout </a><br><br>
        <a href="index.html"><i>back to home</i></a></center>
</body>
</html> 