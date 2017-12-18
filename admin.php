<?php include('server.php');
if(isset($_SESSION['teamname']))
 {
   if($_SESSION['type']=='admin')
   {
 ?>
<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
    <link href="css/index.css" rel="stylesheet">
    <script src="js/index.js"></script>
    <script src="js/admin.js"></script>

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
 <div class="container" style="padding:20px;">
   <div class="navbar navbar-light bg-faded">
     <ul class="nav navbar-nav">
       <a class="nav-item nav-link" data-toggle="tab" href="#problems">Add problems</a>
       <a class="nav-item nav-link  active" data-toggle="tab" href="#submissions">Sumbbions</a>
       <a class="nav-item nav-link" data-toggle="tab" href="#users">Users</a>
       <a class="nav-item nav-link" data-toggle="tab" href="#problems_list">Problems</a>
     </ul>
   </div>
 <div class="tab-content">
      <div class="tab-pane" id="problems">
         <form method="POST">
          <br><br>
         <div class="form-group">
            <label for="Title">Problem Title</label>
            <textarea name="title" class="form-control" id="Title" rows="3" cols="2"></textarea>
          </div>
          <div class="form-group">
             <label for="desc">Problem description</label>
             <textarea name="desc" class="form-control" id="desc" rows="3" cols="2"></textarea>
           </div>
           <div class="form-group">
              <label for="statement">Problem Statement</label>
              <textarea name="statement" class="form-control" id="statement" rows="3" cols="2"></textarea>
            </div>
            <div class="form-group">
               <label for="score">Score </label>
              <textarea name="score" class="form-control" id="score" rows="1" cols="2"></textarea>
             </div>
             <div class="form-group">
                <label for="test_cases">Number of testcases </label>
               <textarea name="test_cases" class="form-control" id="tets_cases" rows="1" cols="2"></textarea>
              </div>
         <button type="submit" name="problem_submit" class="btn btn-primary">Submit</button>
      </form>reports
</div>

  <div id="ReloadThis" class="tab-pane  active" id="submissions">
    <?php include('admin/admin_submissions.php'); ?>
  </div>
  <div class="tab-pane" id="users">
  <?php include('admin/admin_users.php'); ?>
  </div>
  <div class="tab-pane" id="problems_list">
    <?php include('admin/admin_problems.php'); ?>
  </div>
 </div>

</div>
</body>
</html>











 <?php }
     else{
           echo "<script>alert('PERMISSION TO ACCESS THIS PAGE DENIED')</script>";
             header('location:index.php');
         }
}
else {
    header('location:login.php');
}
 ?>
