<?php
 include 'config.php';
 
 // Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <form method="POST" action="candidate_login.php">
    
        
    <div class="container box_center">
        <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Candidate Login</h4>
        </div>
        <div class="form-group">
            <label class="text-md-left">Application ID</label>
            <input type="text" class="form-control" name="cappid" required/>
            </div>
            <div class="form-group">
                <label class="text-md-left">Mobile No.</label>
                <input type="tel" class="form-control" name="cmob" required/>
            </div>
        
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" name="cand_log_btn" value="Login" />
            </div>
    </div>
    </form>
    
    <?php
    
    if(isset($_POST['cand_log_btn'])){
           if($_POST['cmob'] != '' && $_POST['cappid'] != ''){
               //if the user name and password is not null 
               
              
               
            $userid = $_POST['cappid'];
             $password = $_POST['cmob'];
             
//             //Convertion of date formate YYYY-MM-DD to DD.MM.YYYY
//            $date =date_create($password);
//            $password = date_format($date,"d.m.Y");
//            echo $password."<br>";
             $sql = "SELECT * FROM applicants WHERE APPLIN_ID='$userid' AND APP_MOBILE='$password'";
             $result = mysqli_query($conn,$sql);

               // output data of each row
               if($row = mysqli_fetch_assoc($result)) {
     //            $usr = $row["APPLIN_ID"];
     //            $pass = $row["APP_DOB"];
     //            echo $usr." ".$pass;
                 $_SESSION['int_id'] = $row['INT_ID'];
                 $_SESSION["applin_id"] = $row["APPLIN_ID"];
                 $_SESSION["app_mob"] = $row["APP_MOBILE"];

                 $applin_id = $row['APPLIN_ID'];
//                 echo $applin_id;
                 
                


                 $query = "SELECT * FROM candidate_interview WHERE APPLIN_ID='".$applin_id."' AND APP_MOBILE='".$password."'";
                 $res = mysqli_query($conn, $query);
                 if(mysqli_num_rows($res) > 0) {
                     // Candidate have attendance or [ Candidate existing in the 'interview_candidate' table
                     header("Location: candidate_view.php");
                } else {
                    // Candidate does not have attendance
                    header("Location: candidate_att.php");
                }

             } else {
               echo "0 results";
             }

            mysqli_close($conn);//        header("Location: applicant_att.php");

       
           }else{
               echo '<script>alert("Invalid Password");</script>';
           }
    }
    ?>


</body>
<style>
    .box_center{
        padding: 5%;
        margin-bottom: 10%;
        margin-top: 10%;
        height: 400px;
        width: 100%;
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
width: 100%;
}
.btn-primary:hover{
color: #fff;
background-color: #634013;
border-color: #634013;
width: 100%;
}

</style>
</html>