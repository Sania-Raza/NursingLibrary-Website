<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursing Webstie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

.services {
    margin-top: 5px;
    padding: 80px 0;
    background-color: #f9fafc;
}
#head1{
   color: #183491;
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
.service-card:hover {
    
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.service-link:hover {
    color: #4fc3f7;
}

.service-link:hover i {
    transform: translateX(3px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .services {
        padding: 60px 0;
    }
    
    .services h2 {
        font-size: 30px;
    }
    
    .section-description {
        font-size: 16px;
        margin-bottom: 30px;
    }
    
    .service-link:hover {
    color: #4fc3f7;
}
    .services-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
footer
        .compact-footer {

background: #7d9cd1;
color: white;
padding: 40px 30px 30px;
font-size: 14px;
}

.footer-grid {
max-width: 1000px;
margin: 0 auto;
display: grid;
grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
gap: 20px;
}

.footer-logo {
display: flex;
align-items: center;
margin-bottom: 15px;
}

.logo-icon {
width: 9px;
height: 9px;
background: #4fc3f7;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
margin-right: 10px;
}

.logo-icon img{
    width:40px;
margin-right: 18px;

}


.logo-text {
font-size: 18px;
font-weight: 600;
}

.footer-description {
line-height: 1.5;
color: #0f0f0f;
opacity: 0.9;
margin-bottom: 15px;
font-size: 13px;
}

.footer-section h4 {
font-size: 16px;
margin-bottom: 12px;
color: #183491;
}

.footer-links {
list-style: none;
}

.footer-links li {
margin-bottom: 8px;
color: #0f0f0f;
}

.footer-links a {
color: white;
text-decoration: none;
opacity: 0.9;
transition: opacity 0.2s;
font-size: 13px;
}
.social-links {
display: flex;
gap: 15px;
margin-top: 20px;
}

.social-links a {
color: #183491;
text-decoration: none;
background: rgba(255, 255, 255, 0.1);
width: 36px;
height: 36px;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s;
}

.social-links a:hover {
background: #4fc3f7;
transform: translateY(-3px);
}

.footer-links a:hover {
opacity: 1;
text-decoration: underline;
}

.contact-info p {
margin-bottom: 8px;
display: flex;
color: white;
align-items: flex-start;
font-size: 13px;
line-height: 1.4;
}

.contact-info i {
margin-right: 8px;
color: #183491;
font-size: 14px;
margin-top: 2px;
}

.phone-number {
font-weight: bold;
margin-top: 5px;
}

.footer-bottom {
text-align: center;
margin-top: 25px;
padding-top: 15px;
border-top: 1px solid rgba(255, 255, 255, 0.1);
font-size: 12px;
opacity: 0.8;
}

.legal-links {
display: flex;
justify-content: center;
gap: 15px;
margin-top: 10px;
flex-wrap: wrap;
color: white;
}

.legal-links a {
color: white;
text-decoration: none;
font-size: 12px;
}

@media (max-width: 768px) {
.footer-grid {
    grid-template-columns: 1fr;
    gap: 30px;
}

.footer-section {
    margin-top: 0;
    display: flex;
    gap: 20px;
    align-items: center;
    justify-content: center;
}
}
    </style>
</head>
<body>
    <section class="sub-header">
<nav>
     <a href="index.html"><img src="logo-img.png"></a>
    <div class="nav-links" id="navLinks">
        <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" class="active">About Us</a></li>
            <li><a href="newsNupdates.php">News & Updates</a></li>
            <li><a href="study.php">Lectures</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        
    </div>
    <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
</nav>
<h1>About Us</h1>
    </section>


<!-- about us content -->
<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1 id="head1">Our Mission</h1>
            <p>Our mission is to support nursing students by providing a centralized, reliable platform for their academic journey.
We organize semester-wise course <br> codes, recommend essential textbooks, and <br> share the latest nursing-related updates — all in one place.
We aim to make learning  easier, reduce confusion, and save students time.
By simplifying access to key resources, we help students stay focused on what truly matters: mastering their skills and becoming confident healthcare professionals.
We believe that future nurses deserve tools that match their dedication and passion.
This platform is built to serve that vision — smart, simple, and student-first.</p>
            <a href="study.php" class="hero-btn red-btn">Explore Now</a>
        </div>
        <div class="about-col">
            <img src="mission.jpg" alt="About Us Image">
        </div>
    </div>
        </div>
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
                <a href="library.html" class="service-link">Explore Library <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h3>Video Lectures</h3>
                <p>Learn from expert nursing educators through our comprehensive video lecture series.</p>
                <a href="study.html" class="service-link">View Lectures <i class="fas fa-arrow-right"></i></a>
            </div>
           
        
            
            <!-- Service 5 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-procedures"></i>
                </div>
                <h3>SemesterWise Course Code</h3>
                <p>Step-by-step guides and videos for essential nursing procedures and techniques.</p>
                <a href="study.html" class="service-link">Learn Skills <i class="fas fa-arrow-right"></i></a>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3>Updates regarding Nursing</h3>
                <p>Clinical reference guides, documentation templates, and case studies.</p>
                <a href="newsNupdates.html" class="service-link">Clinical Tools <i class="fas fa-arrow-right"></i></a>
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
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

