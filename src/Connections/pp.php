<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_pp = "photha_database";
$database_pp = "photha";
$username_pp = "root";
$password_pp = "password1234";
$pp = mysql_pconnect($hostname_pp, $username_pp, $password_pp) or trigger_error(mysql_error(), E_USER_ERROR);