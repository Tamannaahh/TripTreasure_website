<?php
include "db_conn.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  // Prepare the SQL statement to prevent SQL injection
  $stmt = $conn->prepare("DELETE FROM `user` WHERE id = ?");
  $stmt->bind_param("i", $id);
  $result = $stmt->execute();

  if ($result) {
    header("Location: index.php?msg=Data deleted successfully");
  } else {
    echo "Failed: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
} else {
  echo "Invalid Request";
}
?>
