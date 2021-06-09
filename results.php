<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>results</title>
</head>
<body></body>
<?php include 'connection.php';?>
<div class="container">
        <h3 class="text-center">Crew List</h3>
<table id="table" class="table table-bordered table-dark">
    <tr>
            <th scope="col">Title</th>
            <th scope="col">Name</th>
            <th scope="col">Films</th>
            <th scope="col">Hits</th>
            <th scope="col">Success Percentage</th>
    </tr>
    <?php
        //actor section
        $actor = $_POST['actorName'];
        $actorListQuery = "SELECT COUNT(*) AS actorList FROM films WHERE actor='$actor'";
        $actorListQueryResult = mysqli_query($conn,$actorListQuery);
        $countOfActor = mysqli_fetch_assoc($actorListQueryResult);
        $actorSuccessQuery = "SELECT COUNT(status) AS actorSuccess FROM films WHERE status='Hit' AND actor='$actor'";
        $actorListQueryResult = mysqli_query($conn,$actorSuccessQuery);
        $countOfActorSuccess = mysqli_fetch_assoc($actorListQueryResult);
        $actorPercentage = ($countOfActorSuccess['actorSuccess']/$countOfActor['actorList'])*100;

        echo "<tr><th scope='row'>Actor</th><td>".$_POST['actorName']."</td><td>".$countOfActor['actorList']."</td><td>".$countOfActorSuccess['actorSuccess']."</td><td>".$actorPercentage."</td></tr>";
        //actress Section
        $actress = $_POST['actressName'];
        $actressListQuery = "SELECT COUNT(*) AS actressList FROM films WHERE actress='$actress'";
        $actressListQueryResult = mysqli_query($conn,$actressListQuery);
        $countOfActress = mysqli_fetch_assoc($actressListQueryResult);
        $actressSuccessQuery = "SELECT COUNT(*) AS actressSuccess FROM films WHERE status='Hit' AND actress='$actress'";
        $actressListQueryResult = mysqli_query($conn,$actressSuccessQuery);
        $countOfActressSuccess = mysqli_fetch_assoc($actressListQueryResult);
        $actressPercentage = ($countOfActressSuccess['actressSuccess']/$countOfActress['actressList'])*100;

        echo "<tr><th scope='row'>Actress</th><td>".$actress."</td><td>".$countOfActress['actressList']."</td><td>".$countOfActressSuccess['actressSuccess']."</td><td>".$actressPercentage."</td></tr>";
        //director Section
        $director = $_POST['directorName'];
        $directorListQuery = "SELECT COUNT(*) AS directorList FROM films WHERE director='$director'";
        $directorListQueryResult = mysqli_query($conn,$directorListQuery);
        $countOfdirector = mysqli_fetch_assoc($directorListQueryResult);
        $directorSuccessQuery = "SELECT COUNT(status) AS directorSuccess FROM films WHERE status='Hit' AND director='$director'";
        $directorListQueryResult = mysqli_query($conn,$directorSuccessQuery);
        $countOfdirectorSuccess = mysqli_fetch_assoc($directorListQueryResult);
        $directorPercentage = ($countOfdirectorSuccess['directorSuccess']/$countOfdirector['directorList'])*100;

        echo "<tr><th scope='row'>Director</th><td>".$director."</td><td>".$countOfdirector['directorList']."</td><td>".$countOfdirectorSuccess['directorSuccess']."</td><td>".$directorPercentage."</td></tr>";

        //producer Section
        $producer = $_POST['producerName'];
        $producerListQuery = "SELECT COUNT(*) AS producerList FROM films WHERE producer ='$producer '";
        $producerListQueryResult = mysqli_query($conn,$producerListQuery);
        $countOfproducer = mysqli_fetch_assoc($producerListQueryResult);
        $producerSuccessQuery = "SELECT COUNT(status) AS producerSuccess FROM films WHERE status='Hit' AND producer='$producer'";
        $producerListQueryResult = mysqli_query($conn,$producerSuccessQuery);
        $countOfproducerSuccess = mysqli_fetch_assoc($producerListQueryResult);
        $producerPercentage = ($countOfproducerSuccess['producerSuccess']/$countOfproducer['producerList'])*100;

        echo "<tr><th scope='row'>Producer</th><td>".$producer."</td><td>".$countOfproducer['producerList']."</td><td>".$countOfproducerSuccess['producerSuccess']."</td><td>".$producerPercentage."</td></tr>";

        //script writer section
        $scriptWriter = $_POST['scriptWriterName'];
        $scriptWriterListQuery = "SELECT COUNT(*) AS scriptWriterList FROM films WHERE scriptWriter ='$scriptWriter'";
        $scriptWriterListQueryResult = mysqli_query($conn,$scriptWriterListQuery);
        $countOfscriptWriter = mysqli_fetch_assoc($scriptWriterListQueryResult);
        $scriptWriterSuccessQuery = "SELECT COUNT(status) AS scriptWriterSuccess FROM films WHERE status='Hit' AND scriptWriter='$scriptWriter'";
        $scriptWriterListQueryResult = mysqli_query($conn,$scriptWriterSuccessQuery);
        $countOfscriptWriterSuccess = mysqli_fetch_assoc($scriptWriterListQueryResult);
        $scriptWriterPercentage = ($countOfscriptWriterSuccess['scriptWriterSuccess']/$countOfscriptWriter['scriptWriterList'])*100;

        echo "<tr><th scope='row'>Script Writer</th><td>".$scriptWriter."</td><td>".$countOfscriptWriter['scriptWriterList']."</td><td>".$countOfscriptWriterSuccess['scriptWriterSuccess']."</td><td>".$scriptWriterPercentage."</td></tr>";

        //music director section
        $musicDirector = $_POST['musicDirectorName'];
        $musicDirectorListQuery = "SELECT COUNT(*) AS musicDirectorList FROM films WHERE musicDirector ='$musicDirector '";
        $musicDirectorListQueryResult = mysqli_query($conn,$musicDirectorListQuery);
        $countOfmusicDirector = mysqli_fetch_assoc($musicDirectorListQueryResult);
        $musicDirectorSuccessQuery = "SELECT COUNT(status) AS musicDirectorSuccess FROM films WHERE status='Hit' AND musicDirector='$musicDirector'";
        $musicDirectorListQueryResult = mysqli_query($conn,$musicDirectorSuccessQuery);
        $countOfmusicDirectorSuccess = mysqli_fetch_assoc($musicDirectorListQueryResult);
        $musicDirectorPercentage = ($countOfmusicDirectorSuccess['musicDirectorSuccess']/$countOfmusicDirector['musicDirectorList'])*100;

        echo "<tr><th scope='row'>Music Director</th><td>".$musicDirector."</td><td>".$countOfmusicDirector['musicDirectorList']."</td><td>".$countOfmusicDirectorSuccess['musicDirectorSuccess']."</td><td>".$musicDirectorPercentage."</td></tr>";
    ?>
   </table>

   <h3 class="text-center">Your Movie Success Preciction</h3>
   <table class="table table-bordered table-hover" id="table2">
        <thead>
            <tr>
                <th scope="col">Film Name</th>
                <th scope="col">Success Percentage</th>
                <th scope="col">Success Status</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td class="name"><?php echo $_POST['filmName']; ?></td>
                    <td id="percentage"></td>
                    <td id="status"></td>
                </tr>
        </tbody>
   </table>
</div>
<script>
            
            var table = document.getElementById("table"), sumOfPercentage = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumOfPercentage = sumOfPercentage + parseInt(table.rows[i].cells[4].innerHTML);
            }
            percentageOfSuccess = sumOfPercentage/6;
            document.getElementById("percentage").innerHTML = percentageOfSuccess;
            if(percentageOfSuccess > 80){
                document.getElementById("status").innerHTML = "Super Hit";
            }
            else if (percentageOfSuccess > 60){
                document.getElementById("status").innerHTML = "Hit";
            }
            else if (percentageOfSuccess > 40){
                document.getElementById("status").innerHTML = "Average";
            }
            else if (percentageOfSuccess > 20){
                document.getElementById("status").innerHTML = "Flop";
            }
            else if (percentageOfSuccess > 0){
                document.getElementById("status").innerHTML = "Disaster";
            }
            
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>