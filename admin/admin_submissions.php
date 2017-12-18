<?php
  include('db.php');
 $sql="select * from submission order by time_stamp DESC";
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
                                <th  width="20%">time_stamp </th>
                                <th  width="20%">teamname</th>
                                <th width="10%">problem id</th>
                                <th width="50%">code location</th>

                        </tr>
                        </thead>
                        <tbody>
                          <?php while( $row=mysqli_fetch_assoc($result))
                          {
                             ?>
      <tr>
             <td><?php echo $row['time_stamp'] ?></td>
              <td><?php echo $row['teamname'] ?></td>
              <td><?php echo $row['pid'] ?></td>
              <td><a target="_blank" href="<?php echo $row['code'] ?>"><?php echo $row['code'] ?></a></td>

      </tr>
<?php }  ?>
                        </tbody>
                </table>
                </div>
        </div>
        </body>
</html>
