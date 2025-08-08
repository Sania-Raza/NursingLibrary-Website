<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursing Webstie</title>
    <link rel="stylesheet" href="style.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Services Section Styles */
.services {
    padding: 80px 0;
    background-color: #f9fafc;
}

.services .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.services h2 {
    text-align: center;
    color: #183491;
    font-size: 36px;
    margin-bottom: 15px;
}

.section-description {
    text-align: center;
    color: #555;
    max-width: 700px;
    margin: 0 auto 50px;
    font-size: 18px;
    line-height: 1.6;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.service-card {
    background: white;
    border-radius: 10px;
    padding: 30px 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: center;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.service-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: #e3f2fd;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #183491;
    font-size: 28px;
    transition: all 0.3s ease;
}

.service-card:hover .service-icon {
    background: #183491;
    color: white;
}

.service-card h3 {
    color: #183491;
    font-size: 20px;
    margin-bottom: 15px;
}

.service-card p {
    color: #666;
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 20px;
}

.service-link {
    display: inline-flex;
    align-items: center;
    color: #183491;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.service-link i {
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.service-link:hover {
    color: #4fc3f7;
}

.service-link:hover i {
    transform: translateX(3px);
}

/* Responsive adjustments */

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
@media (max-width: 700px) {
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
<body>
    <section class="header">
<nav>
     <a href="index.html" class="logoN"><img src="logo-img.png"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
        <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="newsNupdates.php">News & Updates</a></li>
            <li><a href="study.php">Lectures</a></li>
             <li><a href="library.php">Library</a></li>
            <!-- <li><a href="contact.html">Contact Us</a></li>  -->
         
             <li><a href="login.php" class="hero-btn red-btn" style="text-decoration: none;">Login</a></li>
        </ul>
        
    </div>
    <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
</nav>
<div class="text-box">
    <h1>Nurses Library providing free courses</h1>
    <p>The BEST place to learn nursing. <br>
        Everything you need - all in one place.
        </p>
    <a href="about.php" class="hero-btn">Visit Us to know more</a>
</div>
    </section>




<!-- Services Section -->
<section class="services">
    <div class="container">
        <h2>Our Services & Features</h2>
        <p class="section-description">We provide comprehensive resources to support nursing students at every stage of their education</p>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-book-medical"></i>
                </div>
                <h3>Digital Library</h3>
                <p>Access our extensive collection of nursing textbooks, research papers, and reference materials 24/7.</p>
                <a href="library.php" class="service-link">Explore Library <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Video Lectures</h3>
                <p>Learn from expert nursing educators through our comprehensive video lecture series.</p>
                <a href="study.php" class="service-link">View Lectures <i class="fas fa-arrow-right"></i></a>
            </div>
           
        
            
            <!-- Service 5 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-procedures"></i>
                </div>
                <h3>SemesterWise Course Code</h3>
                <p>Step-by-step guides and videos for essential nursing procedures and techniques.</p>
                <a href="study.php" class="service-link">Learn Skills <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>Updates regarding Nursing</h3>
                <p>Clinical reference guides, documentation templates, and case studies.</p>
                <a href="newsNupdates.php" class="service-link">Clinical Tools <i class="fas fa-arrow-right"></i></a>
            </div>
            
            
            
         
        </div>
    </div>
</section>


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
        <p style="color: black;">© 2023 NursingCare. All rights reserved.</p>
        <div class="legal-links">
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="#">Disclaimer</a>
        </div>
    </div>
</footer>

    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>

  
</body>
</html>

