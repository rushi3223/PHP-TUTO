<?php

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "RushiTest";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error() );
} else {
    echo "Successfully connected";
}

// Select the database
$conn->select_db($dbname);

// Create table if it doesn't exist
$createTableSql = "CREATE TABLE IF NOT EXISTS `test` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)";

if ($conn->query($createTableSql) === TRUE) {
    echo "<br>Table checked/created successfully.";
} else {
    echo "<br>Error creating table: " . $conn->error;
}

// Prepare data
$users = [
    ['Rushi', 'rushi@gmail.com', '12345'],
    ['Rushi2', 'xyz', '12345'],
    ['Rushi3', 'abc', '12345'],
    ['Rushi4', 'pqr', '12345'],
    ['Rushi5', 'lmn', '12345'],
];

foreach ($users as $user) {
    $name = $user[0];
    $email = $user[1];
    $password = $user[2];
    // Always hash the password before storing
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO `test` (`name`, `email`, `password`) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashedPassword);
    if ($stmt->execute()) { 
        echo "<br>Record for $name inserted successfully";
    } else {
        echo "<br>Error inserting record for $name: " . $stmt->error;
    }
    $stmt->close();
}

?>