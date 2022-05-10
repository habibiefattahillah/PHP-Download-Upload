<?php
include "connect.php";
session_start();

date_default_timezone_set('Asia/Jakarta');
$out_time = date('Y-m-d H:i:s', time());

mysqli_query($connect, "update log set
out_time = '$out_time',
status = 'Success Logout'
where email = '$_SESSION[email]'") or die(mysqli_error($connect));

session_destroy();
header("location:login/sign_in.php");
?>