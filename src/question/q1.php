<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" href="style.css" />
    <title>Quiz</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <?php
    if ($_SESSION['user_id'] == null) {
        echo "<h3>กรุณาเข้าสู่ระบบก่อนทำแบบทดสอบ</h3>";
        exit();
    } ?>

    <?php
    require_once '../libs/connect-db.php';
    $stmtq = $conn->prepare("SELECT * FROM tbl_assessment WHERE user_id=:user_id and score1 != 0");
    $stmtq->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $stmtq->execute();
    $data = $stmtq->fetch(PDO::FETCH_ASSOC);
    if ($data) {
        echo "คุณได้ทำแบบทดสอบนี้ไปแล้ว คะแนนคือ" . $data['score1'] . "," . $data['score2'] . "," . $data['score3'] . "," . $data['score4'] . "," . $data['score5'] . "<br/>ไปทำแบบทดสอบถัดไป";
        echo "<a href='q2.php?user_id=" . $_SESSION['user_id'] . "'>คลิกที่นี่</a>";
        echo '<br/>';
        echo "ต้องการล้างคะแนนทั้งหมดแล้วเริ่มทำใหม่หรือไม่? ถ้าต้องการ <a href='clear.php'>คลิกที่นี่</a>";
        exit();
    }
    ?>
    <br>
    <td><b>
            <font size="4" color="#020A35">แบบทดสอบการสำรวจตนเอง</font>
        </b></td>
    <table cellpadding="0" cellspacing="0" align="right">
        <tr>
            <td height="9"></td>
        </tr>
        <tr>
            <table align="right">
                <br>

                <h4>ความสนใจในแผนการเรียนวิทยาศาสตร์ คณิตศาสตร์</h4>
                <form action="" method="post">
                    <font color=#0f125f> 1.มีพื้นฐานความรู้ดี แล้วสนุกกับการเรียนวิชาวิทยาศาสตร์ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question1" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question1" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question1" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question1" id="correct4" value="0">น้อยที่สุด <br> <br>

                    <font color=#0f125f> 2. มีความถนัดในการคิดคำนวณได้คล่อง ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question2" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question2" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question2" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question2" id="correct4" value="0">น้อยที่สุด <br> <br>

                    <font color=#0f125f> 3.ช่างสังเกต ชอบศึกษาค้นคว้า ทดลอง วิเคราะห์ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question3" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question3" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question3" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question3" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 4. ชอบแก้โจทย์ปัญหาต่างๆ รู้สึกท้าทายกับการหาคำตอบ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question4" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question4" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question4" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question4" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 5. คิดอย่างมีระบบและมีเหตุผล ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question5" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question5" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question5" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question5" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 6. มีความคิดสร้างสรรค์ ชอบคิดค้นสิ่งใหม่ๆ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question6" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question6" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question6" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question6" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 7. แสดงความคิดเห็นได้อย่างมีเหตุผล ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question7" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question7" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question7" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question7" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 8. กล้าตัดสินใจ แก้ปัญหาต่างๆได้อย่างรวดเร็ว ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question8" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question8" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question8" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question8" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 9.มีความละเอียดรอบคอบ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question9" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question9" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question9" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question9" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 10. สนใจเทคโนโลยีและวิทยาการใหม่ ๆ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question10" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question10" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question10" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question10" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 11.มองการณ์ไกลรู้จักคิดและวางแผนในการทำสิ่งใดสิ่งหนึ่ง ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question11" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question11" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question11" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question11" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 12. มีความอดทน มุ่งมั่น และพยายาม ไม่ท้อถอย ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question12" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question12" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question12" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question12" id="correct4" value="0">น้อยที่สุด <br>
                    <br><br>

                    <button type="submit" class="btn btn-success"> ส่งแบบทดสอบ </button>
                    &nbsp; &nbsp;<a href="q2.php?user_id='<?php echo $user_id; ?>'">
                        <button type="button"> ไปแบบทดสอบถัดไป </button></a>

                </form>

                </td>
        </tr>
        </form>
    </table>

    </td>
    </tr>

    </table>


</body>

</html>
<?php



if (isset(
    $_POST['question1'],
    $_POST['question2'],
    $_POST['question3'],
    $_POST['question4'],
    $_POST['question5'],
    $_POST['question6'],
    $_POST['question7'],
    $_POST['question8'],
    $_POST['question9'],
    $_POST['question10'],
    $_POST['question11'],
    $_POST['question12']
)) {


    $qs1 = $_POST['question1'];
    $qs2 = $_POST['question2'];
    $qs3 = $_POST['question3'];
    $qs4 = $_POST['question4'];
    $qs5 = $_POST['question5'];
    $qs6 = $_POST['question6'];
    $qs7 = $_POST['question7'];
    $qs8 = $_POST['question8'];
    $qs9 = $_POST['question9'];
    $qs10 = $_POST['question10'];
    $qs11 = $_POST['question11'];
    $qs12 = $_POST['question12'];
    $sum1 = $qs1 + $qs2 + $qs3 + $qs4 + $qs5 + $qs6 + $qs7 + $qs8 + $qs9 + $qs10 + $qs11 + $qs12;


    $stmt = $conn->prepare("INSERT INTO tbl_assessment(score1,user_id)VALUES(:score1,:user_id)");
    $stmt->bindParam(':score1', $sum1, PDO::PARAM_INT);
    $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $result = $stmt->execute();
    if ($result) {
        echo "<script>swal('สำเร็จ!', 'ทำแบบทดสอบเรียบร้อย ไปแบบทดสอบถัดไป', 'success').then(function() {
            window.location = 'q2.php?user_id=$user_id';
        });</script>";
    } else {
        echo "<script>swal('มีบางอย่างผิดพลาด!', 'กรุณาลองใหม่อีกครั้ง', 'error').then(function() {
            window.location = 'q1.php';
        });</script>";
    }
}

?>




</table>
</body>

</html>