<?php
if(isset($_SESSION['teamname']))
 {$counter=0;
   include('db.php');
   $sql="select * from problems order by score";
   $result=mysqli_query($conn,$sql);
 ?>
<html>
<head>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>

</head>
<style type="text/css">
.glyphicon-tasks {
    font-size: 45px;

}
.bs-example{
  margin: 30px;
}
#main{
  padding-left:150px; padding-right: 170px; padding-top: 50px;
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
 <div id="main">
   <div class="bs-example">
     <?php while($row=mysqli_fetch_assoc($result))
     {
        ?>
       <div class="panel panel-default">
           <div class="panel-heading">

               <h1 class="panel-title"><?php echo ++$counter.".) " ?><b><?php echo $row['title'] ?></b><span class="pull-right">Score:<?php echo $row['score'];?></span></h1>
           </div>
           <div class="panel-body"><?php echo $row['description'] ?></div>
       <div class="panel-footer clearfix">
            <div class="pull-right">
                <a href="submit.php?pid=<?php echo $row['pid'];?>" class="btn btn-primary">Submit</a>
            </div>
        </div>
   </div>
   <?php } ?>
</div>
</div>
</body>
</html>











<?php }
else {
    header('location:login.php');
}
 ?>
