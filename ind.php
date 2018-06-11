<?php
$file = fopen("tname.txt", "r") or die("Unable to open file!");
$table = fgets($file);
fclose($file);

$mytime=gettimeofday();
$curr = (int)"$mytime[sec]";
$myfile = fopen("time.txt", "r") or die("Unable to open file!");
$old = (int)fgets($myfile);
fclose($myfile);
$diff = (int)$curr - (int)$old;
echo "time elapsed : " . $diff ;
echo "<br>";
$fname = $_POST['one'];
echo "<br>".$fname."<br>";
$conn = new mysqli("localhost", "root", "", "football");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `$table` SET `$fname`=1 WHERE time = '$diff'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
require 'index.php';
 ?>
