<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" href="style.css" />
    <title>Quiz</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php
  if ($_SESSION['user_id'] == null) {
    echo "<h3>กรุณาเข้าสู่ระบบก่อนทำแบบทดสอบ</h3>";
    exit();
  } ?>

    <?php
  require_once '../libs/connect-db.php';
  $stmtq = $conn->prepare("SELECT * FROM tbl_assessment WHERE user_id=:user_id AND score4 != 0");
  $stmtq->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
  $stmtq->execute();
  $data = $stmtq->fetch(PDO::FETCH_ASSOC);
  if ($data) {
    echo "[4] คุณได้ทำแบบทดสอบนี้ไปแล้ว คะแนนคือ" . $data['score4'] . "กรุณาไปทำแบบทดสอบถัดไป";
    echo "<a href='q5.php?user_id=" . $_SESSION['user_id'] . "'>คลิกที่นี่</a>";
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

                <h4>ความสนใจในแผนการเรียนศิลป์ ทั่วไป</h4>
                <form action="" method="post">
                    <font color=#0f125f> 37. มีความรู้พื้นฐานในการใช้ภาษา ฟัง พูด อ่าน เขียน ทั้งภาษาไทยและภาษาอังกฤษ ?
                    </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question37" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question37" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question37" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question37" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 38. รับรู้ เข้าใจ และเห็นคุณค่าของศิลปวัฒนธรรม ดนตรีและภาษา ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question38" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question38" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question38" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question38" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 39. มีความสนใจด้านภาษา รักการอ่าน การเขียน ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question39" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question39" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question39" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question39" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 40. สนใจเหตุการณ์ และข่าวสารในสังคมปัจจุบัน ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question40" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question40" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question40" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question40" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f>41. ชอบการวิเคราะห์ อภิปรายเหตุการณ์ต่างๆที่เกิดขึ้นในสังคม ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question41" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question41" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question41" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question41" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 42. มีมนุษย์สัมพันธ์ดี สนุกกับการทำงานที่ต้องเกี่ยวข้องพบปะกับผู้อื่นเสมอ ?
                    </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question42" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question42" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question42" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question42" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 43. สามารถควบคุมตนเอง และปรับตัวให้เข้ากับสถานการณ์ต่างๆได้ดี ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question43" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question43" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question43" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question43" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 44. มีจินตนาการและมีความคิดสร้างสรรค์ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question44" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question44" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question44" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question44" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 45. มีไหวพริบดี สามารถแก้ไขเหตุการณ์เฉพาะหน้าได้ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question45" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question45" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question45" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question45" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 46. คล่องแคล่ว กล้าแสดงความคิดเห็น และนำเสนอได้อย่างสร้างสรรค์ ? </font>
                    <br><br>
                    &nbsp&nbsp<input type="radio" name="question46" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question46" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question46" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question46" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 47. มีมานะที่จะเรียนภาคทฤษฎีได้สำเร็จจนถึงขั้นอุดมศึกษาได้ ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question47" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question47" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question47" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question47" id="correct4" value="0">น้อยที่สุด <br>
                    <br>

                    <font color=#0f125f> 48. สนใจสิ่งแวดล้อมรอบตัว ? </font><br><br>
                    &nbsp&nbsp<input type="radio" name="question48" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
                    <input type="radio" name="question48" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
                    <input type="radio" name="question48" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
                    <input type="radio" name="question48" id="correct4" value="0">น้อยที่สุด <br>
                    <br>




                    <br>

                    <button type="submit" class="btn btn-success"> ส่งแบบทดสอบ </button>
                    &nbsp; &nbsp; <button type="button" onclick="window.location.href='q5.php'"> ไปแบบทดสอบถัดไป
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
  if (isset(
    $_POST['question37'],
    $_POST['question38'],
    $_POST['question39'],
    $_POST['question40'],
    $_POST['question41'],
    $_POST['question42'],
    $_POST['question43'],
    $_POST['question44'],
    $_POST['question45'],
    $_POST['question46'],
    $_POST['question47'],
    $_POST['question48']
  )) {


    $qs37 = $_POST['question37'];
    $qs38 = $_POST['question38'];
    $qs39 = $_POST['question39'];
    $qs40 = $_POST['question40'];
    $qs41 = $_POST['question41'];
    $qs42 = $_POST['question42'];
    $qs43 = $_POST['question43'];
    $qs44 = $_POST['question44'];
    $qs45 = $_POST['question45'];
    $qs46 = $_POST['question46'];
    $qs47 = $_POST['question47'];
    $qs48 = $_POST['question48'];
    $sum4 = $qs37 + $qs38 + $qs39 + $qs40 + $qs41 + $qs42 + $qs43 + $qs44 + $qs45 + $qs46 + $qs47 + $qs48;

    $stmt = $conn->prepare("UPDATE tbl_assessment SET score4=:score4 WHERE user_id =:user_id");
    $stmt->bindParam(':score4', $sum4, PDO::PARAM_INT);
    $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $result = $stmt->execute();
    $conn = null;

    if ($result) {
      echo "<script>swal('สำเร็จ!', 'ทำแบบทดสอบเรียบร้อย ไปแบบทดสอบถัดไป', 'success').then(function() {
            window.location = 'q5.php';
        });</script>";
    } else {
      echo "<script>swal('มีบางอย่างผิดพลาด!', 'กรุณาลองใหม่อีกครั้ง', 'error').then(function() {
            window.location = 'q4.php';
        });</script>";
    }
  }

  ?>


</body>

</html>