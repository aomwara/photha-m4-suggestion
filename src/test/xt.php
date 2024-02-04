<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<head>
<link rel="stylesheet" href="style.css" />
<title></title>

</head>
<body>
			
		<?php
    $qs1 = $_POST['question1'];
    $qs2 = $_POST['question2'];
    $qs3 = $_POST['question3'];

    $qs4 = $_POST['question4'];
    $qs5 = $_POST['question5'];
    $qs6 = $_POST['question6'];

    

	$sum1 = $qs1+$qs2+$qs3;
  $sum2 = $qs4+$qs5+$qs6;

    echo "$sum1 $sum2"
  
 
 ?>
            			
						
</body>
</html>