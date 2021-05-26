<?php
include 'config.php';

$dept_arr = array();
$post_arr = array();
$int_id_arr = array();

$select_query = "SELECT * FROM candidate_interview WHERE STATUS='Not Started'";
$res = mysqli_query($conn, $select_query);

if (mysqli_num_rows($res) > 0) {
  // output data of each row
    $i = 0;
  while($r = mysqli_fetch_assoc($res)) {
      $dept_arr[$i] = $r['DEPT'];
      $post_arr[$i] = $r['POST'];
      $int_id_arr[$i] = $r['INT_ID'];
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
            <h4 style="font-weight: bold;padding-bottom: 10px;">Panel Member View</h4>
        </div>
    
    
    <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">SN</th>
            <th scope="col">Post</th>
            <th scope="col">Department</th>
            <th scope="col">Date</th>
            <th scope="col">Starting time</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Bootstrap 4 CDN and Starter Template</td>
            <td>Software Development</td>
            <td>12-05-2000</td>
            <td>10:00 AM</td>
            <td>
            <button type="button" class="btn btn-success">Go to Interview</i></button>
            <button type="button" class="btn btn-danger">Completed</button>
            </td>
          </tr>
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