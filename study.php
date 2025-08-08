<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursing Webstie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .head1{
            color: #183491 ;
        }
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
            <li><a href="about.php">About Us</a></li>
            <li><a href="newsNupdates.php">News & Updates</a></li>
            <li><a href="study.php" class="active">Lectures</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        
    </div>
    <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
</nav>
<h1>Our Courses</h1>
    </section>




<!-- call to action    -->

<section class="course">
    <h1 class="head1">Courses we offer</h1>
    <p>Discover our comprehensive range of nursing and healthcare programs designed to equip students <br> with essential knowledge and practical skills for a successful career in the medical field.</p>
    <div class="row">
      <div class="course-col">
    <h3 class="head1">First Semester</h3>
    <p>Anatomy & Physiology, Fundamentals of Nursing, Behavioural Science, Biophysics, QAR, English, Ideology of Pakistan <br><br></p>
    <a href="semester1.php" class="hero-btn red-btn" style="margin-top: 4px ;">View Details</a>
</div>
<div class="course-col">
    <h3 class="head1">Second Semester</h3>
    <p>Anatomy & Physiology, Fundamentals of Nursing, Behavioural Science, Biophysics, QAR, English, Ideology of Pakistan <br><br></p>
    <a href="semester2.php" class="hero-btn red-btn">View Details</a>
</div>

       
<div class="course-col">
    <h3 class="head1">Third Semester</h3>
    <p>Anatomy & Physiology, Fundamentals of Nursing, Behavioural Science, Biophysics, QAR, English, Ideology of Pakistan <br><br></p>

    <a href="semester3.php" class="hero-btn red-btn">View Details</a>
</div>
<!-- <div class="course-col">
    <h3>Second Semester</h3>
    <p>Biochemistry, Nutrition, Psychology, Sociology, Communication Skills</p>
    <a href="semester2.html" class="hero-btn red-btn">View Details</a>
</div>

<div class="course-col">
    <h3>First Semester</h3>
    <p>Anatomy & Physiology, Fundamentals of Nursing, Microbiology, English, Computer Skills</p>
    <a href="semester1.html" class="hero-btn red-btn">View Details</a>
</div>
<div class="course-col">
    <h3>Second Semester</h3>
    <p>Biochemistry, Nutrition, Psychology, Sociology, Communication Skills</p>
    <a href="semester2.html" class="hero-btn red-btn">View Details</a>
</div>

<div class="course-col">
    <h3>First Semester</h3>
    <p>Anatomy & Physiology, Fundamentals of Nursing, Microbiology, English, Computer Skills</p>
    <a href="semester1.html" class="hero-btn red-btn">View Details</a>
</div>
<div class="course-col">
    <h3>Second Semester</h3>
    <p>Biochemistry, Nutrition, Psychology, Sociology, Communication Skills</p>
    <a href="semester2.html" class="hero-btn red-btn">View Details</a>
</div> -->


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

