<?php
session_start();

// รับค่า username และ password จากฟอร์ม
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['username'];
    $password = $_POST['password'];

    // ทำการตรวจสอบ username และ password ในฐานข้อมูล
    $stmt = $conn->prepare("SELECT * FROM `registerr` WHERE `user_id` = :username");
    $stmt->bindParam(':username', $user_id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // ตรวจสอบรหัสผ่าน
    if ($user && password_verify($password, $user['password'])) {
        // ถ้าถูกต้อง ทำการล็อกอิน
        $_SESSION['username'] = $user_id;

        // ส่งไปหน้าหลักหลังจากล็อกอิน
        header('Location: question/q1.php');
        exit;
    } else {
        // ถ้าไม่ถูกต้อง แสดงข้อความ
        echo 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>HOME</title>
    <style>
        body {
            background-color: #cde2ff;
        }

        .tui {
            width: 950px;
            height: auto;
            background-color: #FFFFFF;
            box-shadow: 0 0 3px 3px #999999;
            -moz-box-shadow: 0px 0px 8px #999999;
            -webkit-box-shadow: 0px 0px 8px #999999;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
        }
    </style>
</head>
<body bgcolor="#cde2ff">
    <form id="form1" name="form1" method="POST" action="Connections/pp.php">
    <p align="center"><img src="img/bn.jpg" width="1000" height="300" alt="p"/></p>
  <marquee bgcolor="#FFF8BC" >
  Welcome to Website
  </marquee>
  <div>
    <div>
      <div align="center">
        <h3><strong>เว็บไซต์เพื่อช่วยในการตัดสินใจเลือกแผนการเรียนต่อระดับชั้นมัธยมศึกษาปีที่ 4 </strong></h3>
        <h3><strong>โรงเรียนโพธาวัฒนาเสนี</strong></h3>
        <p></p>
        <div>
          <div>
            <h3> โปรด login เพื่อเข้าชมเว็บไซต์</h3>
            <p align="center">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" />
              <br />
              <br />
              <label for="Password">Password</label>
              <input type="password" name="password" id="Password" />
            </p>
            <p align="center">
              <input type="submit" name="login" id="button2" value="login" />
            </p>
            <p align="center"><a href="rregister.php">สมัครสมาชิก</a></p>
            <p>&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <div>
    <div>
      <div align="center"></div>
    </div>
  </div>

    </form>
</body>
</html>
