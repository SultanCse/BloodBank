<style>
    body{
        background-image:url(background/login.jpg);
    }
    table
    {
        margin:auto;
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
    tr:nth-child(even) {background-color: #fff;text-align:center;}
    tr:nth-child(odd) {background-color: #fff;text-align:center;}
</style>

<?php
    session_start();

    $db = mysqli_connect("localhost", "root", "", "final");

    if (isset($_POST['login_btn'])) {
        
       // session_start();
        
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);
        
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $sql);
        
    if (mysqli_num_rows($result) == 1){
        
        $_SESSION['message'] = "You Are Now Logged In.";
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        
        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "Username/Password Incorrect !";
        header("location: home.php");
    }
  }
?>


<!DOCTYPE html>
<html>
        <head>
                <title> SIGN UP </title>
                <link rel="stylesheet" type="text/css" href="style.css">
        </head>
    <body>
        <div class="headersection template clear">
            <p><img src="image/pstu.jpg" height="160" width="150" alt="upload image"></p>
            <h2>PSTU BLOOD BANK</h2>
            <h2>"Login form"</h2>
        </div>
<?php
    if (isset($_SESSION['message'])){
        
            echo "<div id='error_msg'>".$_SESSION['message']."</div>";
            unset($_SESSION['message']);
    }
?>
       <form method="post" action="login.php">
            <table>
                <tr>
                    <td> Username : </td>
                    <td> <input type="text" name="username" class="textInput" autofocus="autofocus"> </td>
                </tr>
                <tr>
                    <td> Password : </td>
                    <td> <input type="password" name="password" class="textInput" ></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> <input type="submit" name="login_btn" value="Login"> </td>
                </tr>
           </table>
           <div class="link">
               <a href="index.html">home</a><br>
               <a href="register.php"> Sign Up </a><br>
               <a href="forget.php"> Forget Password </a> </div>
       </form>
    </body>
</html>