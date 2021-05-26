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
    
    <form action="panel_login.php" method="POST">
  
    <div class="container box_center">
        <div class="container">
            <h4 style="font-weight: bold;padding-bottom: 10px;">Panel Member Login</h4>
        </div>
        <div class="form-group">
            <label class="text-md-left">Mobile</label>
                <input type="tel" class="form-control" />
            </div>
            <div class="form-group">
                <label class="text-md-left">Date of Birth</label>
                <input type="date" class="form-control" />
            </div>
        
            <div class="form-group">
                <input type="submit" name="p_login_btn" class="form-control btn btn-success" value="Login" />
            </div>
    </div>
    
    </form>
    <?php
        if(isset($_POST['p_login_btn'])){
            
        }
    ?>

</body>
<style>
    .box_center{
        padding: 5%;
        margin-top: 10px;
        margin-bottom: 10px;
        height: 400px;
        width: 400px;
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