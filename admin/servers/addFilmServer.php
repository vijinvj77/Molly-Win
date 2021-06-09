<?php
    include '../connection.php';
    if(isset($_POST['addFilm'])){
        $filmName = $_POST['filmName'];
        $filmExistSearchQuery = "SELECT * FROM films WHERE filmName='$filmName'";
        $filmExistSearchQueryResult = mysqli_query($conn,$filmExistSearchQuery);
        if(mysqli_num_rows($filmExistSearchQueryResult)>0){
            echo "<script>alert('The film already exists');</script>";
            echo "<script>window.location.href='addFilm.php';</script>";
        }
        else{
            $actorName = $_POST['actorName'];
            $actressName = $_POST['actressName'];
            $directorName = $_POST['directorName'];
            $producerName = $_POST['producerName'];
            $scriptWriterName = $_POST['scriptWriterName'];
            $musicDirectorName = $_POST['musicDirectorName'];
            $filmStatus = $_POST['filmStatus'];
            $addFilmQuery = "INSERT INTO films(film,actor,actress,director,producer,scriptWriter,musicDirector,status) VALUES ('$filmName','$actorName','$actressName','$directorName','$producerName','$scriptWriterName','$musicDirectorName','$filmStatus')";
            $addFilmQueryResult = mysqli_query($conn,$addFilmQuery);
            if($addFilmQueryResult){
                echo "<script>alert('Film added successfully');</script>";
                echo "<script>window.location.href='addFilm.php';</script>";
            }
            else{
                echo "<script>alert('Could not add film');</script>";
                echo "<script>window.location.href='addFilm.php';</script>";
            }
        }
    }
?>