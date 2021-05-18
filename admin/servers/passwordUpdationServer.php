<?php
include '../connection.php';
if(isset($_POST['updatePassword'])){
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $phoneNumber = $_SESSION['phoneNumber'];
    $passwordAuthQuery = "SELECT * FROM users WHERE phoneNumber='$phoneNumber' AND password='$currentPassword'";
    $passwordAuthQueryResult = mysqli_query($conn,$passwordAuthQuery);
    if(mysqli_num_rows($passwordAuthQueryResult)>0){
        $passwordUpdateQuery = "UPDATE users SET password='$newPassword' WHERE phoneNumber='$phoneNumber'";
        $passwordUpdateQueryResult = mysqli_query($conn,$passwordUpdateQuery);
        if($passwordUpdateQueryResult){
            echo "<script>alert('Password changed successfully');</script>";
            echo "<script>window.location.href='admin-homepage.php';</script>";
        }else{
            echo "<script>alert('Couldn\'t change password. Some error occurred');</script>";
            echo "<script>window.location.href='admin-homepage.php';</script>";
        }
    }
    else{
        echo "<script>alert('Current password wrong');</script>";
        echo "<script>window.location.href='admin-homepage.php';</script>";
    }
}

?>