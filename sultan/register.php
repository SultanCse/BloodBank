<style>
    body{
        background-image:url(background/registration.jpg);
    }
    table {
        margin: 45px auto auto;
    }


    th {
        text-transform:uppercase;
        padding:10px;
        color: white;
        text-align:center;
    }
    td{
        padding:5px;	
    }
    tr:nth-child(2n) {
        background-color: #ff9900;
        color: #000000;
        font-style: italic;
        text-align: center;
    }
    tr:nth-child(2n+1) {
        background: #ace600 none repeat scroll 0 0;
        text-align: center;
    }
</style>

<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "final");

if (isset($_POST['register_btn'])) {

    // session_start();

    $username = mysql_real_escape_string($_POST['username']);
    $email = mysql_real_escape_string($_POST['email']);
    $bgroup = mysql_real_escape_string($_POST['bgroup']);
    $age = mysql_real_escape_string($_POST['age']);
    $cnumber = mysql_real_escape_string($_POST['cnumber']);
    $password = mysql_real_escape_string($_POST['password']);
    $password2 = mysql_real_escape_string($_POST['password2']);

    if (!empty($username) && !empty($password)) {
        if ($password == $password2) {

            // Create User
            $password = md5($password); // Hash Password Before Storing For Security Puspose
            $sql = "INSERT INTO users(username, email,bgroup,age,cnumber,password) VALUES('$username', '$email','$bgroup','$age','$cnumber', '$password')";

            mysqli_query($db, $sql);

            $_SESSION['message'] = "You Are Now Logged In.";
            $_SESSION['username'] = $username;

            header("location:profile.php"); // Redirect To Home Page
        } else {
            $_SESSION['message'] = "Password Don't Match !";
        }
    } else {
        $_SESSION['message'] = "You Need To FillUp The Form First !";
    }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title> REGISTER </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
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
        <form method="post" action="register.php">
            <table>
                <tr>
                    <td> Username : </td>
                    <td> <input type="text" name="username" class="textInput" autofocus="autofocus"> </td>
                </tr>
                <tr>
                    <td> Email : </td>
                    <td> <input type="email" name="email" class="textInput"> </td>
                </tr>
                <tr>
                    <td>Blood Group : </td>
                    <td> <input type="text" name="bgroup" class="textInput"> </td>
                </tr>
                <tr>
                    <td>Age : </td>
                    <td> <input type="number" name="age" class="textInput"> </td>
                </tr>
                <tr>
                    <td>Contact Number : </td>
                    <td> <input type="number" name="cnumber" class="textInput"> </td>
                </tr>
                <tr>
                    <td> Password : </td>
                    <td> <input type="password" name="password" class="textInput"> </td>
                </tr>
                <tr>
                    <td> Password Again : </td>
                    <td> <input type="password" name="password2" class="textInput"> </td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input type="submit" name="register_btn" value="Register"> </td>
                </tr>
            </table>  
        </form>
        <div class="link">
        <a href="login.php"> Sign In </a> <br>
        <a href="forget.php"> Forget Password </a><br>
        <a href="index.html"><i>back to home</i></a>
        </div>
    </body>
</html>