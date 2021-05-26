<?php
include 'config.php';

$sql = "SELECT * FROM interview";
$result = mysqli_query($conn, $sql);

$post_arr = array();
$dept_arr = array();
$date_arr = array();
$time_arr = array();
$int_id_arr = array();

$count = mysqli_num_rows($result);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
    $i = 0;
  while($row = mysqli_fetch_assoc($result)) {
      
      $int_id = $row['INT_ID'];
      $post= $row['POST'];
      $dept = $row['DEPT'];
      $date = $row['DATE'];
      $time = $row['TIME'];
      
      // Creating timestamp from given date

        $timestamp = strtotime($date);

        // Creating new date format from that timestamp

        $date = date("d-m-Y", $timestamp);
      
        $int_id_arr[$i] = $int_id;
        $post_arr[$i] = $post;
        $dept_arr[$i] = $dept;
        $date_arr[$i] = $date;
        $time_arr[$i] = $time;
        
    $i++;
  }
} else {
  echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Manage Interview</h4>
        </div>
    
    <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Interview ID</th>
            <th scope="col">Post</th>
            <th scope="col">Department</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            
            <?php
            for($j=0;$j<$count;$j++){
                ?>
            
            <tr>
            <th scope="row"><?php echo $int_id_arr[$j]; ?></th>
            
            <td><?php echo $post_arr[$j]; ?></td>
            
            <td><?php echo $dept_arr[$j]; ?></td>
            
            <td><?php echo $date_arr[$j]; ?></td>
            
            <td><?php echo $time_arr[$j]; ?></td>
            
            <td>
            <a href="" class="btn btn-success" style="margin: 2px;">Start</a>
            <a href=<?php echo "edit_interview.php?id=".$int_id_arr[$j] ?> class="btn btn-warning" style="margin: 2px;">Edit</a>
            <a href="" class="btn btn-danger" style="margin: 2px;">Completed</a>
            </td>
          </tr>
            
            <?php
            }
            ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
<style>
    .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
</style>
</html>