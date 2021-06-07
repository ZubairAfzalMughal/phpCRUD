<?php
   
   $user="root";
   $password="";
   $db="university";
   $server="localhost";

   $link=mysqli_connect($server,$user,$password);

//    if($link){
//        echo("Link is established \n");
//    }

   $link_db=mysqli_select_db($link,$db);

//    if($link_db){
//        echo("\nDatabase is connected\n");
//    }
?>
