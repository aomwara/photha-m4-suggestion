<?php 
    // Create connection
    $connect = new mysqli('localhost', 'root', '12345678', 'pp');

    // Check Connection

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
      }

    $sql = "SELECT * FROM tbl_assessment";
    $result = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container"></div>
    <div class="container">
        <h1>ผลสรุปจากการทำแบบทดสอบ</h1>
        <table>
            <thead>
                <tr>
                    <td width="5%">#</td>
                    <td width="25%">แผนการเรียน</td>
                    <td width="25%">คะแนน </td>
                </tr>
            </thead>
            <tbody>
             <!-- ข้อมูลที่เราจะทำการ fetch จากฐานข้อมูล -->
            </tbody>
        </table>
        <tbody>
 <?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td><?php echo $row['user_id']; ?></td>
   <td class="name">
    <?php echo $row['score1']; ?></td>
   <td><?php echo $row['score2']; ?></td>
   </tr>
 <?php endwhile ?>
</tbody>
</body>
</html>