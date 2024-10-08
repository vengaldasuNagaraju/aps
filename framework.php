<?php

include 'connection.php';

$insert_sql = "insert into framework (stage_id ,name ,start_date,end_date)
values('" .$_POST["stage_id"]."',
'". $_POST["name"] ."',
'". $_POST["start_date"] ."',
'". $_POST["end_date"] ."')";

if ($con->query($insert_sql) === TRUE)
        echo "Sucessful";
else
        echo "failed" . $con->error;
    
$con->close();
