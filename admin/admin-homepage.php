<?php
session_start();
if(!isset($_SESSION['phoneNumber'])){
  echo "<script>alert('You must login to view this page');</script>";
  echo "<script>window.location.href='login.php';</script>";
}

if(isset($_POST['logout'])){
  session_destroy();
  unset($_SESSION['firstName']);
  unset($_SESSION['lastName']);
  unset($_SESSION['phoneNumber']);
  unset($_SESSION['userType']);
  header('location: ../index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>admin-homepage</title>
</head>
<body>
<?php include 'sidebar.html'; ?>
<div class="home_content">
    <h1 class="text-center mt-3">Update Profile</h1>
    <div class="container">
      <div class="container-fluid border border-dark p-4">
        <h3>Update Password</h3>
        <form action="" method="POST">
          <div class="form-group">
            <label for="currentPassword">Current Password:</label>
            <input type="password" name="currentPassword" class="form-control">
          </div>
          <div class="form-group">
            <label for="newPassword">New Password:</label>
            <input type="password" name="newPassword" class="form-control">
          </div>
          <button class="btn btn-primary" name="updatePassword">Update Password</button>
        </form>
      </div>  
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
</body>
</html>