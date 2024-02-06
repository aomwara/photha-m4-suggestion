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
  $stmtq = $conn->prepare("SELECT * FROM tbl_assessment WHERE user_id=:user_id AND score5 != 0");
  $stmtq->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
  $stmtq->execute();
  $data = $stmtq->fetch(PDO::FETCH_ASSOC);
  if ($data) {
    echo "[5] คุณได้ทำแบบทดสอบนี้ไปแล้ว คะแนนคือ" . $data['score5'] . "กรุณาไปทำแบบทดสอบถัดไป";

    echo "<a href='q1.php?user_id=" . $_SESSION['user_id'] . "'>คลิกที่นี่</a>";
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

        <h4>ความสนใจในสายอาชีพ</h4>
        <form action="" method="post">
          <font color=#0f125f> 49. มีความคิดริเริ่มสร้างสรรค์ ในการผลิตหรือประดิษฐ์ชิ้นงาน ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question49" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question49" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question49" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question49" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 50. พื้นฐานความรู้วิชาภาคปฏิบัติดีกว่าด้านวิชาการ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question50" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question50" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question50" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question50" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 51. ชอบเรียนภาคปฏิบัติ ลงมือทำ มากกว่าเรียนภาคทฤษฎี ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question51" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question51" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question51" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question51" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 52. อยากเรียนเพื่อมีความรู้ความสามารถเฉพาะทาง ด้านอาชีพ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question52" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question52" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question52" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question52" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 53. ต้องการเรียนจบเพื่อมีงานทำเร็วๆหลังจบชั้น ม.3 ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question53" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question53" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question53" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question53" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 54. มีความเชื่อมั่นว่าการเรียนสายอาชีพ ก็สามารถมีอนาคตที่เจริญมั่นคงได้ ?
          </font><br><br>
          &nbsp&nbsp<input type="radio" name="question54" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question54" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question54" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question54" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 55. ไม่รู้สึกด้อย กล้าที่จะบอกใครๆว่าเรียนต่อสายอาชีพ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question55" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question55" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question55" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question55" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 56. มีวินัยในตนเอง สามารถรับผิดชอบตนเองในการเรียนได้ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question56" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question56" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question56" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question56" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 57. มีความอุตสาหะ วิริยะ อดทนในการทำงาน ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question57" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question57" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question57" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question57" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 58. มีเป้าหมายชัดเจนในการเรียนสายอาชีพ ? </font><br><br>
          &nbsp&nbsp<input type="radio" name="question58" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question58" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question58" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question58" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 59. ผู้ปกครองให้อิสระในการตัดสินใจเลือกศึกษาต่อ ไม่ว่าสายสามัญหรือสายอาชีพ ?
          </font><br><br>
          &nbsp&nbsp<input type="radio" name="question59" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question59" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question59" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question59" id="correct4" value="0">น้อยที่สุด <br>
          <br>

          <font color=#0f125f> 60. สามารถควบคุมตนเองได้ ไม่คล้อยตามการชักชวนในทางที่ผิดของเพื่อน ? </font>
          <br><br>
          &nbsp&nbsp<input type="radio" name="question60" id="correct1" value="3">มาก &nbsp&nbsp&nbsp
          <input type="radio" name="question60" id="correct2" value="2">ปานกลาง &nbsp&nbsp&nbsp
          <input type="radio" name="question60" id="correct3" value="1">น้อย &nbsp&nbsp&nbsp
          <input type="radio" name="question60" id="correct4" value="0">น้อยที่สุด <br>
          <br>





          <br>

          <button type="submit" class="btn btn-success"> ส่งแบบทดสอบ </button>
          &nbsp; &nbsp; <button type="button" onclick="window.location.href='q1.php'"> กลับหน้าแรก?
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
    $_POST['question49'],
    $_POST['question50'],
    $_POST['question51'],
    $_POST['question52'],
    $_POST['question53'],
    $_POST['question54'],
    $_POST['question55'],
    $_POST['question56'],
    $_POST['question57'],
    $_POST['question58'],
    $_POST['question59'],
    $_POST['question60']
  )) {


    $qs49 = $_POST['question49'];
    $qs50 = $_POST['question50'];
    $qs51 = $_POST['question51'];
    $qs52 = $_POST['question52'];
    $qs53 = $_POST['question53'];
    $qs54 = $_POST['question54'];
    $qs55 = $_POST['question55'];
    $qs56 = $_POST['question56'];
    $qs57 = $_POST['question57'];
    $qs58 = $_POST['question58'];
    $qs59 = $_POST['question59'];
    $qs60 = $_POST['question60'];

    $sum5 = $qs49 + $qs50 + $qs51 + $qs52 + $qs53 + $qs54 + $qs55 + $qs56 + $qs57 + $qs58 + $qs59 + $qs60;

    $stmt = $conn->prepare("UPDATE tbl_assessment SET score5=:score5 WHERE user_id =:user_id");
    $stmt->bindParam(':score5', $sum5, PDO::PARAM_INT);
    $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $result = $stmt->execute();
    $conn = null;

    if ($result) {
      echo "<script>swal('สำเร็จ!', 'ทำแบบทดสอบเรียบร้อย กลับหน้าแรก', 'success').then(function() {
            window.location = 'q1.php';
        });</script>";
    } else {
      echo "<script>swal('มีบางอย่างผิดพลาด!', 'กรุณาลองใหม่อีกครั้ง', 'error').then(function() {
            window.location = 'q5.php';
        });</script>";
    }
  }

  ?>

</body>

</html>