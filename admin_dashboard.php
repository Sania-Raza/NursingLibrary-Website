<?php
session_start();

// Check if user is logged in as admin
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'nursing_library');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle book deletion
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: admin_dashboard.php?deleted=1");
    exit;
}

// Get all books
$books = [];
$result = $conn->query("SELECT * FROM books ORDER BY category, title");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Nursing Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        :root {
            --primary-color: #183491;
            --secondary-color: #2c3e50;
            --danger-color: #ad1b1b;
            --success-color: #155724;
        }
        
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            line-height: 1.6;
        }
        
        .admin-header {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .admin-header h2 {
            margin: 10px 0;
            font-size: 1.5rem;
        }
        
        .admin-nav {
            background-color: var(--secondary-color);
            color: white;
            padding: 15px;
            width: 100%;
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 90;
            display: none;
        }
        
        .admin-nav.active {
            display: block;
        }
        
        .admin-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            overflow-x: auto;
        }
        
        .admin-nav li {
            margin-right: 15px;
            white-space: nowrap;
        }
        
        .admin-nav a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .admin-nav a:hover {
            background-color: #34495e;
        }
        
        .admin-nav i {
            margin-right: 8px;
            width: 20px;
            text-align: center;
            font-size: 1.1rem;
        }
        
        .admin-main {
            padding: 20px;
            margin-bottom: 70px; /* Space for mobile nav */
        }
        
        .dashboard-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            overflow-x: auto;
        }
        
        .dashboard-title {
            color: var(--primary-color);
            margin-top: 0;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
            font-size: 1.3rem;
        }
        
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
        }
        
        .btn:hover {
            background-color: #1a3a9a;
        }
        
        .btn-danger {
            background-color: var(--danger-color);
        }
        
        .btn-danger:hover {
            background-color: #8c1515;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 13px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            min-width: 600px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: var(--primary-color);
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .book-cover-small {
            width: 50px;
            height: 70px;
            object-fit: cover;
            border-radius: 4px;
        }
        
        .action-btns {
            display: flex;
            gap: 5px;
            flex-wrap: wrap;
        }
        
        .alert {
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: var(--success-color);
            border: 1px solid #c3e6cb;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
        }
        
        .stat-card {
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            background: #e3f2fd;
        }
        
        .stat-card h3 {
            margin: 0;
            color: var(--primary-color);
            font-size: 1.5rem;
        }
        
        .stat-card p {
            margin: 5px 0 0;
            color: #555;
        }
        
        .mobile-menu-btn {
            display: none;
            background: transparent;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 5px;
        }
        
        /* Responsive styles */
        @media (min-width: 768px) {
            .admin-nav {
                width: 200px;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                padding-top: 80px;
                display: block;
            }
            
            .admin-nav ul {
                display: block;
                overflow-x: visible;
            }
            
            .admin-nav li {
                margin-right: 0;
                margin-bottom: 15px;
                white-space: normal;
            }
            
            .admin-main {
                margin-left: 200px;
                margin-bottom: 0;
                padding: 20px 30px;
            }
            
            .admin-header {
                padding-left: 220px;
            }
            
            .mobile-menu-btn {
                display: none !important;
            }
        }
        
        @media (max-width: 480px) {
            .admin-header {
                padding: 10px 15px;
            }
            
            .admin-header h2 {
                font-size: 1.2rem;
            }
            
            .dashboard-card {
                padding: 15px;
            }
            
            .dashboard-title {
                font-size: 1.1rem;
            }
            
            .btn {
                padding: 6px 12px;
                font-size: 13px;
            }
            
            th, td {
                padding: 8px 10px;
                font-size: 14px;
            }
            
            .book-cover-small {
                width: 40px;
                height: 60px;
            }
        }
    </style>
</head>
<body>
    <div class="admin-header">
        <h2>Nursing Library Admin</h2>
        <div>
            <span>Welcome, Admin</span>
            <a href="logout.php" class="btn btn-danger" style="margin-left: 15px;">Logout</a>
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
    
    <div class="admin-nav" id="adminNav">
        <ul>
            <li><a href="admin_dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="add_books.php"><i class="fas fa-book-medical"></i> Add Books</a></li>
            <li><a href="manage_books.php"><i class="fas fa-book"></i> Manage Books</a></li>
        </ul>
    </div>
    
    <div class="admin-main">
        <?php if (isset($_GET['added']) && $_GET['added'] == 1): ?>
            <div class="alert alert-success">
                Book(s) added successfully!
            </div>
        <?php endif; ?>
        
        <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1): ?>
            <div class="alert alert-success">
                Book deleted successfully!
            </div>
        <?php endif; ?>
        
        <div class="dashboard-card">
            <h3 class="dashboard-title">Library Statistics</h3>
            <div class="stats-grid">
                <div class="stat-card">
                    <h3><?php echo count($books); ?></h3>
                    <p>Total Books</p>
                </div>
                <div class="stat-card" style="background: #e8f5e9;">
                    <h3>12</h3>
                    <p>Categories</p>
                </div>
            </div>
        </div>
        
        <div class="dashboard-card">
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 15px;">
                <h3 class="dashboard-title">Recent Books</h3>
                <a href="add_books.php" class="btn"><i class="fas fa-plus"></i> Add New Books</a>
            </div>
            
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_slice($books, 0, 5) as $book): ?>
                        <tr>
                            <td><img src="uploads/<?php echo htmlspecialchars($book['cover_image']); ?>" class="book-cover-small" alt="Cover"></td>
                            <td><?php echo htmlspecialchars($book['title']); ?></td>
                            <td><?php echo htmlspecialchars($book['author']); ?></td>
                            <td><?php echo htmlspecialchars($book['category']); ?></td>
                            <td class="action-btns">
                                <a href="edit_book.php?id=<?php echo $book['id']; ?>" class="btn btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="admin_dashboard.php?delete_id=<?php echo $book['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this book?')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div style="text-align: right; margin-top: 15px;">
                <a href="manage_books.php" class="btn">View All Books</a>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('adminNav').classList.toggle('active');
        });
    </script>
</body>
</html>