<?php 
    //表單送出後檢查POST是否有資料
    if(isset($_POST["okButton"])){
        //引用dbconnect.php檔案
        require('dbconnect.php');
        $sql = <<<sqlText
            insert into employee(firstName,lastName,eMail,cityId) 
            values('{$_POST["firstName"]}','{$_POST["lastName"]}','{$_POST["eMail"]}','{$_POST["cityId"]}');
        sqlText;
    //執行上述的sql insert 語法
    mysqli_query($link,$sql);
    //重新導回首頁
    header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
        <form class="form-horizontal" method="POST" action="">
            <fieldset>
            
            <!-- Form Name -->
            <legend>Employee Data</legend>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="employeeId">Employee #</label>  
              <div class="col-md-4">
              <input id="employeeId" name="employeeId" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="firstName">First name:</label>  
              <div class="col-md-4">
              <input id="firstName" name="firstName" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="lastName">Last name:</label>  
              <div class="col-md-4">
              <input id="lastName" name="lastName" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="eMail">EMail:</label>  
              <div class="col-md-4">
              <input id="eMail" name="eMail" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cityId">City:</label>
              <div class="col-md-4">
                <select id="cityId" name="cityId" class="form-control">
                  <option value="2">TaiPei</option>
                  <option value="4">TaiChung</option>
                  <option value="6">TaiNan</option>
                </select>
              </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="okButton"></label>
              <div class="col-md-8">
                <button type="submit" id="okButton" name="okButton" class="btn btn-success">OK</button>
                <button id="cancelButton" name="cancelButton" class="btn btn-danger">Cancel</button>
              </div>
            </div>
            
            </fieldset>
            </form>
    
    </div>





</body>
</html>