<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery-3.5.1.min.js"></script>
    <title>actors</title>
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
    <a class="nav-link" href="addactors.php">Add Actors</a>
  </li>
</ul>
<div class="container">
<table id="example" class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include '../connection.php';
    $displayActorsQuery = "SELECT * FROM celebrities WHERE celebType='actor'";
    $displayActorsQueryResult = mysqli_query($conn,$displayActorsQuery);
    if(mysqli_num_rows($displayActorsQueryResult)>0){
        while($data = mysqli_fetch_assoc($displayActorsQueryResult)){
            echo "<tr><td class='id'>".$data['id']."</td><td>".$data['name']."<td><button class='btn btn-primary update'>Update</button><button class='btn btn-info view ml-2'>View</button></td></td></tr>";
        }
    }
    ?>
  </tbody>
</table>
</div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
  } );
  $(.update).click(function(){
    var id= $(this).closest('tr').find('.id').text();
    window.location.href='updateActor.php'?id="+id";
  });
</script>

</body>
</html>