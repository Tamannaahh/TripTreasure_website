<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define correct credentials
    $correct_username = "tamannaparmar";
    $correct_password = "Tamanna@10";

    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the credentials
    if ($username === $correct_username && $password === $correct_password) {
        // Set session variable and redirect to the admin page
        $_SESSION['is_admin_logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        // Display error message if credentials are incorrect
        $error_message = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            color: #ededed;
            background: #0a3a4a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #132f40;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-width: 380px;
            width: 90%;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #00d7ff;
            font-size: 24px;
        }

        input {
            width: 90%; /* Make input boxes smaller compared to the container */
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #00d7ff;
            border-radius: 8px;
            background-color: #1a394b;
            color: #ededed;
            font-size: 14px;
        }

        input::placeholder {
            color: #b3c6cc;
        }

        input:focus {
            outline: none;
            border-color: #05a5c7;
            box-shadow: 0 0 6px #05a5c7;
        }

        .login-btn {
            background-color: #00d7ff;
            color: #081b29;
            border: none;
            padding: 11px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            font-size: 16px;
            font-weight: bold;
            width: 40%; /* Same width as input boxes */
        }

        .login-btn:hover {
            background-color: #05a5c7;
            transform: translateY(-3px);
        }

        .error {
            color: #e74c3c;
            margin-bottom: 15px;
            font-size: 14px;
        }

        @media (max-width: 400px) {
            .login-container {
                width: 95%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Admin Login</h2>
    <?php if (isset($error_message)) { echo "<p class='error'>$error_message</p>"; } ?>
    <form action="admin-login.php" method="POST" autocomplete="off">
        <input type="text" name="username" placeholder="Username" required autocomplete="off" value="">
        <input type="password" name="password" placeholder="Password" required autocomplete="off" value="">
        <button type="submit" class="login-btn">Login</button>
    </form>
</div>

</body>
</html>
