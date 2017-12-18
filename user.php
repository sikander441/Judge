<?php include('server.php');
if(isset($_SESSION['teamname']))
 {$counter=0;
 ?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/index.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">
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
 <div id="main">
<?php
  if(isset($_GET['teamname']))
  {
    $teamname=strtoupper($_GET['teamname']);
    include('db.php');
    $sql="select user1,user2 from user where teamname='$teamname'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $user1=$row['user1'];
    $user2=$row['user2'];
    $sql="SELECT COUNT(*) AS rank FROM leaderboard WHERE score>=(SELECT score FROM leaderboard WHERE teamname='$teamname')";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $rank=$row['rank'];
    $sql="SELECT (select title from problems where pid=c.pid) as title,c.score,c.pid from contest c where c.teamname='$teamname' order by c.pid";
    $result=mysqli_query($conn,$sql);

  }
?>

   <br>
   <div class="col-md-12">
       <div class="col-md-4">
           <div class="portlet light profile-sidebar-portlet bordered">
               <div class="profile-userpic">
                   <img src="images/user(1).svg" class="img-responsive" alt=""> </div>
               <div class="profile-usertitle">
                   <div class="profile-usertitle-name"> <?php echo $teamname ?></div><br>
                   <div class="profile-usertitle-job">  <?php echo $user1 ?> </div>
                    <div class="profile-usertitle-job">  <?php echo $user2 ?> </div>
               </div>
           </div>
       </div>
       <div class="col-md-8">
           <div class="portlet light bordered">
               <div class="portlet-title tabbable-line">
                  <span style="font-size:20px;" class="font-blue-madison bold uppercase pull-right">Current Rank:<b>  #<?php echo $rank; ?></b></span>
                   <div class="caption caption-md">
                       <i class="icon-globe theme-font hide"></i>
                       <span style="font-size:20px;" class="caption-subject font-blue-madison bold uppercase"><b>Sumbissions<b></span>

                   </div>
               </div>
               <div class="portlet-body">
                   <table class="table">
                       <thead>
                           <tr>
                               <th>#</th>
                               <th>Problem statement</th>
                               <th>Score</th>
                           </tr>
                       </thead>
                       <tbody>
                         <?php while( $row=mysqli_fetch_assoc($result))
                         { $pid=$row['pid'];
                            ?>
                          <tr>
                               <th scope="row"><?php echo ++$counter;?></th>
                               <td><a href="submit.php?pid=<?php echo $pid; ?>"><?php echo $row['title'] ?></a></td>
                               <td><?php echo $row['score'] ?></td>

                           </tr>
                         <?php } ?>
                       </tbody>
                   </table>
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
