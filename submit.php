<?php include('server.php');

if(isset($_SESSION['teamname']))
 {
   include('db.php');
   $pid=(int)$_GET['pid'];
   $sql="select * from problems where pid=$pid";
   $result=mysqli_query($conn,$sql);
 ?>
<html>
<head>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="cmirror/lib/codemirror.js"></script>
  <script type="text/javascript" src="cmirror/mode/clike/clike.js"></script>
  <script type="text/javascript" src="js/default.js"></script>
  <link rel="stylesheet" type="text/css" href="cmirror/lib/codemirror.css">
  <link rel="stylesheet" type="text/css" href="cmirror/theme/cobalt.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>
   <link href="css/register.css" rel="stylesheet">
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
<div class="container" style="padding-top:50px;">
  <div class="panel panel-default">
      <div class="panel-heading">
  <?php while($row=mysqli_fetch_assoc($result))
  {
     ?>
           <h2><?php echo $row['title'];?></h2>
           <h4><?php echo $row['description'];?></h4>
            <br><?php echo $row['statement'];?>

      <?php }include('upload.php');
       ?>
<br><br>
</div>

</div>

<form name="source_code" method="post">
	<textarea class="codemirror-textarea" name="textarea" ><?php if(isset($_SESSION['source_code'])) {echo $_SESSION['source_code']; }?></textarea>
	<br>
	<input type="submit" name="code_input"  onclick="unhide(this, 'loader-wrapper') " value="Submit">
</form>






<form enctype="multipart/form-data" method="POST">
  <p>Upload your Solution *.cpp</p>
  <input type="file" name="uploaded_file"></input>
<input type="submit" value="Upload" onclick="unhide(this, 'loader-wrapper') "></input>
</form>
</div>





</div>
</body>
</html>











<?php }
else {
    header('location:login.php');
}
 ?>
