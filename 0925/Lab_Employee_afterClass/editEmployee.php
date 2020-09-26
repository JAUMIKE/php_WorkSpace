<?php
    require('dbconnect.php');
    // sql語句裡 變數的欄位名稱要加大括號{}
    if(isset($_POST["okButton"])){
      $sqlUpdate = <<<sqlupdate
        update employee set 
          firstName = '{$_POST["firstName"]}',
          lastName = '{$_POST["lastName"]}',
          eMail = '{$_POST["eMail"]}',
          cityId = '{$_POST["cityId"]}'
        where employeeId = {$_POST["employeeId"]}
      sqlupdate;
      //少個i會錯誤
      mysqli_query($link,$sqlUpdate);
      header("location:index.php");
      echo "OK";
    }
    // exit();
    $id = $_GET["id"];
    // var_dump($id);
    $sql = <<<sqlText
       select employeeId, firstName, lastName, eMail, cityId  
       from employee where employeeId = $id
    sqlText;
    
    $result = mysqli_query($link, $sql);

    $row = mysqli_fetch_assoc($result);
    // var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
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

            <input type="hidden" name="employeeId" value="<?= $row["employeeId"]?>">
            
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="firstName">First name:</label>  
              <div class="col-md-4">
              <input id="firstName" name="firstName" value="<?= $row["firstName"]?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="lastName">Last name:</label>  
              <div class="col-md-4">
              <input id="lastName" name="lastName" value="<?= $row["lastName"]?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="eMail">EMail:</label>  
              <div class="col-md-4">
              <input id="eMail" name="eMail" value="<?= $row["eMail"]?>" type="text" placeholder="" class="form-control input-md">
                
              </div>
            </div>
            
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cityId">City:</label>
              <div class="col-md-4">
                <select id="cityId" name="cityId" class="form-control">
                <!-- 比較value值，讓表單進入編輯頁面後，取得該城市的資料 -->
                  <option value="2" <?= ($row["cityId"]==2)? "selected" : "" ?>>TaiPei</option>
                  <option value="4" <?= ($row["cityId"]==4)? "selected" : "" ?>>TaiChung</option>
                  <option value="6" <?= ($row["cityId"]==6)? "selected" : "" ?>>TaiNan</option>
                </select>
              </div>
            </div>
            
            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="okButton"></label>
              <div class="col-md-8">
                <button id="okButton" name="okButton" class="btn btn-success">OK</button>
                <button id="cancelButton" name="cancelButton" class="btn btn-danger">Cancel</button>
              </div>
            </div>
            
            </fieldset>
            </form>
    
    </div>
</body>
</html>