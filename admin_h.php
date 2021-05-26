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
      
    <div class="container box_center">
       <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Admin Home</h4>
        </div>
        
        <div class="form-group">
                <a class="form-control btn btn-danger">Schedule Interview</a>
        </div>
        
        <div class="form-group">
            <a class="form-control btn btn-danger" href="reg_candidate.php">Register Candidate</a>
        </div>
        
        <div class="form-group">
            <a class="form-control btn btn-danger" href="conduct_interview.php">Conduct Interview</a>
        </div>
        
        <div class="form-group">
            <a class="form-control btn btn-danger" href="report.php">Report</a>
        </div>
        
        <div class="form-group">
            <a class="form-control btn btn-danger" href="reg_panel_member.php">Register Panel Member</a>
        </div>
        
        <div class="form-group">
            <a class="form-control btn btn-danger" href="manage_interview.php">Manage Interview</a>
        </div>
    </div>

</body>
<style>
    .box_center{
        padding: 2%;
        margin-top: 10px;
        margin-bottom: 10px;
        width: auto;
        text-align: center;
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