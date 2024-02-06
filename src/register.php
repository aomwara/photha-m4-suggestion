<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<head>
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

    .table-main {
        background-color: #FFFFFF;
        border-radius: 16px;
        padding: 8px;
        box-shadow: 0 0 3px 3px #999999;
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

<body>
    <?php
  require_once('./libs/connect-db.php');

  if (isset($_POST['login'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("INSERT INTO users(name, username, password) VALUES(:name, :username, :password)");
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $result = $stmt->execute();
    if ($result) {
      echo "<script>
        swal('สมัครสมาชิกสำเร็จ', 'ดำเนินการต่อเพื่อเข้าสู่ระบบ', 'success').then(function() {
          window.location = 'login.php';
        });
      </script>";
    } else {
      echo "<script>
      swal('สมัครสมาชิกไม่สำเร็จต', 'เกิดข้อผิดพลาด', 'error').then(function() {
        window.location = 'register.php';
      });
    </script>";
    }
  }
  ?>
    <center>
        <table width="70%" class="table-main">
            <tr>
                <td>
                    <?php require_once('./banner.php'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php require_once('./top-menu.php'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <form id="form1" name="form1" method="POST" action="register.php">
                        <marquee bgcolor="#FFF8BC">
                            Welcome to Website
                        </marquee>
                        <div>
                            <div>
                                <div align="center">
                                    <h3><strong>เว็บไซต์เพื่อช่วยในการตัดสินใจเลือกแผนการเรียนต่อระดับชั้นมัธยมศึกษาปีที่
                                            4 </strong></h3>
                                    <h3><strong>โรงเรียนโพธาวัฒนาเสนี</strong></h3>
                                    <p>&nbsp;</p>
                                    <div>
                                        <div>
                                            <h3>สมัครสมาชิก</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p align="center">
                            <label for="name">ชื่อ-นามสกุล</label>
                            <input type="text" name="name" id="name" placeholder="เด็กชายโพธา รักเรียน" />
                        </p>
                        <p align="center">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <input type="text" name="username" id="username" placeholder="รหัสประจำตัวนักเรียน" />
                            <br />
                            <br />
                            <label for="Password">รหัสผ่าน</label>
                            <input type="password" name="password" id="password" placeholder="กำหนดรหัสผ่าน" />
                        </p>
                        <p align="center">
                            <input type="submit" name="login" id="login" value="สมัครสมาชิก" />
                        </p>
                        <div>
                            <div>
                                <div align="center">
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="MM_insert" value="form1" />
                    </form>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>