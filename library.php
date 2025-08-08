<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'nursing_library');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all books
$books = [];
$result = $conn->query("SELECT * FROM books ORDER BY category, title");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $books[$row['category']][] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nursing Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="library.css">
    <link rel="stylesheet" href="style.css">
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
.footer-section h4 {
    margin-bottom: 15px;
    font-size: 18px;
    color: rgb(20, 31, 43);
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
.social-links {
    display: flex;
    gap: 10px;
    margin-top: 10px;
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
    color: #f8f9fa;
    font-size: 14px;
}

.footer-links a:hover {
    color:rgb(20, 31, 43);
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
<body>
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="logo-img.png" alt="Logo"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="study.php">Lectures</a></li>
                    <li><a href="library.php" class="active">Library</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <i class="fa-solid fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>Nursing Library</h1>
    </section>

    <section class="library-container">
        
        
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for books, authors, or topics...">
            <button onclick="searchBooks()"><i class="fas fa-search"></i> Search</button>
        </div>
        
        <?php if (empty($books)): ?>
            <p>No books available in the library yet.</p>
        <?php else: ?>
            <?php foreach ($books as $category => $categoryBooks): ?>
                <div class="book-categories">
                    <h2 class="category-title"><?php echo htmlspecialchars($category); ?></h2>
                    <div class="books-grid">
                        <?php foreach ($categoryBooks as $book): ?>
                            <div class="book-card">
                                <div class="book-cover">
                                    <img src="uploads/<?php echo htmlspecialchars($book['cover_image']); ?>" alt="<?php echo htmlspecialchars($book['title']); ?>">
                                </div>
                                <div class="book-info">
                                    <div class="book-title"><?php echo htmlspecialchars($book['title']); ?></div>
                                    <div class="book-author">By <?php echo htmlspecialchars($book['author']); ?></div>
                                    <div class="book-desc">
                                        <?php echo htmlspecialchars($book['description']); ?>
                                    </div>
                                    <div class="book-links">
                                        <a href="<?php echo htmlspecialchars($book['preview_link']); ?>" target="_blank" class="view-link">
                                            <i class="fas fa-eye"></i> Preview
                                        </a>
                                        <a href="<?php echo htmlspecialchars($book['download_link']); ?>" class="download-link">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
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

        function searchBooks() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const bookCards = document.querySelectorAll('.book-card');
            bookCards.forEach(card => {
                const title = card.querySelector('.book-title').textContent.toLowerCase();
                const author = card.querySelector('.book-author').textContent.toLowerCase();
                const desc = card.querySelector('.book-desc').textContent.toLowerCase();
                if (title.includes(searchTerm) || author.includes(searchTerm) || desc.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        document.getElementById('searchInput').addEventListener('keyup', function(e) {
            if (e.key === 'Enter') {
                searchBooks();
            }
        });
    </script>
</body>
</html>
