<?php
    include 'connection.php';
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE phoneNumber='$phoneNumber' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if($result){
        $data = mysqli_fetch_assoc($result);
        if($data['userType'] == user){
            header('user/user-hompage.php');
        }
        else{
            header('admin/admin-homepage.php');
        }
    }
    else{
        echo "<script>alert('Wrong phone number or password');</script>";
    }
?>