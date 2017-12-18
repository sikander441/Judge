<?php
 include('server.php');
 if(isset($_SESSION['teamname']))
  { header('location:index.php');}
   else 
     {

 ?>



<html>
<head>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="css/signin.css" rel="stylesheet">
</head>
<body>
  <div class="container">
   <form method="post"  class="form-signin">
      <h2 class="form-signin-heading">Please sign in</h2>
     <label  class="sr-only">Team Name</label>
      <input type="text" name="teamname" class="form-control" placeholder="Username" required autofocus><br>
      <label class="sr-only">Password</label>
       <input type="password" name="password" class="form-control" placeholder="Password" required><br>
       <button type=submit name="login_btn"  class="btn btn-lg btn-primary btn-block" >Log in</button>
      <a href="register.php">Sign up</a>
   </form>
     </div>
</body>
</html>
<?php } ?>
