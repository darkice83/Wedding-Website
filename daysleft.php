<?php 
$cdate = mktime(0, 0, 0, 9, 28, 2013);
$today = time();
$difference = $cdate - $today;
if ($difference < 0) { $difference = 0; }
echo "There are ". $difference/60/60/24 ." days remaining";
?>

