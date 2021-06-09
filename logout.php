<?php
session_start();
session_destroy();
unset($_SESSION['firstName']);
unset($_SESSION['lastName']);
unset($_SESSION['phoneNumber']);
unset($_SESSION['userType']);
echo "<script>window.location.href='login.php';</script>";
?>