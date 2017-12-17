<?php include('server.php');
if(isset($_SESSION['teamname']))
 {
 ?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
        	margin: 20px;
        }
    </style>
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
 <div id="main" style="padding-left:150px; padding-right: 170px; padding-top: 100px;">
   <div class="bs-example">
       <div class="panel panel-default">
           <div class="panel-body">
             <h1>Instructions!</h1>

             <h3><li>There are total 6 problems and you will be given 3 hous to complete them</li><br>
             <li>Each question will have some test cases on which we will check your code</li><br>
             <li>You have to upload your with .cpp extesion </li><br>
             <li>you can see your score on leaderboard on the right navgiational pane</li><br>
           </h3>

           </div>
           <div class="panel-footer clearfix">
               <div class="pull-right">
                   <a href="problems.php" class="btn btn-primary">Continue</a>

               </div>
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
