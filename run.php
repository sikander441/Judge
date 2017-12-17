<?php
include('paths.php');
include('functions.php');
include('db.php');
?>
<html>
<head>

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="css/run.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php

$pid=$_GET['pid'];
$sql="select test_cases from problems where pid=$pid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$score=0;
 for($counter=1;$counter<=$row['test_cases'];$counter++){?><ul class="featureList"><?php
   unlink($path_output);
   unlink($path_error);
   $infile="problems/".$pid.'/'.'input/'.$counter.'.in';
   $outfile="problems/".$pid.'/'.'output/'.$counter.'.out';
   fileempty();

   $val=verdict($infile);

   if($val=='error')
   {
     echo file_get_contents($pathashboard/_error);
   }
   else if($val=='TLE')
   {
     ?> <li style="margin-left: -1.3em;"><span class="glyphicon glyphicon-dashboard"></span> Test Case #<?php echo $counter;?></li><?php
   }
   else{


  if(trim(file_get_contents($outfile))==trim(file_get_contents($path_output))){
    $score+=10;
  ?> <li class="tick">Test Case #<?php echo $counter;?></li><?php
   }
  else {
  ?> <li class="cross">Test Case #<?php echo $counter;?></li><?php
  }

}

  ?> </ul><?php
 }
 ?><p class="pull-right">SCORE : <?php echo $score;?></p><?php
 $teamname=$_SESSION['teamname'];
 $pid=$_GET['pid'];
 $sql="select score,count(*) as c from contest where pid=$pid and teamname='$teamname'";
 $result=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($result);
 if($row['c']==1){
   if($row['score']<$score)
   {
        $sql="update contest set score=$score where pid=$pid and teamname='$teamname'";
        mysqli_query($conn,$sql);
        $score=$score-$row['score'];
        $sql="update leaderboard set score=score+$score where teamname='$teamname'";
        mysqli_query($conn,$sql);
   }

}
else if($row['c']==0){
  $sql="insert into contest(teamname,pid,score) values('$teamname',$pid,$score)";
  mysqli_query($conn,$sql);
  $sql="update leaderboard set score=score+$score where teamname='$teamname'";
  mysqli_query($conn,$sql);
}
else {
  echo "<h1>CONTACT ADMIN NOW YOUR SCORE WONT VIEW ON LEADERBOARD</h1>";
}
 ?>
