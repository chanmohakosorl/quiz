<?php
$connect = mysqli_connect("localhost","root","","php_mvc");

if(mysqli_connect_errno()!=0){
    die('error'.mysqli_connect_error());
}
?>