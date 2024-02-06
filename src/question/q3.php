<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
  <link rel="stylesheet" href="style.css" />
  <title>Quiz</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
</head>

<body>
  <?php
  if ($_SESSION['user_id'] == null) {
    echo "<h3>กรุณาเข้าสู่ระบบก่อนทำแบบทดสอบ</h3>";
    exit();
  } ?>

  <?php
  require_once '../libs/connect-db.php';
  $stmtq = $conn->prepare("SELECT * FROM tbl_assessment WHERE user_id=:user_id AND score3 != 0");
  $stmtq->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
  $stmtq->execute();
  $data = $stmtq->fetch(PDO::FETCH_ASSOC);
  if ($data) {
    echo "[3] คุณได้ทำแบบทดสอบนี้ไปแล้ว คะแนนคือ" . $data['score3'] . "กรุณาไปทำแบบทดสอบถัดไป";
    echo "<a href='q4.php?user_id=" . $_SESSION['user_id'] . "'>คลิกที่นี่</a>";
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

        <h4>ความสนใจในแผนการเรียนภาษาอังกฤษ และภาษาต่างประเทศที่ 2 </h4>
        <form action="q3.php" method="post">
          <font color=#0f125f> 25.พื้นฐานความรู้ดีในวิชาภาษาอังกฤษ ฟัง พูด อ่าน เขียน ได้คล่อง ? </font>
          <br><br>
          &nbsp&nbsp<input type="radio" name="question25" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question25" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question25" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question25" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 26. มีพื้นฐานความรู้ดีในวิชาภาษาไทย รักการอ่าน การเขียน ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question26" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question26" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question26" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question26" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 27. สนใจและสนุกกับการเรียนด้านภาษา ทั้งภาษาไทยและภาษาอังกฤษ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question27" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question27" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question27" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question27" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 28. สามารถถ่ายทอดความรู้ความคิดและจินตนาการออกมาได้อย่างชัดเจน ? </font>
          <br><br>
          &nbsp&nbsp<input type="radio" name="question28" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question28" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question28" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question28" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 29. รับรู้ เข้าใจ และเห็นคุณค่าของศิลปวัฒนธรรม ดนตรีและภาษา ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question29" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question29" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question29" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question29" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 30. มีจินตนาการและมีความคิดสร้างสรรค์ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question30" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question30" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question30" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question30" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 31. สนใจเหตุการณ์ และข่าวสารในสังคมปัจจุบัน ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question31" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question31" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question31" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question31" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 32. มีความคล่องตัวในการเขียนหรือพูดโต้ตอบ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question32" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question32" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question32" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question32" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 33. กระตือรือร้น ใฝ่เรียนใฝ่รู้อยู่เสมอ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question33" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question33" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question33" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question33" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 34. คล่องแคล่วมีไหวพริบดี แก้ไขเหตุการณ์เฉพาะหน้าได้ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question34" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question34" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question34" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question34" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 35. กล้าพูด กล้าแสดงออกในทางที่เหมาะสม ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question35" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question35" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question35" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question35" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 36. ชอบการติดต่อสื่อสารกับผู้อื่น ร่าเริงแจ่มใส เข้ากับผู้อื่นได้ง่าย ? </font>
          <br><br>
          &nbsp&nbsp<input type="radio" name="question36" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question36" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question36" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question36" id="correct4" value="0">น้อยที่สุด <br>
          <br>



          <br>

          <button type="submit" class="btn btn-success"> ส่งแบบทดสอบ </button>
          &nbsp; &nbsp; <button type="button" onclick="window.location.href='q4.php'"> ไปแบบทดสอบถัดไป
          </button>

        </form>

        </td>
    </tr>
    </form>
  </table>

  </td>
  </tr>
  </table>
  <?php
  require_once '../libs/connect-db.php';


  if (isset(
    $_POST['question25'],
    $_POST['question26'],
    $_POST['question27'],
    $_POST['question28'],
    $_POST['question29'],
    $_POST['question30'],
    $_POST['question31'],
    $_POST['question32'],
    $_POST['question33'],
    $_POST['question34'],
    $_POST['question35'],
    $_POST['question36']
  )) {

    $qs25 = $_POST['question25'];
    $qs26 = $_POST['question26'];
    $qs27 = $_POST['question27'];
    $qs28 = $_POST['question28'];
    $qs29 = $_POST['question29'];
    $qs30 = $_POST['question30'];
    $qs31 = $_POST['question31'];
    $qs32 = $_POST['question32'];
    $qs33 = $_POST['question33'];
    $qs34 = $_POST['question34'];
    $qs35 = $_POST['question35'];
    $qs36 = $_POST['question36'];
    $sum3 = $qs25 + $qs26 + $qs27 + $qs28 + $qs29 + $qs30 + $qs31 + $qs32 + $qs33 + $qs34 + $qs35 + $qs36;

    $stmt = $conn->prepare("UPDATE tbl_assessment SET score3=:score3 WHERE user_id =:user_id");
    $stmt->bindParam(':score3', $sum3, PDO::PARAM_INT);
    $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $result = $stmt->execute();
    $conn = null;

    if ($result) {
      echo "<script>swal('สำเร็จ!', 'ทำแบบทดสอบเรียบร้อย ไปแบบทดสอบถัดไป', 'success').then(function() {
            window.location = 'q4.php';
        });</script>";
    } else {
      echo "<script>swal('มีบางอย่างผิดพลาด!', 'กรุณาลองใหม่อีกครั้ง', 'error').then(function() {
            window.location = 'q3.php';
        });</script>";
    }
  }

  ?>

</body>

</html>