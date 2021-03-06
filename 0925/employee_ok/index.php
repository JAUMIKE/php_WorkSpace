<?php
require_once("dbConnect.php");

$result = mysqli_query($link, 
   "select employeeId, firstName, lastName, eMail, e.cityId, cityName  from city as c join employee e on e.cityId = c.cityId");
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
        <h2>Employee List</h2>
        <p><a href="addEmployee.html">Add</a></p>            
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
            <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
              <td><?= $row["firstName"] ?></td>
              <td><?= $row["lastName"] ?></td>
              <td><?= $row["eMail"] ?></td>
              <td><?= $row["cityName"] ?></td>
              <td><a href="editEmployee.php?empid=<?= $row["employeeId"] ?>">Edit</a> |  <a href="deleteEmployee.html">Delete</a></td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>    


</body>
</html>