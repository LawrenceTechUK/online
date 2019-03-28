<?php
$conn = mysqli_connect("localhost", "root", "Pavalon12345", "users");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "UPDATE `users` SET `banned` = '1' WHERE `users`.`id` = 25";
}
?>