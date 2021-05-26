<?php
include 'config.php';

$sql = "SELECT * FROM candidate_interview WHERE CANDIDATE_INT_STATUS='Not Started' OR CANDIDATE_INT_STATUS='Started' ORDER BY ATTENDANCE_TIME ASC";
$result = mysqli_query($conn, $sql);

$post_arr = array();
$dept_arr = array();
$date_arr = array();
$time_arr = array();
$int_id_arr = array();

$c_id_arr = array();
$c_name_arr = array();
$c_email_arr = array();
$c_mobile_arr = array();

$count = mysqli_num_rows($result);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    $i = 0;
  while($row = mysqli_fetch_assoc($result)) {
      
      
      $applin_id = $row['APPLIN_ID'];
      $app_name= $row['APP_NAME'];
      $app_mob = $row['APP_MOBILE'];
      $app_email = $row['APP_EMAIL'];
      $c_status = $row['CANDIDATE_INT_STATUS'];
      
      
        $c_id_arr[$i] = $applin_id;
        $c_name_arr[$i] = $app_name;
        $c_email_arr[$i] = $app_email;
        $c_mobile_arr[$i] = $app_mob;
        $c_status_arr[$i] = $c_status;
        
    $i++;
  }
} else {
  echo "0 results";
}

      
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Inverview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <form method="POST" action="conduct_interview.php">
    
    <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Conduct Interview</h4>
        </div>
    
    <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Candidate</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            
            <?php
            for($j=0;$j<$count;$j++){
                ?>
            
            <tr>
            <th scope="row"><?php echo $c_id_arr[$j]; ?></th>
            <th scope="row"><?php echo $c_name_arr[$j]; ?></th>
            
            <td><?php echo $c_email_arr[$j]; ?></td>
            
            <td><?php echo $c_mobile_arr[$j]; ?></td>

            <td>
               
                
                <?php
                if($c_status_arr[$j] == 'Not Started'){
                    ?>
                
                    <a href="<?php echo "candidate_start.php?applin_id="."$c_id_arr[$j]"; ?>" class="btn btn-success" style="margin: 2px;width: 100px;">Start</a>
                    
                    
                    <?php
                }else{
                    ?>
                    
                    <a href="<?php echo "candidate_complete.php?applin_id="."$c_id_arr[$j]"; ?>" class="btn btn-danger" style="margin: 2px;width: 100px;">Complete</a>
                    
                    
                    <?php
                }
                ?>
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
    </form>
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