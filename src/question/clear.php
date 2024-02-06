<?php session_start();
if ($_SESSION['user_id'] == null) {
    echo "<h3>กรุณาเข้าสู่ระบบก่อนทำแบบทดสอบ</h3>";
    exit();
}

require_once '../libs/connect-db.php';
$stmtq = $conn->prepare("UPDATE tbl_assessment SET score1=0, score2=0, score3=0, score4=0, score5=0 WHERE user_id=:user_id");
$stmtq->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
$re = $stmtq->execute();

if ($re) {
    echo "ล้างข้อมูลแบบทดสอบเรียบร้อยแล้ว";
    echo "<a href='q1.php?user_id=" . $_SESSION['user_id'] . "'>กลับไปทำแบบทดสอบ</a>";
    exit();
}
