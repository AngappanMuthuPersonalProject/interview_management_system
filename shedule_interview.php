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
            <h4 style="font-weight: bold;padding-bottom: 10px;">Shedule Interview</h4>
        </div>
        
<!--<section class="row">
    <input type="submit" class="btn btn-primary" value="Create Interview" href="#" style="margin-top: 20px;padding: 10px; font-weight: bolder;"/>
</section>-->
        
        <form>
            <div class="form-group">
                <label>Post</label>
                <input type="text" class="form-control" />
            </div>
            
            <div class="form-group">
                <label>Department</label>
                    <label for="sel1">Select Department</label>
                    <select class="form-control" id="sel1">
                      <option>Software Development</option>
                      <option>Fashion Technology</option>
                    </select>
            </div>
            
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" />
            </div>
            
            <div class="form-group">
                <label>Start Interview</label>
                <input type="time" class="form-control" />
            </div>
            
            <div class="form-group">
                <input type="submit" class="form- btn btn-success" value="Create Interview" />
            </div>
            
        </form>
    </div>
    


</body>
<style>
    .box_center{
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 5%;
        height: 550px;
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