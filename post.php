<?php
  $mytime=gettimeofday();
  echo "$mytime[sec]";

  $filename = "newfile.txt";
   $file = fopen( $filename, "w" );

   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }
   fwrite( $file, "$mytime[sec]" );
   fclose( $file );
 ?>
