<?php
include 'config.php';
$int_id = $_GET['int_id'];

$sql = "UPDATE interview_status SET STATUS='Started' WHERE INT_ID=".$int_id;


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: manage_interview.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>