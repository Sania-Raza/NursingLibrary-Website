<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'nursing_library');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$book = null;

// Load book by ID
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $book = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if (!$book) {
        die("Book not found!");
    }
} else {
    header("Location: manage_books.php");
    exit;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $author = $conn->real_escape_string($_POST['author']);
    $category = $conn->real_escape_string($_POST['category']);
    $id = intval($_POST['id']);
    $cover_image = $book['cover_image'];

    // Handle new file upload if present
    if (isset($_FILES['cover_image']) && $_FILES['cover_image']['error'] == 0) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["cover_image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        move_uploaded_file($_FILES["cover_image"]["tmp_name"], $targetFilePath);
        $cover_image = $fileName;
    }

    // Update book
    $stmt = $conn->prepare("UPDATE books SET title = ?, author = ?, category = ?, cover_image = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $title, $author, $category, $cover_image, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: manage_books.php?success=" . urlencode("Book updated successfully!"));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f4f4f4;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, select, button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        img {
            max-width: 100px;
            margin-top: 10px;
        }
        button {
            background-color: #183491;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #122974;
        }
        h2 {
            color: #183491;
            text-align: center;
        }
        .back-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h2>Edit Book</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($book['id']); ?>">

    <label>Title:</label>
    <input type="text" style="width: 80%;" name="title" value="<?php echo htmlspecialchars($book['title']); ?>" required>

    <label>Author:</label>
    <input type="text" style="width: 80%;" name="author" value="<?php echo htmlspecialchars($book['author']); ?>" required>

    <label>Category:</label>
    <input type="text" style="width: 80%;" name="category" value="<?php echo htmlspecialchars($book['category']); ?>" required>

   

    <label>Change Cover Image:</label>
    <input type="file" style="width: 80%;" name="cover_image" accept="image/*">

    <button type="submit">Update Book</button>
</form>

<div class="back-link">
    <a href="manage_books.php">← Back to Manage Books</a>
</div>

</body>
</html>
