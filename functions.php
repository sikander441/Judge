<?php
  include('paths.php');
if(!function_exists('compile'))
{
function compile()
{
  include('paths.php');
  fileempty();
  $descriptorspec = array(
     0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
     1 => array("file", $path_output,"w"),  // stdout is a pipe that the child will write to
     2 => array("file", $path_error, "w") // stderr is a file to write to
  );
  $cmd=$c_path.' '.$_SESSION['code'].' -o '.$_SESSION['path'].'a.out';
  $process = proc_open($cmd, $descriptorspec, $pipes);
  proc_close($process);
  if ( 0 == filesize($path_error ) )
  {
      return true;
  }
  return false;

}

}


if(!function_exists('fileempty'))
{
function fileempty()
{
  $path_error=$_SESSION['path'].'error.txt';
  $path_output=$_SESSION['path'].'output.txt';
  $fd=fopen($path_error,'w');
  fclose($fd);
  $fd=fopen($path_output,'w');
  fclose($fd);
}

}
if(!function_exists('millitime'))
{
function millitime() {
  $microtime = microtime();
  $comps = explode(' ', $microtime);

  // Note: Using a string here to prevent loss of precision
  // in case of "overflow" (PHP converts it to a double)
  return sprintf('%d%03d', $comps[1], $comps[0] * 1000);
}
}





if(!function_exists('verdict'))
{
function verdict($infile)
{

    $val=1;
   fileempty();
   include('paths.php');
   $descriptorspec = array(
      0 => array("file", $infile,'r'),  // stdin is a pipe that the child will read from
      1 => array("file", $path_output,"w"),  // stdout is a pipe that the child will write to
      2 => array("file", $path_error, "w") // stderr is a file to write to
   );
   $cmd=$a_path;
   $process = proc_open($cmd, $descriptorspec, $pipes);
   $time_limit=2000;
   $t_start= millitime();
   do {
    if( (millitime()-$t_start)>$time_limit )
    {
      proc_terminate($process);
      proc_close($process);
      return 'TLE';
    }
     $status = proc_get_status($process);
   } while ($status['running'] == true);
  echo (millitime()-$t_start)/1000;
}

}

?>
