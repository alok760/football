<?php
$conn = new mysqli("localhost", "root", "", "football");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
for( $i = 0; $i<5400; $i++ ){
  $sql = "INSERT INTO f1 ()
  VALUES ()";
  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
  echo "table created succesfully";

  $mytime=gettimeofday();
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  fwrite( $myfile, "$mytime[sec]" );
  fclose($myfile);
 ?>
