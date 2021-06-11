<?php
    session_start();
    include 'connection.php';
    if(isset($_POST['register'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if($password != $confirmPassword){
            echo "<script>alert('Passwords mismatch');</script>";
            echo "<script>window.location.href='registration.php';</script>";
        }
        $phoneNumberSearchQuery = "SELECT * FROM users WHERE phoneNumber='$phoneNumber'";
        $phoneNumberSearchQueryResult = mysqli_query($conn,$query);
        if($phoneNumberSearchQueryResult){
            echo "<script>alert('This phone number already exists');</script>";
            echo "<script>window.location.href='registration.php';</script>";
        }
        else{
            $registrationQuery = "INSERT INTO users(firstName,lastName,phoneNumber,password) VALUES ('$firstName','$lastName','$phoneNumber','$password')";
            $registrationQueryResult = mysqli_query($conn,$registrationQuery);
            if($registrationQueryResult){
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['userType'] ='user';
                echo "<script>alert('Registration successful');</script>";
                echo "<script>window.location.href='user/user-homepage.php';</script>";
            }
            else{
                echo "<script>alert('Registration failed. Please try again');</script>";
                echo "<script>window.location.href='registration.php';</script>";
            }
        }
    }
?>