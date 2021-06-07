<?php
    include_once('index.php');

    $tq="TRUNCATE TABLE student ";
    $bol=mysqli_query($link,$tq);

    if($bol){
            header("Refresh:2; url=show.php");
    }else{
        echo "Failed";
    }
?>