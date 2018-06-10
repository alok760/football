<?php
$mytime=gettimeofday();
echo "$mytime[sec]";
echo "<br>";
$prev_time = (int)readfile("newfile.txt");
echo "<br>";
echo "\n prev time".$prev_time;
?>
