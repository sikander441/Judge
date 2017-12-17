<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
     $path = $_SESSION['path'].$pid."/";
    if(!is_dir($path)){
          mkdir($path);
          }

    $path = $path.$_SESSION['teamname']."_".date('h-m-s')."_".basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ". $_SESSION['teamname']."_".basename( $_FILES['uploaded_file']['name']).
      " has been uploaded";
      echo "<br><a href='index.php'>Go back</a>";
      $_SESSION['code']=$path;
      $teamname=$_SESSION['teamname'];
      include('db.php');
      $sql="insert into submission(teamname,pid,code) values('$teamname',$pid,'$path')";
      mysqli_query($conn,$sql);
      header("location:judge.php?pid=$pid");
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

  if(isset($_POST['code_input']))
  {
    $code= $_POST['textarea'];
    $_SESSION['source_code']=$code;
    if(empty($code))
    {
      echo '<script>alert("No code to compile");</script>';
    }
    else {
       $path = $_SESSION['path'].$pid."/";
       if(!is_dir($path)){
             mkdir($path);
             }
        $path = $path.$_SESSION['teamname']."_".date('h-m-s').'.cpp';
        $fd=fopen($path,"w");
        fwrite($fd,$code);
        $_SESSION['code']=$path;
        $teamname=$_SESSION['teamname'];
        include('db.php');
        $sql="insert into submission(teamname,pid,code) values('$teamname',$pid,'$path')";
        mysqli_query($conn,$sql);
        header("location:judge.php?pid=$pid");
    }
  }


?>

<div id="loader-wrapper" class="hidden">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
