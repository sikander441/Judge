<?php
  include('db.php');
 $sql="select teamname,user1,email1,user2,email2 from user";
  $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
    <head>

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <div class="col-md-10 col-md-offset-1">
                <h1>Sumbissions</h1>
                <table class="table table-striped table-condensed table-bordered table-rounded">
                        <thead>
                                <tr>
                                <th width="20%">Teamname</th>
                                <th width="20%">User 1</th>
                                <th width="20%">Email 1</th>
                                <th width="20%">User 2</th>
                                <th width="20%">User 2</th>

                        </tr>
                        </thead>
                        <tbody>
                          <?php while( $row=mysqli_fetch_assoc($result))
                          {
                             ?>
      <tr>
              <td><a href="user.php?teamname=<?php echo $row['teamname']; ?>"><?php echo $row['teamname'] ?></a></td>
             <td><?php echo $row['user1'] ?></td>
              <td><?php echo $row['email1'] ?></td>
              <td><?php echo $row['user2'] ?></td>
              <td><?php echo $row['email2'] ?></td>


      </tr>
<?php }  ?>
                        </tbody>
                </table>
                </div>
        </div>
        </body>
</html>
