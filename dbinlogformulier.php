<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo "<br>";

// een database eenmalig aangemaakt. daarom is het nu een comment 


// // Create database
// $sql = "CREATE DATABASE mydb";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }




// ook hier geldt een tabel eenmalig aangemaakt en vervolgens een comment van gemaakt. 


// $sql = "CREATE TABLE  myguests (
//     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     username VARCHAR(255) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     reg_date TIMESTAMP
//     )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table myguests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

//$conn->close();

$gebruiker = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO myguests (username, password)
VALUES ( '$password', '$gebruiker')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: "   . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
