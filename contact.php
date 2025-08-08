<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Nurses Library - Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styleContact.css">

    <style>
        footer {
    background-color: #f8f9fa;
    padding: 40px 20px;
    font-family: 'Arial', sans-serif;
}

.footer-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.footer-section {
    display: flex;
    flex-direction: column;
}

.footer-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
}

.footer-logo img {
    width: 40px;
    height: 40px;
}

.footer-description {
    margin-top: 10px;
    font-size: 14px;
    color: #555;
}

.social-links a {
    margin-right: 10px;
    color: #333;
    font-size: 18px;
}

.social-links a:hover {
    color: #007bff;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 8px;
}

.footer-links a {
    text-decoration: none;
    color: #333;
    font-size: 14px;
}

.footer-links a:hover {
    color: #007bff;
}

.contact-info p {
    margin-bottom: 8px;
    font-size: 14px;
    color: #555;
}

.phone-number {
    font-weight: bold;
    color: #000;
}

.footer-bottom {
    margin-top: 30px;
    border-top: 1px solid #ccc;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.footer-bottom p {
    margin: 5px 0;
}

.legal-links {
    margin-top: 10px;
}

.legal-links a {
    margin: 0 10px;
    color: #333;
    font-size: 14px;
    text-decoration: none;
}

.legal-links a:hover {
    color: #007bff;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .footer-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .footer-logo {
        justify-content: center;
    }
    
    .social-links {
        justify-content: center;
    }
    
    .legal-links {
        margin-top: 10px;
    }
}
      </style>

</head>



<!-- Header -->
<section class="sub-header">
  <nav>
    <a href="index.php"><img src="logo-img.png" alt="Nurses Library Logo"></a>
    <div class="nav-links" id="navLinks">
      <i class="fa fa-times close-icon" onclick="hideMenu()"></i>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="study.php">Lectures</a></li>
        <li><a href="library.php">Library</a></li>
        <li><a href="contact.php" class="active">Contact Us</a></li>
      </ul>
    </div>
    <i class="fa fa-bars menu-icon" onclick="showMenu()"></i>
  </nav>
  <h1>Contact Us</h1>
</section>

<!-- Contact Section -->
<section class="contact-section">
  <div class="container">
    <h2 class="section-title">Contact Our Nursing Team</h2>
    <div class="contact-container">
      <div class="contact-info">
        <h3>Get in Touch</h3>
        <div class="info-item">
          <h4><i class="fas fa-map-marker-alt"></i> Location</h4>
          <p>123 Medical Drive, Health City, HC 12345</p>
        </div>
        <div class="info-item">
          <h4><i class="fas fa-envelope"></i> Email</h4>
          <p><a href="mailto:info@nurseslibrary.com">info@nurseslibrary.com</a></p>
          <p><a href="mailto:research@nurseslibrary.com">research@nurseslibrary.com</a></p>
        </div>
        <div class="info-item">
          <h4><i class="fas fa-phone-alt"></i> Phone</h4>
          <p><a href="tel:+11234567890">+1 (123) 456-7890</a></p>
          <p><a href="tel:+19876543210">+1 (987) 654-3210</a> (Research Desk)</p>
        </div>
        <div class="info-item">
          <h4><i class="fas fa-clock"></i> Working Hours</h4>
          <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
          <p>Saturday: 9:00 AM - 3:00 PM</p>
          <p>Online Resources: 24/7 Access</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->

    <footer class="compact-footer">
        <div class="footer-grid">
            <div class="footer-section">
                <div class="footer-logo">
                    <div class="logo-icon">
                        <img src="logo-img.png" alt="">
                    </div>
                    <div class="logo-text">Nurses Library</div>
                </div>
                <p class="footer-description">Providing compassionate nursing services to our community.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="study.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section contact-info">
                <h4>Contact</h4>
                <p><i class="fas fa-map-marker-alt"></i> 233 Medical Center St.</p>
                <p><i class="far fa-clock"></i> Mon-Fri: 8AM-6PM</p>
                <p><i class="far fa-clock"></i> Sat: 9AM-3PM</p>
                <p class="phone-number"><i class="fas fa-phone"></i> +1 (234) 567-890</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>© 2023 NursingCare. All rights reserved.</p>
            <div class="legal-links">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Disclaimer</a>
            </div>
        </div>
    </footer>

<!-- Mobile Menu Script -->
<script>
  var navLinks = document.getElementById("navLinks");
  function showMenu() {
    navLinks.style.right = "0";
  }
  function hideMenu() {
    navLinks.style.right = "-200px";
  }
</script>

</body>
</html>