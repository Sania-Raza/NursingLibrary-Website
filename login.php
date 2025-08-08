<?php
session_start();

// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "nursing_library";

// Connect to database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables
$email = $password = "";
$error = "";

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Basic validation
    if (empty($email) || empty($password)) {
        $error = "Email and password are required!";
    } else {
        // Admin check
        if ($email == "admin@gmail.com" && $password == "admin123") {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['user_id'] = 2;
            $_SESSION['user_name'] = "Admin";
            header("Location: admin_dashboard.php");
            exit();
        }
        
        // Regular user check
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['admin_logged_in'] = false;
                header("Location: index.php");
                exit();
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "User not found!";
        }
    }
}

// Check for successful signup redirect
if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
    $success = "Signup successful! Please login.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Login</title>
  <link rel="stylesheet" href="stylelogin.css" />
  <!-- Font Awesome for eye icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body style="touch-action: manipulation;">
  <div class="container">
    <div class="left-panel">
      <img src="img.png" alt="Nursing Library Image">
    </div>
    <div class="right-panel">
      <div class="form-box">
        <h2>Login to your account</h2>
        <?php if (!empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php elseif (isset($success)): ?>
            <div class="success-message"><?php echo $success; ?></div>
        <?php endif; ?>
        <form id="loginForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="email" name="email" placeholder="Email" required value="<?php echo htmlspecialchars($email); ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
          <div class="password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password" required minlength="6" />
            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
          </div>
          
          <button type="submit">Login</button>
          <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
      </div>
    </div>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });

    document.addEventListener('DOMContentLoaded', function() {
      const inputs = document.querySelectorAll('input');
      inputs.forEach(input => {
        input.addEventListener('focus', function() {
          window.scrollTo(0, 0);
          document.body.style.zoom = "1.0";
        });
      });
      
      const form = document.querySelector('form');
      form.addEventListener('submit', function(e) {
        setTimeout(() => {
          window.scrollTo(0, 0);
        }, 100);
      });
    });
  </script>
</body>
</html>