<?php
session_start();
if(!isset($_SESSION['userType'])){
    echo "<script>alert('You must log in as an user in order to view this page');</script>";
    echo "<script>window.location.href='../login.php';</script>";
}
else{
    if($_SESSION['userType'] !== 'user'){
        echo "<script>alert('You must log in as an admin in order to view this page');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    }
}
if(isset($_POST['logout'])){
    session_destroy();
    unset($_SESSION['firstName']);
    unset($_SESSION['lastName']);
    unset($_SESSION['phoneNumber']);
    unset($_SESSION['userType']);
    header('../login.php');
  }
?>