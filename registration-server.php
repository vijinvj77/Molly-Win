<?php
    include 'connection.php';
    if(isset($_POST['register'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if($password != $confirmPassword){
            echo "<script>alert('Password's mismatch');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
        $phoneNumberSearchQuery = "SELECT * FROM users WHERE phoneNumber='$phoneNumber'";
        $phoneNumberSearchQueryResult = mysqli_query($conn,$query);
        if($phoneNumberSearchQueryResult){
            echo "<script>alert('This phone number already exists');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
        else{
            $registrationQuery = "INSERT INTO users(firstName,lastName,phoneNumber,password) VALUES ('$firstName','$lastName','$phoneNumber','$password')";
            $registrationQueryResult = mysqli_query($conn,$registrationQuery);
            if($registrationQueryResult){
                echo "<script>alert('Registration successfull');</script>";
            }
        }
    }
?>