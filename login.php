<?php
// Database connection
$servername = "localhost"; //  server name
$username = "root"; //  database username
$password = ""; // database password
$dbname = "triptreasure2"; //  database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle sign up
if (isset($_POST['signup_submit'])) {
    $signup_username = $_POST['signup_username'];
    $signup_email = $_POST['signup_email'];
    $signup_password = $_POST['signup_password'];
    $signup_confirm_password = $_POST['signup_confirm_password'];

    if ($signup_password === $signup_confirm_password) {
        $hashed_password = password_hash($signup_password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $signup_username, $signup_email, $hashed_password);
        
        if ($stmt->execute()) {
            echo '<script>alert("Account created successfully.");</script>';
        } else {
            echo '<script>alert("Error creating account.");</script>';
        }
        
        $stmt->close();
    } else {
        echo '<script>alert("Passwords do not match.");</script>';
    }
}

// Handle sign in
if (isset($_POST['signin_submit'])) {
    $signin_username = $_POST['signin_username'];
    $signin_password = $_POST['signin_password'];

    $stmt = $conn->prepare("SELECT password FROM user WHERE username = ?");
    $stmt->bind_param("s", $signin_username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($signin_password, $hashed_password)) {
            header("Location: index.php");
            exit();
        } else {
            echo '<script>alert("Invalid username or password.");</script>';
        }
    } else {
        echo '<script>alert("Invalid username or password.");</script>';
    }
    
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TripTreasure Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <!-- Back button styled as a cross sign -->
    <a href="index.php" class="back-button">×</a>
    
    <div class="container">
        <!-- Sign Up Form -->
        <form method="POST" action="">
            <div class="form signup">
                <h2>Sign Up</h2>
                <div class="inputBox">
                    <input type="text" name="signup_username" required="required">
                    <i class="fa-regular fa-user"></i>
                    <span>Username</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="signup_email" required="required">
                    <i class="fa-regular fa-envelope"></i>
                    <span>Email Address</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="signup_password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>Create Password</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="signup_confirm_password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>Confirm Password</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="signup_submit" value="Create Account">
                </div>
                <p>Already a member? <a href="#" class="login">Log in</a></p>
            </div>
        </form>

        <!-- Sign In Form -->
        <form method="POST" action="">
            <div class="form signin">
                <h2>Sign In</h2>
                <div class="inputBox">
                    <input type="text" name="signin_username" required="required">
                    <i class="fa-regular fa-user"></i>
                    <span>Username</span>
                </div>
                <div class="inputBox">
                    <input type="password" name="signin_password" required="required">
                    <i class="fa-solid fa-lock"></i>
                    <span>Password</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="signin_submit" value="Login">
                </div>
                <p>Not Registered? <a href="#" class="create">Create an account</a></p>
            </div>
        </form>
    </div>

    <script>
        let login = document.querySelector('.login');
        let create = document.querySelector('.create');
        let container = document.querySelector('.container');

        login.onclick = function() {
            container.classList.add('signinForm');
        }

        create.onclick = function() {
            container.classList.remove('signinForm');
        }
    </script>
</body>

</html>
