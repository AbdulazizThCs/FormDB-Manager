<?php
// Database connection parameters
$servername   = "localhost";
$username     = "root";
$password     = "";
$dbname       = "my_website";

// Create DB connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection success
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Toggle user status if 'toggle' GET parameter exists
if (isset($_GET['toggle'])) {
  $id     = intval($_GET['toggle']);
  $rowRes = $conn->query("SELECT Status FROM users WHERE ID = $id");
  
  if ($rowRes && $rowRes->num_rows) {
    $status    = $rowRes->fetch_assoc()['Status'];
    $newStatus = $status == 0 ? 1 : 0;
    $conn->query("UPDATE users SET Status = $newStatus WHERE ID = $id");
  }

  // Redirect back to table page after update
  header("Location: table.php");
  exit();
}

// Fetch all user records
$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registered Users</title>

  <!-- Website favicon icon link -->
  <link rel="icon" type="image/x-icon" href="favicon01.ico">

  <!-- Boxicons CDN for icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

  <!-- Main stylesheet -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Table container -->
  <div class="table-container">

    <!-- Title above the table -->
    <h2 class="table-title">Registered Users</h2>

    <!-- Users data table -->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- Display each user row -->
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($row['ID']) ?></td>
            <td><?= htmlspecialchars($row['Name']) ?></td>
            <td><?= htmlspecialchars($row['Age']) ?></td>
            <td><?= htmlspecialchars($row['Status']) ?></td>
            <td>
              <!-- Toggle button link -->
              <a href="?toggle=<?= intval($row['ID']) ?>">
                <button class="toggle-btn">Toggle</button>
              </a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>

    <!-- Back button at the bottom -->
    <div class="back-btn-container">
      <a href="index.html" class="back-btn">Back</a>
    </div>

  </div>

</body>
</html>

<?php
// Close database connection
$conn->close();
?>

