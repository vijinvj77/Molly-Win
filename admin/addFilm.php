<?php include 'adminValidationCheck.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="sidebar-home-content-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>add film</title>
</head>
<body>
<?php include 'sidebar.php' ?>
<?php include '../connection.php' ?>
<div class="home_content">
    <nav class="navbar navbar-light" style="background: #11101d">
        <span class="navbar-brand mb-0 h1"><a class="text-white" style="text-decoration: none" href="../index.html">Molly-Win</a></span>
    </nav>
    <div class="navs mt-4">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="addFilm.php">Add Film</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewFilms.php">View Films</a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h1 class="text-center">Add Film</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="filmName">Film Name</label>
                <input type="text" name="filmName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="actor">Actor</label>
                <select name="actorName" class="form-control">
                <?php
                    $actorsNameQuery = "SELECT DISTINCT name from celebrities WHERE celebType='Actor'";
                    $actorsNameQueryResult = mysqli_query($conn,$actorsNameQuery);
                    while($actorsName = mysqli_fetch_assoc($actorsNameQueryResult)){
                        echo "<option>".$actorsName['name']."</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="actress">Actress</label>
                <select name="actressName" class="form-control">
                <?php
                    $actressNameQuery = "SELECT DISTINCT name from celebrities WHERE celebType='Actress'";
                    $actressNameQueryResult = mysqli_query($conn,$actressNameQuery);
                    while($actressName = mysqli_fetch_assoc($actressNameQueryResult)){
                        echo "<option>".$actressName['name']."</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <select name="directorName" class="form-control">
                <?php
                    $directorNameQuery = "SELECT DISTINCT name from celebrities WHERE celebType='Director'";
                    $directorNameQueryResult = mysqli_query($conn,$directorNameQuery);
                    while($directorName = mysqli_fetch_assoc($directorNameQueryResult)){
                        echo "<option>".$directorName['name']."</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="producer">Producer</label>
                <select name="producerName" class="form-control">
                <?php
                    $producerNameQuery = "SELECT DISTINCT name from celebrities WHERE celebType='Producer'";
                    $producerNameQueryResult = mysqli_query($conn,$producerNameQuery);
                    while($producerName = mysqli_fetch_assoc($producerNameQueryResult)){
                        echo "<option>".$producerName['name']."</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="scriptWriter">Script Writer</label>
                <select name="scriptWriterName" class="form-control">
                <?php
                    $scriptWriterNameQuery = "SELECT DISTINCT name from celebrities WHERE celebType='Script Writer'";
                    $scriptWriterNameQueryResult = mysqli_query($conn,$scriptWriterNameQuery);
                    while($scriptWriterName = mysqli_fetch_assoc($scriptWriterNameQueryResult)){
                        echo "<option>".$scriptWriterName['name']."</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label for="musicDirector">Music Director</label>
                <select name="musicDirectorName" class="form-control">
                <?php
                    $musicDirectorNameQuery = "SELECT DISTINCT name from celebrities WHERE celebType='Music Director'";
                    $musicDirectorNameQueryResult = mysqli_query($conn,$musicDirectorNameQuery);
                    while($musicDirectorName = mysqli_fetch_assoc($musicDirectorNameQueryResult)){
                        echo "<option>".$musicDirectorName['name']."</option>";
                    }
                ?>
                </select>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="filmStatus" id="exampleRadios1" value="Hit" checked>
            <label class="form-check-label" for="hit">
                Hit
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="filmStatus" id="exampleRadios2" value="Flop">
            <label class="form-check-label" for="flop">
                Flop
            </label>
            </div>
            <button class="btn btn-primary container-fluid mb-4" name="addFilm">Add</button>
        </form>
    </div>
</div>
<?php include 'servers/addFilmServer.php' ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>    
</body>
</html>