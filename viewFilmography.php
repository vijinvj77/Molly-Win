<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
    <meta name="author" content="">
    <title>view crews</title>
    <link rel="stylesheet" href="sidebar-home-content-style.css" type="text/css">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
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
        <h3 class="text-center mt-4">View Crew</h3>
        <div class="container">
        <table class="table table-hover table-dark" id="example">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Film Name</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include '../connection.php';
                $id = $_GET['id'];
                $viewFilmographyQuery = "SELECT * FROM filmography WHERE id='$id'";
                $viewFilmographyQueryResult = mysqli_query($conn,$viewFilmographyQuery);
                while($viewFilmography = mysqli_fetch_assoc($viewFilmographyQueryResult)){
            ?>
            <tr>
            <td class='id'><?php echo $celebView['id'];?></td>
            <td><?php echo $celebView['name'];?></td>
            <td><?php echo $celebView['celebType'];?></td>
            <td><button class='view btn btn-primary'>View</button><button class='update btn btn-warning ml-2'>Update</button></td>
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
  $(document).ready(function() {
    $('#example').DataTable();
  } );
  </script>
  <script>
  $('.view').click(function(){
    var id = $(this).closest('tr').find('.id').text();
    window.location.href="../viewFilmography.php?id="+id;
  });
  </script>


</body>
</html>