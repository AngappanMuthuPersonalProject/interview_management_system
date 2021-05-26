<?php
include 'config.php';
$applin_id = $_GET['applin_id'];


$sql = "UPDATE candidate_interview SET CANDIDATE_INT_STATUS='Started' WHERE APPLIN_ID=".$applin_id;

date_default_timezone_set("Asia/Calcutta");
$current_time = date("h:i");
$sql1 ="UPDATE candidate_interview SET INT_START_TIME='".$current_time."' WHERE APPLIN_ID=".$applin_id;

echo $current_time;

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: conduct_interview.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if (mysqli_query($conn, $sql1)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
?>
