<?php include 'userValidationCheck.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
    <meta name="author" content="">
    <title>view celebrities</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="sidebar-home-content-style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'sidebar.php' ?>
    <div class="home_content">
    <nav class="navbar navbar-light" style="background: #11101d">
    <span class="navbar-brand mb-0 h1"><a class="text-white" style="text-decoration: none" href="../index.html">Molly-Win</a></span>
    </nav>
        <h3 class="text-center mt-4">View Celebrities</h3>
        <div class="container-fluid container-md">
        <table class="table table-hover table-dark" id="example">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Celeb Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include '../connection.php';
                $celebViewQuery = "SELECT * FROM celebrities";
                $celebViewQueryResult = mysqli_query($conn,$celebViewQuery);
                while($celebView = mysqli_fetch_assoc($celebViewQueryResult)){
            ?>
            <tr>
            <td class='id'><?php echo $celebView['id'];?></td>
            <td><?php echo $celebView['name'];?></td>
            <td><?php echo $celebView['celebType'];?></td>
            <td><button class='view btn btn-primary'>View</button></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        </div>
    </div>
 
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
  <script>
  $('.view').click(function(){
    var id = $(this).closest('tr').find('.id').text();
    window.open('../viewFilmography.php?id='+id, '_blank');
  });
  </script>

<script>
  $('.update').click(function(){
    var id = $(this).closest('tr').find('.id').text();
    window.open('../updateInfo.php?id='+id, '_blank');
  });
  </script>


</body>
</html>