<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'nursing_library');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $titles = $_POST['title'];
    $authors = $_POST['author'];
    $descriptions = $_POST['description'];
    $categories = $_POST['category'];
    $preview_links = $_POST['preview_link'];
    $download_links = $_POST['download_link'];
    $cover_images = $_FILES['cover_image'];

    for ($i = 0; $i < count($titles); $i++) {
        $filename = basename($cover_images['name'][$i]);
        $target_file = "uploads/" . $filename;
        move_uploaded_file($cover_images['tmp_name'][$i], $target_file);

        $stmt = $conn->prepare("INSERT INTO books (title, author, description, category, cover_image, preview_link, download_link) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $titles[$i], $authors[$i], $descriptions[$i], $categories[$i], $filename, $preview_links[$i], $download_links[$i]);
        $stmt->execute();
    }

    $conn->close();
    echo "<p style='text-align:center; color: green;'>Books added successfully!</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            margin: 0;
            background-color: #f7f7f7;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .book-form {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
            background: #fafafa;
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        .add-more,
        .submit-btn {
            display: inline-block;
            padding: 12px 20px;
            margin: 10px 0;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            text-align: center;
            width: 100%;
        }

        .add-more {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .add-more:hover {
            background-color: #218838;
        }

        .submit-btn {
            background-color: #ad1b1b;
            color: white;
            border: none;
        }

        .submit-btn:hover {
            background-color: #8c1515;
        }

        @media (min-width: 768px) {
            .book-form {
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }

            .book-form textarea {
                grid-column: span 2;
            }

            .book-form input[type="file"] {
                grid-column: span 2;
            }

            .add-more,
            .submit-btn {
                width: auto;
            }
        }
    </style>
</head>
<body>

<h1>Add Books to Library</h1>
<form action="" method="post" enctype="multipart/form-data" id="bookForm">
    <div id="bookContainer">
        <div class="book-form">
            <input type="text" name="title[]" placeholder="Book Title" required>
            <input type="text" name="author[]" placeholder="Author" required>
            <textarea name="description[]" placeholder="Description"></textarea>
            <input type="text" name="category[]" placeholder="Category" required>
            <input type="text" name="preview_link[]" placeholder="Preview Link">
            <input type="text" name="download_link[]" placeholder="Download Link">
            <input type="file" name="cover_image[]" accept="image/*" required>
        </div>
    </div>

    <div class="add-more" onclick="addBookForm()">+ Add Another Book</div>
    <button type="submit" class="submit-btn">Submit Books</button>
</form>

<script>
    function addBookForm() {
        const container = document.getElementById('bookContainer');
        const newForm = container.firstElementChild.cloneNode(true);
        newForm.querySelectorAll('input, textarea').forEach(input => input.value = '');
        container.appendChild(newForm);
    }
</script>

</body>
</html>
