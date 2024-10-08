<?php

include 'connection.php';

$getquery="select * from framework where name='naga'";

$table=$con->query($getquery);






$con->close();
