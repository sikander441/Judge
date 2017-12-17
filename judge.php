<?php
      include('functions.php');
if(isset($_SESSION['teamname']))
 {
 ?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="css/index.css" rel="stylesheet">

    <script src="js/index.js"></script>

</head>
<style>
.glyphicon-tasks {
    font-size: 45px;
}
</style>


<body>
 <div id="mySidenav" class="sidenav">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

   <a class= "glyphicon glyphicon-menu-right" href="problems.php"> Problems</a>
    <a  class="glyphicon glyphicon-fire" href="leaderboard.php"> Leaderboard</a>
    <a class="t glyphicon glyphicon-user  " href="admin.php"> Admin</a>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <a class="glyphicon glyphicon-remove" href="index.php?logout=1"> Logout?</a>
 </div>

 <!-- Use any element to open the sidenav -->
 <span onclick="openNav()" class="glyphicon glyphicon-tasks">MENU</span>

 <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
 <div id="main" style="padding-top=20px;">
   <div class="container" ><br><br>
     <div class="bs-example">
       <div class="panel panel-default">

   <?php
   if(!isset($_SESSION['code'])){
    echo "ERROR";}
    else {
        $success=compile();
        if($success)
        {?>

          <div class="panel-heading ">

              <h1 class="panel-title ">Succesfull compiled</h1>
          </div><?php
          include('run.php');
        }
        else {?>
          <div class="panel-heading well">

              <h1 class=" label label-danger panel-title">Compilation error</h1>
          </div>
           <div class="panel-body">
          <?php echo nl2br(file_get_contents($path_error));
          ?>
          </div>
          <?php
        }

    }
    ?>
    </div>
  </div>
</div>
</div>
</body>
</html>











<?php }
else {
    header('location:login.php');
}
 ?>
