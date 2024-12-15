<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input data
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $date = $_POST['date'];
  
// Array of possible image filenames
$images = [
    "blog-1.jpg",
    "blog-2.jpg",
    "blog-3.jpg",
    "blog-4.jpg",
    "blog-5.jpg",
    "blog-6.jpg",
    "blog-7.jpg",
    "blog-8.jpg"
];

// Select a random image from the array
$image = $images[array_rand($images)];


    // Prepare the SQL statement
    $sql = "INSERT INTO blogs (title, author, content, date, image) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind parameters to the SQL query
        mysqli_stmt_bind_param($stmt, "sssss", $title, $author, $content, $date, $image);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to the blog page with a success message
            header("Location: blog.php?msg=Blog created successfully");
            exit();
        } else {
            // Display error message if execution fails
            echo "Error: " . mysqli_stmt_error($stmt);
        }
    } else {
        // Display error message if preparation fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Blog - TripTreasure</title>
    <link rel="stylesheet" href="add-blog.css">
    
</head>
<body>
    <!-- Back button positioned in the top-left corner -->
    <button onclick="window.history.back()" class="back-button">BACK</button>

    <div class="container">
        <h2>Add New Blog</h2>
        <form action="add-blog.php" method="POST">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="content" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <input type="submit" value="Add Blog" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
