<style>
    body{
        background-image:url(background/donarlist.jpg);
    }
    table
    {
        margin:auto;
    }

    table, th, td {
  border: 7px solid black;
  margin-top: 45px;
}
    th {
  background-color: #002400;
  color: white;
  padding: 9px;
  text-align: center;
  text-transform: uppercase;
}
    td{
        padding:5px;	
    }
    tr:nth-child(even) {background-color: #f2f2f2;text-align:center;}
    tr:nth-child(odd) {background-color: rgba(0,102,255,1);text-align:center;}
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
            <h2>"Donar List"</h2>
        </div>
        <div id="center_maker">
            <header>                
            </header>

            <?php
            session_start();

            $username = "root";
            $password = "";
            $database = "final";
            $servername = "localhost";
            $conn = mysqli_connect($servername, $username, $password, $database);
            $sql = "SELECT username,cnumber as phone_number,bgroup as blood_group FROM users";
          
            if ($result = $conn->query($sql)) {
                    $rows = $result->fetch_assoc();
                    $rows_keys = array_keys($rows);
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
             
            ?>
            
            <div class="link"><a href="index.html" color="red"><i>back to home</i></a></div>

    </body> 


</html>


