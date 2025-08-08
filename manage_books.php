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

// Handle search
$search = '';
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
}

// Get all books with search filter
$books = [];
$query = "SELECT * FROM books 
          WHERE title LIKE '%$search%' 
          OR author LIKE '%$search%' 
          OR category LIKE '%$search%' 
          ORDER BY title";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

// Handle book deletion
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $success = "Book deleted successfully!";
    }
    $stmt->close();
    header("Location: manage_books.php?success=" . urlencode($success));
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Books - Nursing Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        /* Reuse the same CSS from admin_dashboard.php */
        :root {
            --primary-color: #183491;
            --secondary-color: #2c3e50;
            --danger-color: #ad1b1b;
            --success-color: #155724;
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
        }
        
        .admin-nav {
            background-color: var(--secondary-color);
            color: white;
            padding: 15px;
            width: 200px;
            height: 100vh;
            position: fixed;
        }
        
        .admin-nav ul {
            list-style: none;
            padding: 0;
        }
        
        .admin-nav li {
            margin-bottom: 15px;
        }
        
        .admin-nav a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .admin-nav a:hover {
            background-color: #34495e;
        }
        
        .admin-main {
            margin-left: 200px;
            padding: 20px;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .dashboard-title {
            color: var(--primary-color);
            margin-top: 0;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
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
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
        
        .search-box {
            display: flex;
            margin-bottom: 20px;
        }
        
        .search-box input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
        }
        
        .search-box button {
            padding: 10px 15px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }
        
        /* Responsive styles */
        @media (max-width: 768px) {
            .admin-nav {
                width: 100%;
                height: auto;
                position: relative;
            }
            
            .admin-main {
                margin-left: 0;
            }
            
            table {
                display: block;
                overflow-x: auto;
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
        </div>
    </div>
    
   
    
    <div class="admin-main">
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success">
                <?php echo htmlspecialchars($_GET['success']); ?>
            </div>
        <?php endif; ?>
        
        <div class="dashboard-card">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h3 class="dashboard-title">Manage Books</h3>
                <a href="add_books.php" class="btn"><i class="fas fa-plus"></i> Add New Book</a>
            </div>
            
            <div class="search-box">
                <form method="GET" action="manage_books.php">
                    <input type="text" name="search" placeholder="Search by title, author or category" value="<?php echo htmlspecialchars($search); ?>">
                    <button type="submit"><i class="fas fa-search"></i> Search</button>
                </form>
            </div>
            
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
                    <?php if (empty($books)): ?>
                        <tr>
                            <td colspan="5" style="text-align: center;">No books found</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($books as $book): ?>
                        <tr>
                            <td><img src="uploads/<?php echo htmlspecialchars($book['cover_image']); ?>" class="book-cover-small" alt="Cover"></td>
                            <td><?php echo htmlspecialchars($book['title']); ?></td>
                            <td><?php echo htmlspecialchars($book['author']); ?></td>
                            <td><?php echo htmlspecialchars($book['category']); ?></td>
                            <td class="action-btns">
                                <a href="edit_book.php?id=<?php echo $book['id']; ?>" class="btn"><i class="fas fa-edit"></i> Edit</a>
                                <a href="manage_books.php?delete_id=<?php echo $book['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this book?')"><i class="fas fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>