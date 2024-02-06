<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_punch = "photha_database";
$database_punch = "photha";
$username_punch = "root";
$password_punch = "password1234";
$punch = mysql_pconnect($hostname_punch, $username_punch, $password_punch) or trigger_error(mysql_error(), E_USER_ERROR);