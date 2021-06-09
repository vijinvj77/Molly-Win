<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>view filmography</title>
</head>
<body>
<h3 class="text-center">View Filmography</h3>
<div class="container">
<table class="table table-bordered table-dark" id="example">
    <thead>
    <tr>
        <th>Name</th>
        <th>Movie Name</th>
        <th>Type</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
        <?php include 'connection.php'; ?>
        <?php 
        $id = $_GET['id'];
        $celebrityDetailsQuery = "SELECT * FROM celebrities WHERE id='$id'";
        $celebrityDetailsQueryResult = mysqli_query($conn,$celebrityDetailsQuery);
        $celebrityDetails = mysqli_fetch_assoc($celebrityDetailsQueryResult);
        $celebrityName = $celebrityDetails['name'];
        $celebrityType = $celebrityDetails['celebType'];
        if($celebrityType == 'Actor'){
            $celebrityFilmListQuery = "SELECT * FROM films WHERE actor='$celebrityName'";
            $celebrityFilmListResult = mysqli_query($conn,$celebrityFilmListQuery);
        }
        else if($celebrityType == 'Actress'){
          $celebrityFilmListQuery = "SELECT * FROM films WHERE actress='$celebrityName'";
          $celebrityFilmListResult = mysqli_query($conn,$celebrityFilmListQuery);
        }
        else if($celebrityType == 'Director'){
          $celebrityFilmListQuery = "SELECT * FROM films WHERE director='$celebrityName'";
          $celebrityFilmListResult = mysqli_query($conn,$celebrityFilmListQuery);
        }
        else if($celebrityTpe == 'Producer'){
          $celebrityFilmListQuery = "SELECT * FROM films WHERE producer='$celebrityName'";
          $celebrityFilmListResult = mysqli_query($conn,$celebrityFilmListQuery);
        }
        else if($celebrityTpe == 'Music Director'){
          $celebrityFilmListQuery = "SELECT * FROM films WHERE musicDirector='$celebrityName'";
          $celebrityFilmListResult = mysqli_query($conn,$celebrityFilmListQuery);
        }
        else if($celebrityType == 'Script Writer'){
          $celebrityFilmListQuery = "SELECT * FROM films WHERE scriptWriter='$celebrityName'";
          $celebrityFilmListResult = mysqli_query($conn,$celebrityFilmListQuery);
        }
        if(mysqli_num_rows($celebrityFilmListResult)>0){
          while($celebrityFilmList = mysqli_fetch_assoc($celebrityFilmListResult)){
             echo "<tr><td>".$celebrityName."</td><td>".$celebrityFilmList['film']."</td><td>".$celebrityType."</td><td>".$celebrityFilmList['status']."</td></tr>";
          }
        }
        ?>
    </tbody>
</table>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
//   $(document).ready(function() {
//     $('#example').DataTable();
//   } );
$(document).ready( function () {
  var table = $('#example').DataTable( {
    pageLength : 5,
    lengthMenu: [[5, 10, 20], [5, 10, 20]]
  } )
} );
  </script>  
</body>
</html>