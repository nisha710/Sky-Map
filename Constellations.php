<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display-swap" rel="stylesheet">

</head>
<body>

</body>
</html> -->

<?php

$con =mysqli_connect('localhost','root','Nisha@111','dbms');
// require_once('config/db.php');
$query="select * from constellations";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Constellations Table</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display-swap" rel="stylesheet">

 
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Constellations Table</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td> Constellation Name </td>
                                <td> Area (degree sq.) </td>
                                <td> Know More </td>
                            </tr>
                            <tr>
                               <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                  <td><?php echo $row['C_name']; ?></td>  
                                  <td><?php echo $row['Area_square_degrees']; ?></td>
                                  <?php
                                  echo "<td><a href='1.php?Namee=" . $row["C_name"] . "'>Read More</a></td>";
                                  ?>
                                  
                               </tr>
                               <?php
                                }

                              

                                ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>