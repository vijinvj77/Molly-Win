<?php
$username= "root";
$password= "";
$db= "mollywin";
$conn= mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("Connection failed:". mysqli_connect_error());
}
?>