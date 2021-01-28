<?php
   $host        = "host = 192.168.55.127";
   $port        = "port = 5432";
   $dbname      = "dbname = db_rskg_running20200103";
   $credentials = "user = postgres password=postgres";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
?>