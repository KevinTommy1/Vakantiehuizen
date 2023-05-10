<?php
$servername = "localhost";
$dbname = "vakantiehuizen";
$username = "root";
$password = "987654";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo"<script>console.log('Connected successfully with ".$servername."')</script>";
} catch(PDOException $e) {
    $message = addslashes($e->getMessage());
    echo "<script>console.log('Connection failed: " . $message . "')</script>";
}
?>