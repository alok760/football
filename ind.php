<?php

$mytime=gettimeofday();
$curr = (int)"$mytime[sec]";
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
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

$sql = "UPDATE f1 SET `$fname`=1 WHERE time = '$diff'";


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


 ?>

 <!Doctype html>
 <html>
     <head>
         <title>football</title>
         <link rel="stylesheet" href="./style.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     </head>
     <body>
         <div class="container">
             <div class="row">
                 <button id="str" class="btn btn-block" onclick="start()">START</button>
             </div>
             <form action="ind.php" method="POST">
             <div class="row wrap_row">
                 <div class="col-sm-6">
                     <div class="col-sm-11">
                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3" name="one" value="adidas">Adidas</buttom>
                                     <button class="btn btn-block col-sm-3" name="one" value="goal">goal</buttom>
                                     <button class="btn btn-block col-sm-3" name="one" value="mcdonalds">Mcdonalds</button>
                                     <div class="mx-auto text-center ss"><b>A</b></div>
                         </div>

                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3" name="one" value="mengniu">Mengniu</buttom>
                                     <button class="btn btn-block col-sm-3" name="one" value="vivo">Vivo</buttom>
                                     <button class="btn btn-block col-sm-3" name="one" value="offsides">Off-Sides</button>
                                     <div class="mx-auto text-center ss"><b>B</b></div>
                         </div>

                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3" name="one" value="wandagroup">Wanda-Group</buttom>
                                     <button class="btn btn-block col-sm-3" name="one" value="budweiser">Budweiser</buttom>
                                     <button class="btn btn-block col-sm-3" name="one" value="penalty">penalty</button>
                                     <div class="mx-auto text-center ss"><b>C</b></div>
                         </div>

                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</button>
                                     <div class="mx-auto text-center ss"><b>D</b></div>
                         </div>



                     </div>
                 </div>

                 <div class="col-sm-6">
                     <div class="col-sm-11">
                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</button>
                                     <div class="mx-auto text-center ss"><b>E</b></div>
                         </div>

                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</button>
                                     <div class="mx-auto text-center ss"><b>F</b></div>
                         </div>

                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</button>
                                     <div class="mx-auto text-center ss"><b>G</b></div>
                         </div>

                         <div class="row my_row border">
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</buttom>
                                     <button class="btn btn-block col-sm-3">Attri</button>
                                     <div class="mx-auto text-center ss"><b>H</b></div>
                         </div>



                     </div>
                 </div>

             </div>
           </form>

         </div>
     </body>

 </html>
