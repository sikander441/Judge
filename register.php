<?php include('server.php'); ?>

<html>
<head>
  <title>Team register</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
  <div class="container">







            <form class="form-horizontal" role="form"  method="post">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="TeamName" class="col-sm-3 control-label" required>Team name</label>
                    <div class="col-sm-9">
                        <input required type="text" id="teamName" placeholder="TeamName" class="form-control" autofocus name='teamname'>
                        <span class="help-block">NOTE:Make sure Teamname contains no spaces</span>
                    </div>

                </div>

                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input data-match="#password2" required name="password" type="password" id="password1" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input required name="password2" type="password" id="password2" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user1" class="col-sm-3 control-label">Username of first member</label>
                    <div class="col-sm-9">
                        <input required type="text" id="user1" placeholder="UserName1" class="form-control" autofocus name='user1'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email1" class="col-sm-3 control-label">Email if of first member</label>
                    <div class="col-sm-9">
                        <input required type="email" id="email1" placeholder="Email1" class="form-control" name="email1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user2" class="col-sm-3 control-label">Username of second member</label>
                    <div class="col-sm-9">
                        <input required type="text" id="user2" placeholder="UserName2" class="form-control" autofocus name='user2'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email2" class="col-sm-3 control-label">Email if of second member</label>
                    <div class="col-sm-9">
                        <input required type="email" id="email2" placeholder="Email2" class="form-control" name="email2">
                    </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-9 col-sm-offset-3">
                       <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                   </div>
               </div>
            </form> <!-- /form -->
        </div> <!-- ./container --><div class="container">

</body>
