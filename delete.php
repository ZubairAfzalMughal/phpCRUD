<?php
  include_once('index.php');
    $id=$_REQUEST['id'];
    $q="DELETE FROM student WHERE id=".$id;
    $qs=mysqli_query($link,$q);

    if($qs){
        header("Refresh:0 ;url=show.php");
    }
?>