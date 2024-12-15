<?php
session_start();
include "db_conn.php";

// Check if the admin is logged in
if (!isset($_SESSION['is_admin_logged_in']) || $_SESSION['is_admin_logged_in'] !== true) {
    // Redirect to the login page if not logged in
    header("Location: admin-login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard of TripTreasure</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            color: #ededed;
            background: #081b29;
        }

        .navbar {
            background-color: #081b29;
            color: white;
        }

        .nav-button {
        background: transparent;
        border: 2px solid #0ef;
        color: #0ef;
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: bold;
        transition: all 0.3s ease-in-out;
        text-transform: uppercase;
        text-decoration: none;
        }

        .nav-button:hover {
        background-color: #0ef;
        color: #081b29;
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(14, 239, 255, 0.5);
        }
      
        .table-hover thead th {
            background-color: #0ef;
            color: #081b29;
        }

        .table-hover tbody tr:hover {
            background-color: #0ef;
            color: #081b29;
        }

        .table-hover tbody tr td {
            color: #ededed;
        }

        .btn-add-new {
            background-color: #0ef;
            color: #081b29;
        }

        .btn-add-new:hover {
            background-color: #0bd;
            color: #fff;
        }

        .action-icon {
            color: #ededed;
            text-decoration: none;
        }

        .action-icon:hover {
            color: #0ef;
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <!-- Back button positioned on the left side -->
            <a href="../index.php" class="back-button">BACK</a>
            <a class="navbar-brand mx-auto" href="#">TripTreasure's Admin Dashboard</a>

            <div class="ms-auto">
                <!-- Display Logout button only when logged in -->
                <?php if (isset($_SESSION['is_admin_logged_in']) && $_SESSION['is_admin_logged_in'] === true) : ?>
                    <a href="logout.php" class="nav-button">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  ' . $msg . '
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
        ?>

        <a href="add-new.php" class="btn btn-dark mb-3 btn-add-new">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

            
                <?php
                $sql = "SELECT * FROM `user`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?></td>
                        <td><?php echo $row["username"] ?></td>
                        <td><?php echo $row["email"] ?></td>
                        <td><?php echo substr($row["password"], 0, 10) . '...'; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"] ?>" class="action-icon"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="delete.php?id=<?php echo $row["id"] ?>" class="action-icon"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
