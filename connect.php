<?php

$server = "localhost";
$user = "root";
$dbname = "patsystem";
$pass ="";

$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error){
    echo "Erro while connecting to database";
}
else{
    echo "success";
}


?>

