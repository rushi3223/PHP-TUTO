<?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Sorry we failed to connect: ");
} else {
    echo "Successfully connected";
}

?>