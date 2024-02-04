<?php require_once('Connections/pp.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

// *** Redirect if username exists
$MM_flag="MM_insert";
if (isset($_POST[$MM_flag])) {
  $MM_dupKeyRedirect="loginnn.php";
  $loginUsername = $_POST['username'];
  $LoginRS__query = sprintf("SELECT username FROM registerr WHERE username=%s", GetSQLValueString($loginUsername, "text"));
  mysql_select_db($database_pp, $pp);
  $LoginRS=mysql_query($LoginRS__query, $pp) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);

  //if there is a row in the database, the username was found - can not add the requested username
  if($loginFoundUser){
    $MM_qsChar = "?";
    //append the username to the redirect page
    if (substr_count($MM_dupKeyRedirect,"?") >=1) $MM_qsChar = "&";
    $MM_dupKeyRedirect = $MM_dupKeyRedirect . $MM_qsChar ."requsername=".$loginUsername;
    header ("Location: $MM_dupKeyRedirect");
    exit;
  }
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO registerr (username, password, name) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['Password'], "text"),
                       GetSQLValueString($_POST['name'], "text"));

  mysql_select_db($database_pp, $pp);
  $Result1 = mysql_query($insertSQL, $pp) or die(mysql_error());

  $insertGoTo = "index.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "loginnn.php";
  $MM_redirectLoginFailed = "rregister.php";
  $MM_redirecttoReferrer = true;
  mysql_select_db($database_pp, $pp);
  
  $LoginRS__query=sprintf("SELECT username, password FROM registerr WHERE username=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $pp) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เข้าสู่ระบบ</title>
<style type="text/css">
#form1 p label {
	font-size: 20px;
}
#form1 p a {
	font-size: 20px;
}
</style>
</head>

<body bgcolor="#cad6ff">
<form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
  <p align="center"><img src="img/bn.jpg" width="1000" height="300" alt="p"/></p>
  <marquee bgcolor="#FFF8BC" >
  Welcome to Website 
  </marquee>
  <div>
    <div>
      <div align="center">
        <h3><strong>เว็บไซต์เพื่อช่วยในการตัดสินใจเลือกแผนการเรียนต่อระดับชั้นมัธยมศึกษาปีที่ 4 </strong></h3>
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
    <label for="name">User Name</label>
    <input type="text" name="name" id="name" />
  </p>
  <p align="center">
    <label for="username">User ID</label>
    <input type="text" name="username" id="username" />
<br />
    <br />
    <label for="Password">Password</label>
    <input type="password" name="Password" id="Password" />
  </p>
  <p align="center">
    <input type="submit" name="login" id="login" value="sign up" />
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
<blockquote>&nbsp;</blockquote>
</body>
</html>