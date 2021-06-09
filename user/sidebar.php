
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="sidebar">
    <div class="logo_content">
      <div class="logo">
      </div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav_list">
      <li>
        <a href="user-homepage.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
      <li>
        <a href="viewCelebrities.php">
          <i class='bx bx-user' ></i>
          <span class="links_name">View Celebrities</span>
        </a>
        <span class="tooltip">Celebrities</span>
      </li>
      <li>
        <a href="viewFilms.php">
          <i class='bx bx-film' ></i>
          <span class="links_name">View Film</span>
        </a>
        <span class="tooltip">View Film</span>
      </li>
      <li>
        <a href="checkSuccess.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="links_name">Check Success</span>
        </a>
        <span class="tooltip">Success</span>
      </li>
    </ul>
    <div class="profile_content">
      <div class="profile">
        <form action="" method="POST">
        <a href="../logout.php" class="text-white"><i class='bx bx-log-out' id="log_out" name="logout"></i></a>
        </form>
      </div>
    </div>
  </div>

  <script>
   let btn = document.querySelector("#btn");
   let sidebar = document.querySelector(".sidebar");
   let searchBtn = document.querySelector(".bx-search");

   btn.onclick = function() {
     sidebar.classList.toggle("active");
     if(btn.classList.contains("bx-menu")){
       btn.classList.replace("bx-menu" , "bx-menu-alt-right");
     }else{
       btn.classList.replace("bx-menu-alt-right", "bx-menu");
     }
   }
   searchBtn.onclick = function() {
     sidebar.classList.toggle("active");
   }
  </script>

</body>
</html>
