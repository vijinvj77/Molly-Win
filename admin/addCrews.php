<?php include 'adminValidationCheck.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="sidebar-home-content-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>add crew</title>
</head>
<body>
    <?php include 'sidebar.php' ?>
    <div class="home_content">
    <nav class="navbar navbar-light" style="background: #11101d">
    <span class="navbar-brand mb-0 h1"><a class="text-white" style="text-decoration: none" href="../index.html">Molly-Win</a></span>
    </nav>
    <div class="navs mt-4">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="addCrews.php">Add Crew</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="viewCrews.php">View Crew</a>
        </li>
    </ul>
    </div>
        <h3 class="text-center mt-4">Add Crew</h3>
        <form action="" method="POST" class="container mt-4">
            <div class="form-group">
                <label for="crewName">Name:</label>
                <input type="text" name="crewName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="crewType">Type:</label>
                <select class="form-control" name="crewType">
                    <option>Actor</option>
                    <option>Actress</option>
                    <option>Director</option>
                    <option>Producer</option>
                    <option>Script Writer</option>
                    <option>Music Director</option>
                </select>
            </div>
            <button class="btn btn-primary" name="addCrew">Add Crew</button>
        </form>
    </div>
<?php
    include '../connection.php';
    if(isset($_POST['addCrew'])){
        $name = $_POST['crewName'];
        $celebType = $_POST['crewType'];
        $celebValidationQuery = "SELECT * FROM celebrities WHERE name='$name' AND celebType='$celebType'";
        $celebValidationQueryResult = mysqli_query($conn,$celebValidationQuery);
        if(mysqli_num_rows($celebValidationQueryResult)>0){
            echo "<script>alert('This celebrity already exists');</script>";
            echo "<script>window.location.href='addCrews.php';</script>";
        }
        else{
            $celebInsertQuery = "INSERT INTO celebrities (name,celebType) VALUES ('$name','$celebType')";
            $celebInsertQueryResult = mysqli_query($conn,$celebInsertQuery);
            if($celebInsertQueryResult){
                echo "<script>alert('Celebrity added successfully');</script>";
                echo "<script>window.location.href='addCrews.php</script>";
            }
        }
    }
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>