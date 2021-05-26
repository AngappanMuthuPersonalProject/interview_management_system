<?php
include('config.php');
$id = $_GET['id'];

?>

<html>
<head>
<title>Edit Interview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$sql = "SELECT * FROM interview WHERE INT_ID=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="text-center">
            <center>
            <h1>Edit Interview</h1>
                <form method="POST" >
                    <input type="text" value=<?php echo $row['POST']; ?> /><br><br>
                    <input type="text" value=<?php echo $row['DEPT']; ?> /><br><br>
                    <input type="text" value=<?php echo $row['DATE']; ?> /><br><br>
                    <input type="text" value=<?php echo $row['TIME']; ?> /><br><br>
                    <textarea> <?php echo $row['MEET_ID']; ?></textarea><br><br>
                    <input type="submit" value="Update" />
                </form>
            </center>
        </div>
    <?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</body>