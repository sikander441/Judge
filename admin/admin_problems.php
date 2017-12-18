<?php
  include('db.php');
 $sql="select * from problems";
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
                                <th width="5%">pid</th>
                                <th width="10%">title</th>
                                <th width="75%">statement</th>
                                <th width="5%">score</th>
                                <th width="5%">test_cases</th>

                        </tr>
                        </thead>
                        <tbody>
                          <?php while( $row=mysqli_fetch_assoc($result))
                          {
                             ?>
      <tr>
             <td><?php echo $row['pid'] ?></td>
              <td><a href="submit.php?pid=<?php echo $row['pid']; ?>"><?php echo $row['title'] ?></a></td>
              <td><?php echo $row['statement'] ?></td>
              <td><?php echo $row['score'] ?></td>
              <td><?php echo $row['test_cases'] ?></td>


      </tr>
<?php }  ?>
                        </tbody>
                </table>
                </div>
        </div>
        </body>
</html>
