<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Updates | Nursing Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        
        /* News & Updates Section */
        .news-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: #2a5298;
            font-size: 32px;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #f44336;;
        }
        
        .news-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        
        .tab-btn {
            padding: 10px 20px;
            margin: 0 5px 10px;
            background: #e0e0e0;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .tab-btn.active {
            background: #f44336;
            color: white;
        }
        
        .tab-btn:hover {
            background: #f44336;
            color: white;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .news-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
        }
        
        .news-header {
            background: #2a5298;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .news-date {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .news-body {
            padding: 20px;
        }
        
        .news-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: #112546;
        }
        
        .news-text {
            margin-bottom: 15px;
            color: #555;
        }
        
        .news-attachment {
            display: flex;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }
        
        .news-attachment i {
            margin-right: 10px;
            color: #f44336;;
        }
        
        .news-attachment a {
            color: #2a5298;
            text-decoration: none;
            font-weight: 500;
        }
        
        .news-attachment a:hover {
            text-decoration: underline;
        }
        
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .schedule-table th, .schedule-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        .schedule-table th {
            background-color: #2a5298;
            color: white;
        }
        
        .schedule-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .schedule-table tr:hover {
            background-color: #e6f2ff;
        }
        
        .lab-hours {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .lab-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .lab-name {
            color: #2a5298;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .lab-time {
            color: #555;
        }
        
        /* Footer Styles */
        /* .compact-footer {
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
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 18px;
            font-weight: 600;
        }
        
        .footer-description {
            line-height: 1.5;
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
        } */
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-links ul li {
                display: block;
            }
            
            .nav-links {
                position: absolute;
                background: #2a5298;
                height: 100vh;
                width: 200px;
                top: 0;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }
            
            .fa {
                display: block;
                color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor: pointer;
            }
            
            .sub-header h1 {
                font-size: 28px;
                margin-top: 70px;
            }
            
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .footer-section {
                margin-top: 0;
                text-align: center;
            }
            
            .footer-logo {
                justify-content: center;
            }
            
            .social-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="logo-img.png" alt="Nursing Website Logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="newsNupdates.php" class="active">News & Updates</a></li>
            <li><a href="study.php">Lectures</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>News & Updates</h1>
    </section>

    <section class="news-container">
        <h2 class="section-title">Latest Announcements</h2>
        
        <div class="news-tabs">
            <button class="tab-btn active" onclick="openTab(event, 'announcements')">Announcements</button>
            <button class="tab-btn" onclick="openTab(event, 'schedule')">Exam Schedule</button>
            <button class="tab-btn" onclick="openTab(event, 'labs')">Lab Hours</button>
            <button class="tab-btn" onclick="openTab(event, 'admissions')">Admissions</button>
        </div>
        
        <!-- Announcements Tab -->
        <div id="announcements" class="tab-content active">
            <div class="news-card">
                <div class="news-header">
                    <h3>Important Notice</h3>
                    <span class="news-date">June 15, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Summer Semester Registration Open</h4>
                    <p class="news-text">Registration for the summer semester is now open. All nursing students must register by June 30th to secure their place in the program.</p>
                    <div class="news-attachment">
                        <i class="fas fa-file-pdf"></i>
                        <a href="summer-registration.pdf" target="_blank">Download Registration Form</a>
                    </div>
                </div>
            </div>
            
            <div class="news-card">
                <div class="news-header">
                    <h3>Merit List</h3>
                    <span class="news-date">June 10, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Fall 2023 Admission Merit List Published</h4>
                    <p class="news-text">The merit list for Fall 2023 admissions has been published. Selected candidates must complete their admission process by June 25th.</p>
                    <div class="news-attachment">
                        <i class="fas fa-file-pdf"></i>
                        <a href="fall-merit-list.pdf" target="_blank">View Merit List</a>
                    </div>
                </div>
            </div>
            
            <div class="news-card">
                <div class="news-header">
                    <h3>Workshop</h3>
                    <span class="news-date">June 5, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Advanced Cardiac Life Support Workshop</h4>
                    <p class="news-text">The nursing department is organizing an ACLS workshop on June 20-22. Limited seats available. Register at the department office.</p>
                    <div class="news-attachment">
                        <i class="fas fa-file-pdf"></i>
                        <a href="acls-workshop.pdf" target="_blank">Workshop Details</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Class Schedule Tab -->
        <div id="schedule" class="tab-content">
            <div class="news-card">
                <div class="news-header">
                    <h3>Class Schedule</h3>
                    <span class="news-date">Effective June 1, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Summer Semester 2023 Schedule</h4>
                    <p class="news-text">Below is the class schedule for the Summer 2023 semester. Please note that schedules are subject to change.</p>
                    
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Course</th>
                                <th>Instructor</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Anatomy & Physiology</td>
                                <td>Dr. Smith</td>
                                <td>Mon/Wed</td>
                                <td>9:00 AM - 10:30 AM</td>
                                <td>B-205</td>
                            </tr>
                            <tr>
                                <td>Fundamentals of Nursing</td>
                                <td>Prof. Johnson</td>
                                <td>Tue/Thu</td>
                                <td>11:00 AM - 12:30 PM</td>
                                <td>A-102</td>
                            </tr>
                            <tr>
                                <td>Pharmacology</td>
                                <td>Dr. Williams</td>
                                <td>Mon/Wed</td>
                                <td>2:00 PM - 3:30 PM</td>
                                <td>B-207</td>
                            </tr>
                            <tr>
                                <td>Medical-Surgical Nursing</td>
                                <td>Prof. Brown</td>
                                <td>Tue/Thu</td>
                                <td>1:00 PM - 2:30 PM</td>
                                <td>A-105</td>
                            </tr>
                            <tr>
                                <td>Community Health</td>
                                <td>Dr. Davis</td>
                                <td>Fri</td>
                                <td>10:00 AM - 1:00 PM</td>
                                <td>C-301</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="news-attachment" style="margin-top: 20px;">
                        <i class="fas fa-file-pdf"></i>
                        <a href="summer-schedule.pdf" target="_blank">Download Full Schedule</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Lab Hours Tab -->
        <div id="labs" class="tab-content">
            <div class="news-card">
                <div class="news-header">
                    <h3>Lab Hours</h3>
                    <span class="news-date">Summer Semester 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Nursing Lab Opening Hours</h4>
                    <p class="news-text">Below are the opening hours for our nursing labs during the summer semester. Special arrangements can be made for research projects.</p>
                    
                    <div class="lab-hours">
                        <div class="lab-card">
                            <h4 class="lab-name">Anatomy Lab</h4>
                            <p class="lab-time">Monday - Friday: 8:00 AM - 5:00 PM</p>
                            <p class="lab-time">Saturday: 9:00 AM - 2:00 PM</p>
                        </div>
                        
                        <div class="lab-card">
                            <h4 class="lab-name">Nursing Skills Lab</h4>
                            <p class="lab-time">Monday - Thursday: 8:00 AM - 7:00 PM</p>
                            <p class="lab-time">Friday: 8:00 AM - 5:00 PM</p>
                        </div>
                        
                        <div class="lab-card">
                            <h4 class="lab-name">Computer Lab</h4>
                            <p class="lab-time">24/7 Access with Student ID</p>
                        </div>
                        
                        <div class="lab-card">
                            <h4 class="lab-name">Research Lab</h4>
                            <p class="lab-time">By Appointment Only</p>
                            <p class="lab-time">Contact: research@nursing.edu</p>
                        </div>
                    </div>
                    
                    <div class="news-attachment" style="margin-top: 20px;">
                        <i class="fas fa-file-pdf"></i>
                        <a href="lab-hours.pdf" target="_blank">Download Lab Hours PDF</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Admissions Tab -->
        <div id="admissions" class="tab-content">
            <div class="news-card">
                <div class="news-header">
                    <h3>Admissions</h3>
                    <span class="news-date">June 1, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Fall 2023 Admissions Open</h4>
                    <p class="news-text">Applications are now being accepted for the Fall 2023 nursing program. The deadline for applications is July 15, 2023.</p>
                    <div class="news-attachment">
                        <i class="fas fa-file-pdf"></i>
                        <a href="admission-form.pdf" target="_blank">Download Application Form</a>
                    </div>
                </div>
            </div>
            
            <div class="news-card">
                <div class="news-header">
                    <h3>Admissions</h3>
                    <span class="news-date">May 25, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">BSN Program Requirements Updated</h4>
                    <p class="news-text">The admission requirements for the BSN program have been updated for the 2023-2024 academic year. Please review the changes before applying.</p>
                    <div class="news-attachment">
                        <i class="fas fa-file-pdf"></i>
                        <a href="bsn-requirements.pdf" target="_blank">View Requirements</a>
                    </div>
                </div>
            </div>
            
            <div class="news-card">
                <div class="news-header">
                    <h3>Scholarships</h3>
                    <span class="news-date">May 20, 2023</span>
                </div>
                <div class="news-body">
                    <h4 class="news-title">Nursing Scholarship Applications</h4>
                    <p class="news-text">Several scholarship opportunities are available for nursing students. The deadline to apply is June 30, 2023.</p>
                    <div class="news-attachment">
                        <i class="fas fa-file-pdf"></i>
                        <a href="scholarships.pdf" target="_blank">Scholarship Information</a>
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

    <script>
        // Mobile menu toggle
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
        
        // Tab functionality
        function openTab(evt, tabName) {
            var i, tabcontent, tabbuttons;
            
            // Hide all tab content
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].className = tabcontent[i].className.replace(" active", "");
            }
            
            // Remove active class from all buttons
            tabbuttons = document.getElementsByClassName("tab-btn");
            for (i = 0; i < tabbuttons.length; i++) {
                tabbuttons[i].className = tabbuttons[i].className.replace(" active", "");
            }
            
            // Show current tab and mark button as active
            document.getElementById(tabName).className += " active";
            evt.currentTarget.className += " active";
        }
        
        // Initially show the first tab
        document.querySelector(".tab-btn").click();
    </script>
</body>
</html>