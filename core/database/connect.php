<!--connection database-->
<?php
$localhost_admin	=	'localhost';
$username_admin		=	'root';
$password_admin		=	'';
$database_admin		=	'meobusol_thanh-seafood';

$connect_error = 'Sorry, We\'re experiencing connection proplems.';
$connect = mysql_connect($localhost_admin, $username_admin, $password_admin) or die ($connect_error);
$db_selected = mysql_select_db($database_admin, $connect) or die ($connect_error);


?>

<!--http://vuicuoi.click:2082/
thanh-seafood
tj617aAcF9-->
