<?php
include 'config.php';

// Start the session
session_start();


date_default_timezone_set("Asia/Calcutta");

$applin_id = $_SESSION["applin_id"];
$int_id = $_SESSION["int_id"];

$dept_arr = array();
$post_arr = array();

                     
$sql = "SELECT * FROM applicants WHERE APPLIN_ID=".$applin_id;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  if($row = mysqli_fetch_assoc($result)) {
      $app_name = $row['APP_NAME'];
      $app_email = $row['APP_EMAIL'];
      $app_mobile = $row['APP_MOBILE'];
      $app_dob = $row['APP_DOB'];
      $app_addr = $row['APP_ADDRESS'];
  }
} else {
  echo "0 results";
}

$query = "SELECT * FROM interview WHERE INT_ID=".$int_id;
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) > 0) {
  // output data of each row
  if($r = mysqli_fetch_assoc($res)) {
      $app_post = $r['POST'];
      $app_dept = $r['DEPT'];
      $int_date = $r['DATE'];
      $int_time = $r['TIME'];
      
      
  }
} else {
  echo "0 results";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Attendance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <form method="POST" action="candidate_att.php">
  
    <div class="container box_center">
        <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Applicant Attendance</h4>
        </div>
        
        <div class="form-group">
            <label class="text-md-left">Name</label>
            <input type="text" placeholder="Name" class="form-control" disabled value="<?php echo $app_name; ?>"/>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Date of Birth</label>
                <input type="text" class="form-control" disabled value="<?php echo $app_dob; ?>"/>
            </div>
        
        <div class="form-group">
            <label class="text-md-left">Mobile</label>
            <input type="tel" class="form-control" disabled value="<?php echo $app_mobile; ?>"/>
            </div>
        
            <div class="form-group">
                <label class="text-md-left">Email</label>
                <input type="email" class="form-control" disabled value="<?php echo $app_email; ?>"/>
            </div>
        
         <div class="form-group">
                    <label for="sel1">Post</label>
                    <select class="form-control" id="sel1" name="cdept" disabled>
                          <?php
                            echo "<option value='".$app_post."'>".$app_post."</option>";
                          ?>
                    </select>
            </div>
            
        <div class="form-group">
                    <label for="sel1">Select Department</label>
                    <select class="form-control" id="sel1" name="cdept" disabled>
                      <?php
                            echo "<option value='".$app_dept."'>".$app_dept."</option>";
                          ?>
                    </select>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Date</label>
                <input type="date" class="form-control" value="<?php echo $int_date; ?>" disabled/>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Time</label>
                <input type="time" class="form-control" value="<?php echo $int_time; ?>" disabled/>
            </div>
        
        <center><div class="form-group">
                <input type="submit" class="form-control btn btn-primary" name="give_att_btn" value="Give Attendance" />
            </div></center>
    </div>
        
        </form>
    <?php
    if(isset($_POST['give_att_btn'])){
        
        $current_time = date("h:i");
        $current_date = date("Y-m-d");
        
        $q_insert_ci ="INSERT INTO candidate_interview VALUES ('$applin_id','$app_name','$app_mobile','$app_email','$app_addr','$int_id','$current_time','$current_date','00:00:00','00:00:00','Not Started')";
        

        if (mysqli_query($conn, $q_insert_ci)) {
            echo "New record created successfully in candidate_inteview\n";
            header("Location: candidate_view.php");
            
        } else {
            
            echo "Error: " . $q_insert_ci . "<br>" . mysqli_error($conn);
        }
        
        
    }
    ?>


</body>
<style>
    .box_center{
/*        margin-left: 35%;*/
        padding: 5%;
        height: 1000px;
        margin-top: 10px;
        margin-bottom: 10px;
        width: auto;
        font-weight: bold;
        background-color: #f7d8b2;
        border: none;
        border-radius: 10px;
    }
    .btn_space{
        text-align: center;
        
    }
    
        .btn-primary{
color: #fff;
background-color: #704714;
border-color: #704714;
width: 200px;
}
.btn-primary:hover{
color: #fff;
background-color: #634013;
border-color: #634013;
width: 200px;
}
</style>
</html>

