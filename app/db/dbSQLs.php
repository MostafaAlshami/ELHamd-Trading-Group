<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sw";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
/*$sql = "CREATE TABLE address (
address_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
country VARCHAR(20),
city VARCHAR(20),
district VARCHAR(20),
street VARCHAR(20),
building VARCHAR(20),
postcode VARCHAR(20)
)";*/


$sql = "CREATE TABLE Company (
    company_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    company_name VARCHAR(20),
    email VARCHAR(50),
    url VARCHAR(50),
    phoneNumber INT(30),
    type VARCHAR(20),
    addressID INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY (addressID) REFERENCES address(address_id)
    )";



if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>