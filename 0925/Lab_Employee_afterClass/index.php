<?php
    // require("dbconnect.php");
    $link = mysqli_connect('localhost',"root","");
    mysqli_select_db($link,"db0925");

    $sqlCommand = <<<sql
        select employeeId, firstName, lastName, eMail, e.cityId, cityName  
        from city as c 
        join employee e on e.cityId = c.cityId
    
    sql;    

    $result = mysqli_query($link, $sqlCommand);

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Sample</title>
    <style>
        .fail{
            color:red;
        }
        .success{
            color: green;
        }
    </style>
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
        <h2>Employee List</h2>
        <p><a href="addEmployee.php">Add</a></p>            
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>City</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?= $row["firstName"] ?></td>
                    <td><?= $row["lastName"] ?></td>
                    <td><?= $row["eMail"] ?></td>
                    <td><?= $row["cityName"] ?></td>
                    <td><a href="editEmployee.php?id=<?= $row["employeeId"] ?>">Edit</a> |  <a href="deleteEmployee.html">Delete</a></td>
                </tr>
            <?php }?>
          </tbody>
        </table>
      </div>    
</body>

</html>