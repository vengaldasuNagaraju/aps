<?php
include 'connection.php';

$insertelement = "insert into usertable (frameid,stage_id,status,createdat)
 values('".$_POST["frameid"] ."',
 '".$_POST["stage_id"]."',
 '".$_POST["status"]."',
 '".$_POST["createdat"]."')";

 if($con->query($insertelement) === TRUE)
        echo "inserted";
else
        echo "not inserted";

$con->close();
