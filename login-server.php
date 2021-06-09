<?php
    session_start();
    if(isset($_SESSION['phoneNumber'])){
        if($_SESSION['userType'] == 'user'){
            header('location: user/user-homepage.php');
        }
        else{
            header('location: admin/admin-homepage.php');
        }
    }
    include 'connection.php';
    if(isset($_POST['login'])){
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE phoneNumber='$phoneNumber' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_assoc($result);
        if($data['userType'] == 'user'){
            $_SESSION['firstName'] = $data['firstName'];
            $_SESSION['lastName'] = $data['lastName'];
            $_SESSION['phoneNumber'] = $data['phoneNumber'];
            $_SESSION['userType'] = $data['userType'];
            echo "<script>window.location.href='user/user-homepage.php';</script>";
        }
        else if($data['userType'] == 'admin'){
            $_SESSION['firstName'] = $data['firstName'];
            $_SESSION['lastName'] = $data['lastName'];
            $_SESSION['phoneNumber'] = $data['phoneNumber'];
            $_SESSION['userType'] = $data['userType'];
            echo "<script>window.location.href='admin/admin-homepage.php';</script>";
        }
    }
    else{
        echo "<script>alert('Wrong phone number or password');</script>";
    }
    }
?>