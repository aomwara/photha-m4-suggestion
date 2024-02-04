
<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
<head>
<link rel="stylesheet" href="style.css" />
<title>Quiz</title>

</head>
<body>
  <table cellpadding="0" cellspacing="0" align="right">
    <tr>
     <td height="9"></td>
   </tr>
 <tr>


 
        <form action="tt.php" method="post">
       
            			<font color = #0f125f> 1.มีพื้นฐานความรู้ดี แล้วสนุกกับการเรียนวิชาวิทยาศาสตร์ ? </font><br><br>
						&nbsp&nbsp<input type="radio" name="score1" id="correct1" value="3" >มาก &nbsp&nbsp&nbsp
						<input type="radio" name="score1" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                        <input type="radio" name="score1" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
						<input type="radio" name="score1" id="correct4" value="0">น้อยที่สุด <br>
						<br>

						<font color = #0f125f> 2. มีความถนัดในการคิดคำนวณได้คล่อง ? </font><br><br>
						&nbsp&nbsp<input type="radio" name="score2" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
						<input type="radio" name="score2" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
            			<input type="radio" name="score2" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
						<input type="radio" name="score2" id="correct4" value="0">น้อยที่สุด <br>
						<br>
						
						<font color = #0f125f> 3.ช่างสังเกต ชอบศึกษาค้นคว้า ทดลอง วิเคราะห์ ? </font><br><br>
						&nbsp&nbsp<input type="radio" name="score3" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
						<input type="radio" name="score3" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
            			<input type="radio" name="score3" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
						<input type="radio" name="score3" id="correct4" value="0">น้อยที่สุด <br>
						<br>
						
						<br>

						<input type="submit" value="ถัดไป">
          </form>
		  </table>

				<?php
				session_start();
				$conn = new mysqli('localhost','root','12345678','punch');
				

				if($conn->connect_error){
					die("การเชื่อต่อมผิดพลาด :" . $conn->connect_error);
				}


				if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$score1 = $_POST['score1'];
					$score2 = $_POST['score2'];
					$score3 = $_POST['score3'];
					$socre_insert = "INSERT INTO quiz (point) VALUES ($score1, $score2, $score3)";
					
					
					if($conn->query($score_insert) === TRUE)
					{
						echo "บันทึกคะแนนสำเร็จแล้ว";
					}
					else
					{
						echo "เกิดข้อผิดพลาดในการบันทึกคะแนน";
					}
				}

				?>


	
</body>
</html>