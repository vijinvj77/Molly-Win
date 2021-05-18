<?php
    include '../connection.php';
    if(isset($_POST['addActor'])){
        $actorName = $_POST['actorName'];
        $actorSearchQuery = "SELECT * FROM celebrities WHERE name='$actorName'";
        $actorSearchQueryResult = mysqli_query($conn,$actorSearchQuery);
        if(mysqli_num_rows($actorSearchQueryResult)>0){
            echo "<script>alert('The actor already exists');</script>";
            echo "<script>window.location.href='actors.php';</script>";
        }else{
            $actorAddQuery = "INSERT INTO celebrities (name,celebType) VALUES ('$actorName','actor')";
            $actorAddQueryResult = mysqli_query($conn,$actorAddQuery);
            if($actorAddQueryResult){
                echo "<script>alert('Actor added successfully');</script>";
                echo "<script>window.location.href='actors.php';</script>";
            }
            else{
                echo "<script>alert('Some error occurred, please try again');</script>";
                echo "<script>window.location.href='actors.php';</script>";
            }
        }
    }
?>