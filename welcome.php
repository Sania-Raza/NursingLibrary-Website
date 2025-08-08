<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "user_auth";

// Connect to database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user data
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container" style="width: 600px; height: 300px;">
    <div class="right-panel" style="width: 100%;">
      <div class="form-box">
        <h2>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</h2>
        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
        <p>Phone: <?php echo htmlspecialchars($user['phone']); ?></p>
        <a href="logout.php" class="logout-btn" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 5px;">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>