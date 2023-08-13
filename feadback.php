
<?php
include 'index.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mynew";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feadback ( name, email,C_number, message)
VALUES ('$_POST[name]','$_POST[email]','$_POST[C_number]','$_POST[message]')";

if ($conn->query($sql) === TRUE) {
     echo "Your Information Saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
