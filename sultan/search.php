<style>
    body{
        background-image:url(background/search.jpg);
    }
    table
    {
        margin:auto;
    }

   table, th, td {
  border: 5px solid #355800;
}
    th {
        text-transform:uppercase;
        padding:10px;
        background-color: #4CAF80;
        color: white;
        text-align:center;
    }
    td{
        padding:5px;	
    }
    tr:nth-child(even) {background-color: #f2f2f2;text-align:center;}
    tr:nth-child(2n+1) {
  background-color: #efffef;
  text-align: center;
}
</style>




<!DOCTYPE HTML>


<html>
    <head>
        <title>Donar List</title> 
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="headersection template clear">
            <p><img src="image/pstu.jpg" height="160" width="150" alt="upload image"></p>
            <h2>PSTU BLOOD BANK</h2>
            <h2>"Search for Donor"</h2>
        </div>
        <div id="center_maker">
            <header>                
            </header>
            
            <form action="search.php" method="post"> 
                <table>
                <tr>
                    <td>Enter blood group: </td>
                    <td> <input type="text" name="bgroup" class="textInput" autofocus="autofocus" > </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" name="submit" value="search" class="textInput"> </td>
                </tr>
                </table>

            </form>

            <?php
            session_start();
            if (isset($_POST['submit'])) {
            $username = "root";
            $password = "";
            $database = "final";
            $servername = "localhost";
            $bgroup=mysql_real_escape_string($_POST['bgroup']);
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT username AS Name,cnumber AS Phone_Number,bgroup FROM users where bgroup='$bgroup'";
          
            if ($result = $conn->query($sql)) {
                    $rows = $result->fetch_assoc();
                    //$rows_keys = array_keys($rows);
                    echo "<table > ";
                    foreach ($rows as $x => $x_value)
                        echo "<th>" . $x . "</th>";
                    for ($i = 1; $i <= $result->num_rows; $i++) {

                        echo "<tr>";
                        foreach ($rows as $x => $x_value) {
                            echo "<td>" . $x_value . "</td>";
                        }
                        echo "</tr>";
                        $rows = $result->fetch_assoc();
                    }

                    echo "</table>";
                }
            }
             
            ?>
            
            <div class="link"><center><a href="index.html"><i>back to home</i></a><div>

    </body> 


</html>




