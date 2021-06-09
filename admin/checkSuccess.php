<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sidebar-home-content-style.css">
    <title>check success</title>
</head>
<body>
<?php include 'sidebar.php'; ?>
<?php include '../connection.php'; ?>
<div class="home_content">
    <nav class="navbar navbar-light" style="background: #11101d">
    <span class="navbar-brand mb-0 h1"><a class="text-white" style="text-decoration: none" href="../index.html">Molly-Win</a></span>
    </nav>
    <div class="container">
        <h3 class="text-center m-4">Check Success</h3>
        <form action="../results.php" method="POST" target="_blank">
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
            <button class="btn btn-primary container-fluid mb-4" name="checkSuccess">Check Success</button>
        </form>
    </div>
</div>
</body>
</html>