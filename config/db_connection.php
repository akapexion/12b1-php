<?php
    
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$connection = mysqli_connect($hostname, $username, $password, $dbname);
if($connection){
    echo "DB Connected Successfully";
}
else {
    echo "Error Connecting DB";
}


?>