<?php

//Connection to database
$errors=array();
include('db.php');


//if register button is clicked
if(isset($_POST['register'])){
   $teamname=$_POST['teamname'];
   $password=($_POST['password']);
   $password2=($_POST['password2']);
   $user1=$_POST['user1'];
   $email1=$_POST['email1'];
   $user2=$_POST['user2'];
   $email2=$_POST['email2'];


  if($password != $password2)
  {
    array_push($errors,'<div class="container"><div class="alert alert-danger">
  <strong>Alert!</strong>Passwords donot match!.
  </div></div>');
 }
 $sql="select count(*) as c from user where teamname='$teamname'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);

  if(count($errors) >=1)
  {
    foreach ($errors as $error) {
      echo $error;
    }
  }
  else if($row['c']==0){

   $password=md5($password);
    $sql="Insert into user values('$teamname','$password','$user1','$user2','$email1','$email2','user')";
    echo mysqli_query($conn,$sql);
    $sql="insert into  leaderboard(teamname,score) values('$teamname',0)";
    echo mysqli_query($conn,$sql);
    $_SESSION['teamname']=$teamname;
    $_SESSION['user1']=$user1;
    $_SESSION['user2']=$user2;
    $_SESSION['email1']=$email1;
    $_SESSION['email2']=$email2;
    $_SESSION['path']="uploads/".$_SESSION['teamname']."/";
    mkdir($_SESSION['path']);

    header('location:index.php');
  }
 else {
   echo "<script>alert('User already exists')</script>";
 }

}

//Login
if(isset($_POST['login_btn'])){

$errors=array();
$teamname=$_POST['teamname'];
$password=$_POST['password'];
$password=md5($password);

$sql="select count(*) as c from user where teamname='$teamname' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

  if($row['c']!=0){
       $sql="select * from user where teamname='$teamname'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($result);
       $_SESSION['teamname']=$row['teamname'];
       $_SESSION['user1']=$row['user1'];
       $_SESSION['user2']=$row['user2'];
       $_SESSION['email1']=$row['email1'];
       $_SESSION['email2']=$row['email2'];
       $_SESSION['path']="uploads/".$_SESSION['teamname']."/";
       $sql="select type  from user where teamname='$teamname' and password='$password'";
       $result=mysqli_query($conn,$sql);
       $row=mysqli_fetch_assoc($result);
       $_SESSION['type']=$row['type'];
       header('location:index.php');

}
else {
  echo '<div class="container"><div class="alert alert-danger">
<strong>Wrong</strong>  username or password!.
</div></div>';
}
}
//logout
if(isset($_GET['logout']))
{
  session_destroy();
  unset($_SESSION['teamname']);
  unset($_SESSION['user1']);
  unset($_SESSION['user2']);
  unset($_SESSION['email1']);
  unset($_SESSION['email2']);
  unset($_SESSION['path']);
  header('location:index.php');
}





//admin problem Submit

if(isset($_POST['problem_submit']))
{
  $title=nl2br($_POST['title']);
  $desc=nl2br($_POST['desc']);
  $statement=nl2br($_POST['statement']);
  $score=$_POST['score'];
  $test_cases=$_POST['test_cases'];
  if(empty($title) || empty($desc) || empty($statement) || empty($score) || empty($test_cases))
  {
   echo "<script>alert('No field can be blank')</script>";
  }
  else {
    $score=(int)$score;
    $sql="insert into problems(title,statement,score,description,test_cases) values('$title','$statement',$score,'$desc','$test_cases')";
    mysqli_query($conn,$sql);
    $sql="select pid,test_cases from problems where title='$title' and score='$score'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $pid=$row['pid'];
    $tno=$row['test_cases'];
    echo "<script>alert('Problem succesfully added!')</script>";
    echo "<script>alert('Add the test cases in the problem folder in $pid')</script>";
    $path="problems/$pid";
        if(!is_dir($path)){
          mkdir($path);
          mkdir($path.'/input');
          mkdir($path.'/output');
          }
          for($i=1;$i<=$tno;$i+=1)
          {
            $fd=fopen($path.'/input//'.$i.'.in','w');
            fclose($fd);
            $fd=fopen($path.'/output//'.$i.'.out','w');
            fclose($fd);
          }
  }

}







?>
