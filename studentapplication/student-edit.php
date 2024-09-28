<?php
session_start();
require('dbh.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Boostrap link -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
    <div>
    <?php
include('alert.php');
?>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header mb-5">
                <h4>Update Student Record
                    <a href="index.php" class="btn btn-danger float-end">BACK</a>
</h4>
            </div>
            <div class="card-body">
            <?php
    if(isset($_GET['id'])){
$id = mysqli_real_escape_string($connection, $_GET['id']);
$sql = "SELECT * FROM students WHERE id='$id'";
$query = mysqli_query($connection, $sql);
$row = mysqli_num_rows($query);
if($row>0){
    $fetch = mysqli_fetch_array($query);
   
    ?>


                <form action="update-logic.php" method="POST">
                <div>
                   
                    <input type="hidden" name="id" value= "<?= $fetch['id'] ?>" class="form-control">
                </div>
                <div>
                <label for="name">Mat. Number</label>
                    <input type="text" name="matno" value= "<?= $fetch['matno'] ?>" disabled="disabled" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" value= "<?= $fetch['name'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stdmail">Student Mail</label>
                    <input type="email" name="email" value= "<?= $fetch['email'] ?>"  class="form-control">
                </div>
                <div class="mb-3">
                    <label for="number">Student Phone</label>
                    <input type="number" name="phone" value= "<?= $fetch['phone'] ?>"  class="form-control">
                </div>
                <div class="mb-3">
                    <label for="course">Student course</label>
                    <input type="text" name="course" value= "<?= $fetch['course'] ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="update_student" class="btn btn-primary">Update Record</button>
                </div>
                </form>
            
            <?php
        }
            }
            ?>
            </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>