<?php
      //เรียกไฟล์เชื่อมต่อฐานข้อมูล
      require_once 'connect.php';
        //คิวรี่ข้อมูลไปแสดงในฟอร์ม
      $stmtq = $conn->prepare("SELECT no, question, choice_a, choice_b, choice_c, choice_d FROM tbl_questions ORDER BY no ASC");
      $stmtq->execute();
      $rsq = $stmtq->fetchAll();
      ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>Basic PHP PDO Display data in Radio Button by devbanban.com 2022</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <br>
                 
                    <h3>PHP PDO Display data in Radio Button  <br> Workshop แสดงข้อสอบ </h3>
                    <form  method="post">

                      <!-- loop โดยใช้ foreach -->
                      <?php foreach ( $rsq as $row) { ?>
 
                       <div class="row">
                        <div class="col-sm-12">
                          <!-- แสดงคำถาม --->
                          <b> คำถาม :  <?=$row['question'];?> </b>
                        </div>
                         <div class="col-sm-12" style="margin-left: 50px;">
                           <!-- แสดงรายการตัวเลือก --->
                           <input type="radio" name="q[<?=$row['no'];?>]" required value="a">  A : <?=$row['choice_a'];?> <br>
                           <input type="radio" name="q[<?=$row['no'];?>]" required value="b">  B : <?=$row['choice_b'];?> <br>
                           <input type="radio" name="q[<?=$row['no'];?>]" required value="c">  C : <?=$row['choice_c'];?> <br>
                           <input type="radio" name="q[<?=$row['no'];?>]" required value="d">  D : <?=$row['choice_d'];?> <br>
                         </div>
                      </div>

                    <?php } ?>
                      
                        
                        <div class="row">
                        <div class="d-grid gap-2 col-sm-4"> <br>  
                        <button type="submit" class="btn btn-success">ส่งคำตอบ</button>
                      </div>
                      
                    </div>
                        <br>
                    </form>

                    <br>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 

if (isset($_POST['q'])) {
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
}


     //รวม workshop PHP PDO ทั้งหมดสำหรับเข้าไปศึกษาและต่อยอด https://devbanban.com/?cat=409
    //รวมระบบพร้อมใช้ ได้ Code ทั้งหมด เอาไปต่อยอดได้ ราคาไม่แพง https://devbanban.com/?p=4425
    //คอร์สออนไลน์ เรียนได้ตลอดชีพ https://devbanban.com/?cat=250
    //devbanban.com

?>