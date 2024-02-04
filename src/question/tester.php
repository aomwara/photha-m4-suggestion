<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<head>
<link rel="stylesheet" href="style.css" />
<title>Quiz</title>

</head>
<body>

	<form action="q11.php" method="POST">
		<b>เลือกตัวอักษร</b><br/>
		<input type="radio" value="A" name="word"> A<br/>
		<input type="radio" value="B" name="word"> B<br/>
		<input type="radio" value="C" name="word"> C<br/>
		<input type="submit" value="บันทึกข้อมูล">
	</form>

	<?php
    isset( $_POST['word'] ) ? $word = $_POST['word'] : $word = "";
    if( !empty( $word ) ) {
        $conn = mysqli_connect( "localhost", "root", "punch", "12345678" );
        mysqli_query( $conn, "SET NAMES UTF8" );

        $sql = " INSERT INTO words ( name ) VALUES ( '{$word}' ) ";
        $q = mysqli_query( $conn, $sql );
        if( $q ) {
            echo "<div style='margin-top:.5rem;'>เก็บค่า Radio ลงฐานข้อมูลเรียบร้อย</div>";
        }
        mysqli_close( $conn );
    }
?>

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

</body>
</html>







<?php
    $qs1 = $_POST[question1];
    $qs2 = $_POST[question2];
    $qs3 = $_POST[question3];
    $qs4 = $_POST[question4];
    $qs5 = $_POST[question5];
    $qs6 = $_POST[question6];
    $qs7 = $_POST[question7];
    $qs8 = $_POST[question8];
    $qs9 = $_POST[question9];
    $qs10 = $_POST[question10];
    $qs11 = $_POST[question11];
    $qs12 = $_POST[question12];

	  $qs13 = $_POST[question13];
    $qs14 = $_POST[question14];
    $qs15 = $_POST[question15];
    $qs16 = $_POST[question16];
    $qs17 = $_POST[question17];
    $qs18 = $_POST[question18];
    $qs19 = $_POST[question19];
    $qs20 = $_POST[question20];
    $qs21 = $_POST[question21];
    $qs22 = $_POST[question22];
    $qs23 = $_POST[question23];
    $qs24 = $_POST[question24];

    $qs25 = $_POST[question25];
    $qs26 = $_POST[question26];
    $qs27 = $_POST[question27];
    $qs28 = $_POST[question28];
    $qs29 = $_POST[question29];
    $qs30 = $_POST[question30];
    $qs31 = $_POST[question31];
    $qs32 = $_POST[question32];
    $qs33 = $_POST[question33];
    $qs34 = $_POST[question34];
    $qs35 = $_POST[question35];
    $qs36 = $_POST[question36];

	$qs37 = $_POST[question37];
	$qs38 = $_POST[question38];
	$qs39 = $_POST[question39];
	$qs40 = $_POST[question40];
	$qs41 = $_POST[question41];
	$qs42 = $_POST[question42];
	$qs43 = $_POST[question43];
	$qs44 = $_POST[question44];
	$qs45 = $_POST[question45];
	$qs46 = $_POST[question46];
	$qs47 = $_POST[question47];
	$qs48 = $_POST[question48];

  $qs49 = $_POST[question49];
  $qs50 = $_POST[question50];
  $qs51 = $_POST[question51];
  $qs52 = $_POST[question52];
  $qs53 = $_POST[question53];
  $qs54 = $_POST[question54];
  $qs55 = $_POST[question55];
  $qs56 = $_POST[question56];
  $qs57 = $_POST[question57];
  $qs58 = $_POST[question58];
  $qs59 = $_POST[question59];
  $qs60 = $_POST[question60];


    

	$sum1 = $qs1+$qs2+$qs3+$qs4+$qs5+$qs6+$qs7+$qs8+$qs9+$qs10+$qs11+$qs12;
	$sum2 = $qs13+$qs14+$qs15+$qs16+$qs17+$qs18+$qs19+$qs20+$qs21+$qs22+$qs23+$qs24;
	$sum3 = $qs25+$qs26+$qs27+$qs28+$qs29+$qs30+$qs31+$qs32+$qs33+$qs34+$qs35+$qs36;
	$sum4 = $qs37+$qs38+$qs39+$qs40+$qs41+$qs42+$qs43+$qs44+$qs45+$qs46+$qs47+$qs48;
	$sum5 = $qs49+$qs50+$qs51+$qs52+$qs53+$qs54+$qs55+$qs56+$qs57+$qs58+$qs59+$qs60;

    echo "$sum1 $sum2 $sum3 $sum4 $sum5"
  
 
 ?>