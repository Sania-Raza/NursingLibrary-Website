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
$name = $phone = $email = $password = "";
$error = "";

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    
    // Basic validation
    if (empty($name) || empty($phone) || empty($email) || empty($password)) {
        $error = "All fields are required!";
     }
    // elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $error = "Invalid email format!";
    // } elseif (!preg_match('/^[0-9]{10,15}$/', $phone)) {
    //     $error = "Phone number must be 10-15 digits!";
    // } else {
    //     // Check if email already exists
    //     $check_email = "SELECT * FROM users WHERE email='$email'";
    //     $result = mysqli_query($conn, $check_email);
        
    //     if (mysqli_num_rows($result) > 0) {
    //         $error = "Email already exists!";
    //     } else {
    //         // Hash the password
    //         $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert into database
            $sql = "INSERT INTO users (name, phone, email, password) 
                    VALUES ('$name', '$phone', '$email', '$hashed_password')";
            
            if (mysqli_query($conn, $sql)) {
                header("Location: login.php?signup=success");
                exit();
            } else {
                $error = "Error: " . mysqli_error($conn);
            }
        }
    //}
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Sign Up</title>
  <link rel="stylesheet" href="stylelogin.css" />
  <!-- Font Awesome for eye icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body style="touch-action: manipulation;">
  <div class="container">
    <div class="left-panel">
      <img src="img.png" alt="Nursing Library">
    </div>
    <div class="right-panel">
      <div class="form-box">
        <h2>Create your account</h2>
        <?php if (!empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        <form id="signupForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="text" name="name" placeholder="Full Name" required value="<?php echo htmlspecialchars($name); ?>" />
          <input type="tel" name="phone" placeholder="Phone Number" required value="<?php echo htmlspecialchars($phone); ?>" pattern="[0-9]{10,15}" title="10-15 digit phone number" />
          <input type="email" name="email" placeholder="Email" required value="<?php echo htmlspecialchars($email); ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
          <div class="password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password" required minlength="6" />
            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
          </div>
          
          <button type="submit">Sign Up</button>
          <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
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
      
      // const form = document.querySelector('form');
      // form.addEventListener('submit', function(e) {
      //   setTimeout(() => {
      //     window.scrollTo(0, 0);
      //   }, 100);
      // });
    });
  </script>
</body>
</html>