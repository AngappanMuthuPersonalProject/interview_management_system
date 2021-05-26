<?php
include 'config.php';
session_start();
$int_id = $_SESSION["int_id"];
$applin_id = $_SESSION["applin_id"];

$c_int_start_time ='';
$c_int_end_time ='';
$wish = 'All the best!';
$c_status = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload = "JavaScript:AutoRefresh(5000);">
    <form method="POST" action="candidate_view.php" >
    
    <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Candidate View</h4>
            <button name="logout_btn" style="float: right;" class="btn btn-warning">Logout</button>
            <?php
            if(isset($_POST['logout_btn'])){
                session_destroy();
                header("Location: candidate_login.php");
            }
            ?>
        </div>
        
        </form>
    
    <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <!--<th scope="col">SN</th>-->
            <th scope="col">Post</th>
            <th scope="col">Department</th>
<!--            <th scope="col">Date</th>
            <th scope="col">Starting time</th>-->
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          
          
          <?php
          
            $sql = "SELECT * FROM interview WHERE INT_ID='$int_id'";
            $query_cs = "SELECT * FROM candidate_interview WHERE APPLIN_ID='$applin_id'";
            $res = mysqli_query($conn, $query_cs);
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              if($row = mysqli_fetch_assoc($result)) {
                    $post = $row["POST"];
                    $dept = $row["DEPT"];
                    $date = $row["DATE"];
                    $time = $row["TIME"];
                    $meet_id = $row['MEET_ID'];
                    
                    // Creating timestamp from given date

                    $timestamp = strtotime($date);

                    // Creating new date format from that timestamp

                    $date = date("d-m-Y", $timestamp);
                    ?>
          
          <tr>
              <!--<th scope="row"><?php // echo $int_id; ?></th>-->
            <td><?php echo $post; ?></td>
            <td><?php echo $dept; ?></td>
<!--            <td><?php // echo $date; ?></td>
            <td><?php // echo $time; ?></td>-->
            
            <td>
                <?php
                
                if($res){
                  if(mysqli_num_rows($res) > 0){
                    if($r = mysqli_fetch_assoc($res)) {
                        $c_status = $r['CANDIDATE_INT_STATUS'];
                        $c_int_start_time = $r['INT_START_TIME'];
                        $c_int_end_time = $r['INT_END_TIME'];
                       
//                        echo $c_status;

                        switch ($c_status){
                            case 'Not Started':
                                echo '<a href="#" class="btn btn-warning">Wait</a>';
                                break;
                            case 'Started':
                                echo '<a href="'.$meet_id.'" class="btn btn-success">Goto Interview</a>';
                                break;
                            case 'Completed':
                                echo '<a href="#" class="btn btn-info">Completed</a>';
                                break;
                            default : 
                                echo '';
                                break;
                               
                        }
                    }  
                  }
              }
                
                ?>
            </td>
          </tr>
          
          <?php
              }
              
              
             
            } else {
              echo "0 results";
            }
          
          ?>                  
        </tbody>
      </table>
        
        <?php
        // Interview duration calculations
        $int_dur = mysqli_query($conn,"SELECT * FROM candidate_interview WHERE CANDIDATE_INT_STATUS='Completed' ORDER BY INT_END_TIME DESC");
            // creates an array from the mysql query above
            
            if (mysqli_num_rows($int_dur) > 0) {
                // output data of each row
                while($int_dur_rows = mysqli_fetch_assoc($int_dur)) {     
                    
                    $int_st_time = $int_dur_rows['INT_START_TIME'];
                    $int_ed_time = $int_dur_rows['INT_END_TIME'];
                    
                    $d1 = new DateTime($int_st_time);
                    $d2 = new DateTime($int_ed_time);
                    $interval = $d2->diff($d1);
               

                    echo '<br><br><center><h5><p style="">The average interview duration for the previously completed candidates   '.$interval->format('%I  minutes').'</p></h5></center><br>';
                    
                   
                    break;
                    
                    
                }
              } else {
//                echo "0 results";
              }
              
//        $workingHours = (strtotime($b) - strtotime($a)) / 3600;        
        if($c_status == 'Not Started'){
            

            //Peaple count 
            //get all the records who are waiting / Not Started ==> result
            $waiting = mysqli_query($conn,"SELECT * FROM candidate_interview WHERE CANDIDATE_INT_STATUS='Not Started' ORDER BY ATTENDANCE_TIME ASC");
            // creates an array from the mysql query above
            
            if (mysqli_num_rows($waiting) > 0) {
                // output data of each row
                $waiting_pos = 0;
                while($waiting_rows = mysqli_fetch_assoc($waiting)) {
                  //get all appli_id from 
                  $waiting_pos++;
                  if($waiting_rows['APPLIN_ID']==$applin_id){
                      break;
                  }             
                    
                }
              } else {
//                echo "0 results";
              }
              
//              echo $waiting_pos;
              
              
//            print_r($ranking_array);
            // gets the number of higher scores from the array
            $waiting_count = mysqli_num_rows($waiting); 
//            print_r($ranked_above);
            // takes the total number ranked above and adds a 1 to get their rank
            $current_waiting = $waiting_count++;
            ?>
        
        
        
        <center>
            <table>
            <tr>
                <td><h4>You are at </h4></td>
                <td><h4><p style="color:green;margin: 20px;";><?php echo $waiting_pos; ?></p></h4></td>
                <td><h4>position.</h4></center></td>
         
            </tr>
            <tr>
                <td><h4>Total waiting </h4></td>
                <td><h4><p style="color:blue;margin: 20px;";><?php echo $current_waiting; ?></p></h4></td>
                <td><h4> candidates.</h4></center></h4></td>
            </tr>
        </table>
        </center>
        
        <?php

           
            
        }elseif($c_status=='Started'){
              echo '<center><p>'.$wish.'</p></center><br>';
              echo '<center><p>Your Interview Started on '.date("d-m-Y").' at '.$c_int_start_time.'</p></center><br>';
          }else{
            echo '<center><p>Your Interview Started on '.date("d-m-Y").' at '.$c_int_start_time.'</p></center><br>';
            echo '<center><p>Your Interview Ended on '.date("d-m-Y").' at '.$c_int_end_time.'</p></center><br>';
             echo '<center><p>'.$wish.'</p></center><br>';
          }
          
        ?>
    </div>
  </div>
</div>
</body>

   <script type = "text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>

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