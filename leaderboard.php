<?php
if(isset($_SESSION['teamname']))
 {$counter=0;
   include('db.php');
   $sql="select * from leaderboard order by score desc";
   $result=mysqli_query($conn,$sql);
  $teamname=$_SESSION['teamname'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LeaderBoard</title>

<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
 <link href="css/leaderboard.css" rel="stylesheet">
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="css/index.css" rel="stylesheet">
<script src="js/index.js"></script>
</head>
<style>
.glyphicon {
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
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
						<h2>Leaderboard</h2>
					</div>

                </div>
            </div>

            <table class="table table-striped table-hover current">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Team Name</th>
						<th>Score</th>

                    </tr>
                </thead>
                <tbody>

            <?php while( $row=mysqli_fetch_assoc($result))
            {$tn=$row['teamname'];
               ?>
                    <tr onclick="location.href='user.php?teamname=<?php echo $tn; ?>';"  class="<?php if($row['teamname']==$teamname){echo 'current';}?>">
                        <td><?php echo ++$counter;?></td>
                        <td><img src="images/user(1).svg" class="avatar" alt="Avatar" widht=36px height=36px> <?php echo $row['teamname'] ?></a></td>
                        <td><?php echo $row['score'] ?></td>

                    </tr>



          <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</body>
</html>

<?php }
else {
    header('location:login.php');
}
 ?>
