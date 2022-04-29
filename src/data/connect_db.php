<?php
  $servername = "Test";
  $username = "Bard";
  $password = "0000";
  $dbname= "TEST_BD";

  // Create connection
  $connect = mysqli_connect($servername, $username, $password, $dbname);
  mysqli_set_charset ( $conn , "utf8");

  // Check connection
  if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
 }