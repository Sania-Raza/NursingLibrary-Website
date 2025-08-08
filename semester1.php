<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Semester - Nursing Courses</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        /* Additional styles specific to semester page */
        .course-info {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
        }
        
        .course-info p {
            margin: 5px 0;
            color: #555;
        }
        
        .download-options {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        
        .file-size {
            font-size: 12px;
            color: #777;
            margin-left: 5px;
        }
        
        .module-list {
            margin-left: 20px;
        }
        
        .module-list li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }
        
        .module-list li:before {
            content: " ";
            color: #ad1b1b;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        
    .section-title {
        text-align: center;
        margin-bottom: 30px;
        font-size: 2rem;
        color: #333;
    }
    .course-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 fixed columns */
    gap: 25px;
}
    .course-card {
        background: #fff;
    padding: 20px;
    margin-bottom: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .course-card:hover {
        transform: translateY(-5px);
        background-color: rgb(241, 239, 235);
        box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    }
    .course-card h3 {
        color: #183491;
        margin-bottom: 10px;
    }
    .course-description {
        font-size: 0.95rem;
        color: #666;
        margin-bottom: 15px;
    }
    .recommended-textbook {
        margin-top: 15px;
        font-size: 0.9rem;
    }
    .recommended-textbook a {
        color: #0066cc;
        text-decoration: underline;
    }
    .hero-btn {
        display: inline-block;
        margin: 5px 0;
        padding: 8px 12px;
        background: transparent;
        color: #f44336;
        border-radius: 8px;
        font-size: 14px;
        text-decoration: none;
        transition: 0.3s ease;
    }
    .hero-btn:hover {
        background: #f44336;
    }
    .hero-btn i {
        margin-right: 5px;
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
        <h1>First Semester Courses</h1>
    </section>

    <section class="semester-content">
        <div class="row">
            
            <div class="course-grid">
                <!-- <h2 class="section-title">First Semester - Course Outline</h2> -->

                <!-- Course Block -->
                <div class="course-card">
                    <h3 class="">Anatomy & Physiology</h3>
                    <p class="course-description">
                        Explore the structure and function of the human body, from cells and tissues to organ systems essential for life.
                    </p>
                    <div class="course-info">
                        
                        <p><strong>Credits:</strong> 4</p>
                        <p><strong>Course Code:</strong> NUR-101</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/1AbC123Xyz/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=1AbC123Xyz" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Full Notes (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=abcd1234" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Watch Intro Lecture
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#anatomy" target="_blank">Gray's Anatomy for Students</a>
                    </div>
                </div>
    
                <!-- Course Block -->
                <div class="course-card">
                    <h3>Fundamentals of Nursing</h3>
                    <p class="course-description">
                        Introduction to core nursing concepts, history, patient care techniques, and the foundation of nursing practices.
                    </p>
                    <div class="course-info">
                    
                        <p><strong>Credits:</strong> 3</p>
                        <p><strong>Course Code:</strong> NUR-102</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/3Ghi789Jkl/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=3Ghi789Jkl" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Textbook (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=wxyz5678" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Skills Demo Video
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#nursing" target="_blank">Fundamentals of Nursing - Potter & Perry</a>
                    </div>
                </div>

                <div class="course-card">
                    <h3>Behavioural Science</h3>
                    <p class="course-description">
                        Introduction to core nursing concepts, history, patient care techniques, and the foundation of nursing practices.
                    </p>
                    <div class="course-info">
                      
                        <p><strong>Credits:</strong> 3</p>
                        <p><strong>Course Code:</strong> NUR-102</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/3Ghi789Jkl/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=3Ghi789Jkl" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Textbook (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=wxyz5678" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Skills Demo Video
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#nursing" target="_blank">Fundamentals of Nursing - Potter & Perry</a>
                    </div>
                </div>

                <div class="course-card">
                    <h3>English</h3>
                    <p class="course-description">
                        Introduction to core nursing concepts, history, patient care techniques, and the foundation of nursing practices.
                    </p>
                    <div class="course-info">
                       
                        <p><strong>Credits:</strong> 3</p>
                        <p><strong>Course Code:</strong> NUR-102</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/3Ghi789Jkl/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=3Ghi789Jkl" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Textbook (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=wxyz5678" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Skills Demo Video
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#nursing" target="_blank">Fundamentals of Nursing - Potter & Perry</a>
                    </div>
                </div>
    

                <div class="course-card">
                    <h3>Quantitative & Analytical Resoning(QAR)</h3>
                    <p class="course-description">
                        Introduction to core nursing concepts, history, patient care techniques, and the foundation of nursing practices.
                    </p>
                    <div class="course-info">
                    
                        <p><strong>Credits:</strong> 3</p>
                        <p><strong>Course Code:</strong> NUR-102</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/3Ghi789Jkl/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=3Ghi789Jkl" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Textbook (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=wxyz5678" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Skills Demo Video
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#nursing" target="_blank">Fundamentals of Nursing - Potter & Perry</a>
                    </div>
                </div>

                <div class="course-card">
                    <h3>Ideology of Pakistan</h3>
                    <p class="course-description">
                        Introduction to core nursing concepts, history, patient care techniques, and the foundation of nursing practices.
                    </p>
                    <div class="course-info">
                        
                        <p><strong>Credits:</strong> 3</p>
                        <p><strong>Course Code:</strong> NUR-102</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/3Ghi789Jkl/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=3Ghi789Jkl" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Textbook (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=wxyz5678" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Skills Demo Video
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#nursing" target="_blank">Fundamentals of Nursing - Potter & Perry</a>
                    </div>
                </div>
                <!-- Course Block -->
                <div class="course-card">
                    <h3>Biophysics</h3>
                    <p class="course-description">
                        Study microorganisms and their impact on health, immunity, infections, and medical procedures in nursing.
                    </p>
                    <div class="course-info">
                       
                        <p><strong>Credits:</strong> 3</p>
                        <p><strong>Course Code:</strong> NUR-103</p>
                    </div>
                    
                    <div class="download-options">
                        <a href="https://drive.google.com/file/d/5Stu345Vwx/preview" class="hero-btn red-btn" target="_blank">
                            <i class="fas fa-eye"></i> Preview Syllabus
                        </a>
                        <a href="https://drive.google.com/uc?export=download&id=5Stu345Vwx" class="hero-btn red-btn">
                            <i class="fas fa-file-pdf"></i> Lab Manual (PDF)
                        </a>
                        <a href="https://www.youtube.com/watch?v=mnop6789" class="hero-btn red-btn" target="_blank">
                            <i class="fab fa-youtube"></i> Microbiology Basics
                        </a>
                    </div>
                    
                    <div class="recommended-textbook">
                        <strong>Recommended:</strong> <a href="library.html#microbiology" target="_blank">Medical Microbiology - Jawetz, Melnick & Adelberg</a>
                    </div>
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
        
        // Add click event for all download buttons to track downloads
        document.querySelectorAll('a[href*="drive.google.com"]').forEach(link => {
            link.addEventListener('click', function() {
                const fileName = this.querySelector('i').nextSibling.textContent.trim();
                console.log(`Download initiated: ${fileName}`);
                // Here you could add analytics tracking
            });
        });
    </script>
</body>
</html>