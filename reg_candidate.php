<?php
include 'config.php';
$dept_arr = array();
$post_arr = array();

                     
$sql = "SELECT * FROM interview";
$result = mysqli_query($conn, $sql);

$i = 0;

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $post = $row["POST"];
    $dept = $row["DEPT"];
    $dept_arr[$i] = $dept;
    $post_arr[$i] = $post;
    $i++;
  }
} else {
  echo "0 results";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Candidate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <form method="POST" action="reg_candidate.php">
  
    <div class="container box_center">
        <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Register Candidate</h4>
        </div>
        
        <div class="form-group">
            <label class="text-md-left">Applicant ID</label>
            <input type="text" class="form-control" name="app_id"/>
            </div>
        
        <div class="form-group">
            <label class="text-md-left">Name</label>
            <input type="text" class="form-control" name="cname"/>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Date of Birth</label>
                <input type="date" class="form-control" name="cdob"/>
            </div>
        
        <div class="form-group">
            <label class="text-md-left">Mobile</label>
            <input type="tel" class="form-control" name="cmob"/>
            </div>
        
            <div class="form-group">
                <label class="text-md-left">Email</label>
                <input type="email" class="form-control" name="cemail"/>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Address</label>
                <textarea class="form-control" name="cadd"></textarea>
            </div>
        
        
        
        
        <div class="form-group">
                    <label>Post</label>
                         <select class="form-control" name="cpost">
                             <option selected disabled value="">Select Post</option>
                          <?php
                          foreach ($post_arr as $value) {
                              $post_var = $value;
                            echo "<option value='".$post_var."'>".$post_var."</option>";
                          }
                          ?>
                    </select>
            </div>
            
        <div class="form-group">
                    <label>Select Department</label>
                    <select class="form-control" name="cdept">
                         <option selected disabled value="">Select Department</option>
                      <?php
                          foreach ($dept_arr as $value) {
                              $dept_var = $value;
                            echo "<option value='".$dept_var."'>".$dept_var."</option>";
                          }
                       ?>
                    </select>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Date</label>
                <input type="date" class="form-control" name="cdate"/>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Time</label>
                <input type="time" class="form-control" name="ctime"/>
            </div>
        
            <div class="form-group">
                <input type="submit" name="reg_cand_btn" class="form-control btn btn-success" value="Register Candidate" />
            </div>
    </div>
        
    </form>
    
    <?php
    
    if(isset($_POST['reg_cand_btn'])){
//        echo $_POST['cpost'];
        
    $q = "SELECT INT_ID FROM interview WHERE POST='".$_POST['cpost']."' AND DEPT='".$_POST['cdept']."'";
    
    $res = mysqli_query($conn, $q);
    $int_id = '';

    if (mysqli_num_rows($res) > 0) {
      // output data of each row
      if($r = mysqli_fetch_assoc($res)) {
        $int_id = $r['INT_ID'];
      }
    } else {
      echo "0 results";
    }
    
//    echo $int_id;
        
    $query = "INSERT INTO applicants VALUES ('".$_POST['app_id']."', '".$_POST['cname']."', '".$_POST['cdob']."', '".$_POST['cmob']."', '".$_POST['cemail']."','".$_POST['cadd']."','".$int_id."')";

    if (mysqli_query($conn, $query)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    }
    
    ?>
    
</body>
<style>
    .box_center{
/*        margin-left: 35%;*/
        padding: 5%;
        height: 1250px;
        margin-top: 10px;
        margin-bottom: 10px;
        width: auto;
        font-weight: bold;
        background-color: lightblue;
        border: none;
        border-radius: 10px;
    }
    .btn_space{
        text-align: center;
        
    }
</style>
</html>

