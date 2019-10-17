<?php
$host= 'localhost';
$username='root';
$password= "";
$db_name='pizzeria';
//connect
$link = mysqli_connect($host, $username, $password, $db_name);
//check connecton
if (!$link) {
  echo 'error' . mysqli_get_error();
}else {
  echo 'Je bent verbonden' . mysqli_get_host_info($link);
}
$test= 'test';

?>
