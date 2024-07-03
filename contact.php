<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // You can add further processing here, like sending an email

  // For demonstration purposes, just echoing the submitted data
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Message: $message";
}
?>
