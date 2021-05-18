<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>add actors</title>
</head>
<body>
    <?php include('sidebar.html'); ?>
    <div class="home_content">
    <nav class="navbar navbar-light" style="background: #11101d">
  <span class="navbar-brand mb-0 h1"><a href="../index.html" style="text-decoration: none;" class="text-white">Molly-Win</a></span>
</nav>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="actors.php">Actors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="addactors.php">Add Actors</a>
  </li>
</ul>
<div class="container border border-dark p-4">
    <form action="" method="POST">
        <div class="form-group">
            <label for="actorName">Actor Name:</label>
            <input type="text" name="actorName" class="form-control">
        </div>
        <button type="submit" name="addActor" class="btn btn-primary">Add Actor</button>
    </form>
</div>
</div>
<?php include('servers/addActorServer.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>   
</body>
</html>