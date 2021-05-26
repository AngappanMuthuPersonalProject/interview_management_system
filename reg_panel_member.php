<?php
include 'config.php';

$dept_arr = array();
$post_arr = array();
$int_id_arr = array();

$select_query = "SELECT * FROM interview";
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
</head>
<body>
    
    <form method="POST" action="reg_panel_member.php">
  
    <div class="container box_center">
        <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Register Panel Member</h4>
        </div>
        
        <div class="form-group">
            <label class="text-md-left">Name</label>
            <input type="text" class="form-control" name="pname"/>
            </div>
        
        <div class="form-group">
            <label class="text-md-left">Designation</label>
            <input type="text" class="form-control" name="pdesig"/>
            </div>
        
        <div class="form-group">
         <label for="comment">Address</label>
         <textarea class="form-control" rows="5" id="comment" name="paddr"></textarea>
       </div> 
        
        <div class="form-group">
                <label class="text-md-left">Date of Birth</label>
                <input type="date" class="form-control" name="pdob"/>
            </div>
        
            <div class="form-group">
                <label class="text-md-left">Email</label>
                <input type="email" class="form-control" name="pemail"/>
            </div>
        
        <div class="form-group">
            <label class="text-md-left">Mobile</label>
            <input type="tel" class="form-control" name="pmob"/>
            </div>   
        
    
    
           <div class="form-group">
                <label>Post</label>
                    <select class="form-control" name="ppost">
                        <option selected hidden>Select  Post</option>
                        <?php
                        foreach ($post_arr as $value) {
                          echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                        ?>
                    </select>
            </div>
            
        <div class="form-group">
                <label>Department</label>
                    
                    <select class="form-control" name="pdept">
                      <option selected hidden>Select Department</option>
                        <?php
                        foreach ($dept_arr as $value) {
                          echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                        ?>
                    </select>
            </div>
    
        
        <div class="form-group">
                <label class="text-md-left">Date</label>
                <input type="date" class="form-control" name="pdate"/>
            </div>
        
        <div class="form-group">
                <label class="text-md-left">Time</label>
                <input type="time" class="form-control" name="dtime"/>
            </div>
        
            <div class="form-group">
                <input type="submit" name="reg_panel_mem_btn" class="form-control btn btn-success" value="Register Panel Member" />
            </div>
    </div>
    
</form>
    
    <?php
        if(isset($_POST['reg_panel_mem_btn'])){
            $name = $_POST['pname'];
            $desig = $_POST['pdesig'];
            $addr = $_POST['paddr'];
            $email = $_POST['pemail'];
            $mob = $_POST['pmob'];
            $post = $_POST['ppost'];
            $dept = $_POST['pdept'];
            $date = $_POST['pdate'];
            $time = $_POST['ptime'];
            
            $sql = "INSERT INTO panel_member (MEM_NAME, MEM_DESIGNATION, MEM_MOBILE, MEM_EMAIL,MEM_ADDRESS,INT_ID) VALUES ('$name','$desig', '$mob', '$email','$addr')";

            if (mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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

