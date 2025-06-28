<?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;


// Create connection
$conn = new mysqli($servername, $username, $password);

$sql = "CREATE DATABASE RushiTest";

mysqli_query($conn, $sql); 

// Check connection
if (!$conn) {
    die("Sorry we failed to connect: ");
} else {
    echo "Successfully connected";
}


?>