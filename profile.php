<!-- <?php
session_start();

// Check if the user is logged in
// if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
//     // Redirect to login page if not logged in
//     header("Location: login.php");
//     exit();
// }

// // Database connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "triptreasure2";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Fetch user data
// $current_user = $_SESSION['username'];
// $stmt = $conn->prepare("SELECT email FROM user WHERE username = ?");
// $stmt->bind_param("s", $current_user);
// $stmt->execute();
// $stmt->bind_result($email);
// $stmt->fetch();
// $stmt->close();

// Logout handling
// if (isset($_GET['logout'])) {
//     session_destroy(); // Destroy session to log out the user
//     header("Location: login.php");
//     exit();
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            background-color: #081b29;
            color: #ededed;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            background-color: #1a2e41;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .profile-container h2 {
            margin-bottom: 20px;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .logout-btn {
            background-color: #0ef;
            color: #081b29;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #0bd;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Welcome, <?php echo htmlspecialchars($current_user); ?>!</h2>
    <div class="profile-info">
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    </div>
    <a href="profile.php?logout=true" class="logout-btn">Logout</a>
</div>

</body>
</html> -->



<!-- logout
session_start(); 
session_unset(); 
session_destroy(); 
header("Location: login.php"); 
exit();
?> -->
