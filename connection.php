<?php
 
   $servername="localhost";
   $username="Light";
   $password="Light";
   $db_name = "restapitable";
   $connection = new mysqli($servername,$username,$password,$db_name);
   
   if($connection-> connect_error){
      die($connection-> connect_error);
     }
   echo "SUCCESS";  
?>