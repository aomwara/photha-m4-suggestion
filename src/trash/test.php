<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "test.php" method = "post" name = "form1"><br><br>
        <input type = "text" name = "num1" id = "name" placeholder="Enter num"/><br><br>
        <input type = "text" name = "num2" id = "lastname" placeholder="Enter num"/><br><br>
        <input type = "password" name = "num3" id = "password" placeholder="Enter num"/> <br><br>
        <input type = "password" name = "num4" id = "cfpassword" placeholder="Enter num"/> <br><br>

          <label> <input type="submit" name = "submit" id = "submit" value = "Submit" />  </label> &nbsp;&nbsp;
          <label> <input type = "reset" name = "reset" id = "reset" value = "reset" />  </label></p>
    </form>

    <?php
    $number = $_POST["num1","num2","num3","num4"] ;
    rsort( $number );
    foreach( $number as $v ) {
        echo $v."<br/>";
    } 
    ?>

    
</body>
</html>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>