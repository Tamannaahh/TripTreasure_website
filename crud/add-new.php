<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password

   $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$password')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <style>
      body {
         background-color: #081b29;
         color: #ffffff;
      }

      .navbar {
         background-color: #081b29;
         color: #081b29;
      }

      .navbar a {
         color: #ededed;
      }

      .btn-success {
         background-color: #0ef;
         border-color: #0ef;
      }

      .btn-success:hover {
         background-color: #0dd;
         border-color: #0dd;
      }

      .btn-danger {
         background-color: #e74c3c;
         border-color: #e74c3c;
      }

      .btn-danger:hover {
         background-color: #c0392b;
         border-color: #c0392b;
      }

      .form-control {
         background-color: #081b29;
         color: #ffffff;
         border: 1px solid #0ef;
      }

      .form-control:focus {
         border-color: #0dd;
         box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .25);
      }

      .container {
         color: #ffffff;
      }

      .form-label {
         color: #ffffff;
      }
   </style>

   <title>TripTreasure CRUD User</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
      TripTreasure CRUD Users
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class="text-muted">Complete the form below to add a new user</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="mb-3">
               <label class="form-label">Username:</label>
               <input type="text" class="form-control" name="username" placeholder="Enter username" required>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            </div>

            <div class="mb-3">
               <label class="form-label">Password:</label>
               <input type="password" class="form-control" name="password" placeholder="Enter password" required>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
