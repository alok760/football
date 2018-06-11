<?php

$name=$_POST['tname'];
$conn = new mysqli("localhost", "root", "", "football");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE `$name` (
 `time` int(5) NOT NULL AUTO_INCREMENT,
 `adidas` bit(1) NOT NULL DEFAULT b'0',
 `goal` bit(1) NOT NULL DEFAULT b'0',
 `mcdonalds` bit(1) NOT NULL DEFAULT b'0',
 `mengniu` bit(1) NOT NULL DEFAULT b'0',
 `vivo` bit(1) NOT NULL DEFAULT b'0',
 `offsides` bit(1) NOT NULL DEFAULT b'0',
 `wandagroup` bit(1) NOT NULL DEFAULT b'0',
 `budweiser` bit(1) NOT NULL DEFAULT b'0',
 `penalty` bit(1) NOT NULL DEFAULT b'0',
 `qatarairways` bit(1) NOT NULL DEFAULT b'0',
 `mengniu1` bit(1) NOT NULL DEFAULT b'0',
 `gazprom` bit(1) NOT NULL DEFAULT b'0',
 `cocacola` bit(1) NOT NULL DEFAULT b'0',
 `wandagroup1` bit(1) NOT NULL DEFAULT b'0',
 `substitution` bit(1) NOT NULL DEFAULT b'0',
 `visa` bit(1) NOT NULL DEFAULT b'0',
 `misses` bit(1) NOT NULL DEFAULT b'0',
 `fifa` bit(1) NOT NULL DEFAULT b'0',
 `interestingmoment` bit(1) NOT NULL DEFAULT b'0',
 `closeupshots` bit(1) NOT NULL DEFAULT b'0',
 `hyundaimotor` bit(1) NOT NULL DEFAULT b'0',
 `cardred` bit(1) NOT NULL DEFAULT b'0',
 `cardyellow` bit(1) NOT NULL DEFAULT b'0',
 `save` bit(1) NOT NULL DEFAULT b'0',
 PRIMARY KEY (`time`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1";

if ($conn->query($sql1) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

for( $i = 0; $i<5400; $i++ ){
  $sql = "INSERT INTO `$name` ()
  VALUES ()";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
  echo "table created succesfully";

$conn->close();

  $mytime=gettimeofday();
  $myfile = fopen("time.txt", "w") or die("Unable to open file!");
  fwrite( $myfile, "$mytime[sec]" );
  fclose($myfile);

  $file = fopen("tname.txt", "w") or die("Unable to open file!");
  fwrite( $file, "$name" );
  fclose($file);

  echo "<h2>"."do not reload this page"."</h2>";
  require 'index.php';
?>
