<?php
$mytime=gettimeofday();
$curr = (int)"$mytime[sec]";
echo $curr."<br>";
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$old = (int)fgets($myfile);
echo $old."<br>";
fclose($myfile);
$diff = (int)$curr - (int)$old;
echo "time elapsed : " . $diff ;
echo "<br>";
?>
