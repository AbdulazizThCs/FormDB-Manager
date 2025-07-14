<?php
// ====== Database Connection Settings ======
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "my_website";

// ====== Create Database Connection ======
$conn = new mysqli($servername, $username, $password, $dbname);

// ====== Check Connection ======
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ====== Get Form Data from POST ======
$name = $_POST['name'];
$age  = $_POST['age'];

// ====== Insert Data into 'users' Table ======
$sql = "INSERT INTO users (name, age, status) VALUES ('$name', '$age', 0)";

// ====== Check Insert Result ======
if ($conn->query($sql) === TRUE) {
  // Redirect to Table Page on Success
  header("Location: Table.php");
  exit();
} else {
  // Display Error if Query Fails
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// ====== Close Database Connection ======
$conn->close();
?>
