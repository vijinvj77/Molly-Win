<?php
session_start();
if(isset($_POST['logout'])){
  session_destroy();
  unset($_SESSION['firstName']);
  unset($_SESSION['lastName']);
  unset($_SESSION['phoneNumber']);
  unset($_SESSION['userType']);
  header('../login.php');
}
if(!isset($_SESSION['phoneNumber'])){
  echo "<script>alert('You must login to view this page');</script>";
  echo "<script>window.location.href='../login.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update actor</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('sidebar.php') ?>
    <div class="home_content">
    <nav class="navbar navbar-light" style="background: #11101d">
    <span class="navbar-brand mb-0 h1"><a href="../index.html" style="text-decoration: none;" class="text-white">Molly-Win</a></span>
    </nav>
    </div>
    <div class="container">
        <h1 class="text-center">Update Actor</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="actorName" readonly class="form-control">
            </div>
        </form>
    </div>
    
</body>
</html>