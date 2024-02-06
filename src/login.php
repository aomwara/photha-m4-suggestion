<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    session_start();

    // รับค่า username และ password จากฟอร์ม
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = $_POST['username'];
        $password = $_POST['password'];

        // ทำการตรวจสอบ username และ password ในฐานข้อมูล
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE `username` = :username");
        $stmt->bindParam(':username', $user_id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // ตรวจสอบรหัสผ่าน
        if ($user && ($password === $user['password'])) {
            // ถ้าถูกต้อง ทำการล็อกอิน
            $_SESSION['user_id'] = $user['id'];

            // ส่งไปหน้าหลักหลังจากล็อกอิน
            header('Location: index.php');
            exit;
        } else {
            // ถ้าไม่ถูกต้อง แสดงข้อความ
            echo '<script>
            swal("เกิดข้อผิดพลาด!", "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง", "error");
            </script>';
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
                    <form id="form1" name="form1" method="POST" action="login.php">

                        <marquee bgcolor="#FFF8BC">
                            Welcome to Website
                        </marquee>
                        <div>
                            <div>
                                <div align="center">
                                    <h3><strong>เว็บไซต์เพื่อช่วยในการตัดสินใจเลือกแผนการเรียนต่อระดับชั้นมัธยมศึกษาปีที่
                                            4 </strong>
                                    </h3>
                                    <h3><strong>โรงเรียนโพธาวัฒนาเสนี</strong></h3>
                                    <p></p>
                                    <div>
                                        <div>
                                            <h3> โปรด login เพื่อเข้าชมเว็บไซต์</h3>
                                            <p align="center">
                                                <label for="username">ชื่อผู้ใช้งาน</label>
                                                <input type="text" name="username" id="username" />
                                                <br />
                                                <br />
                                                <label for="Password">รหัสผ่าน</label>
                                                <input type="password" name="password" id="Password" />
                                            </p>
                                            <p align="center">
                                                <input type="submit" name="login" id="button2" value="login" />
                                            </p>
                                            <p align="center"><a href="register.php">สมัครสมาชิก</a></p>
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
                </td>
            </tr>
        </table>
    </center>
</body>

</html>