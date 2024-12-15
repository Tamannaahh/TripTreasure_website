<?php
session_start();

// Destroy the session to log out the user
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            color: #ededed;
            background: #081b29;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .message-container {
            text-align: center;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 8px 16px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-button:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }

        .back-button:focus {
            outline: none;
        }

        .logout-message {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Back button positioned on the left side -->
    <a href="../index.php" class="back-button">BACK</a>

    <!-- Logout message -->
    <div class="message-container">
        <p class="logout-message">Tamanna, you have been logged out. You will be redirected in few minutes...!</p>
        <p>If not redirected, <a href="admin-login.php" class="btn btn-danger">Login Again</a></p>
    </div>

    <!-- Redirect to the login page after 5 minutes (300000 milliseconds) -->
    <script>
        setTimeout(function() {
            window.location.href = 'admin-login.php';
        }, 300000); // 5 minutes in milliseconds
    </script>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
