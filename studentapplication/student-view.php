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

    <title>Student Record</title>
</head>
<body>
<div class="container">
    <div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h4>Student's Personal Record
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
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
</div>
               
                <div class="card-body">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            
            <th>Mat. No.</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<tr>

<td><?= $fetch['matno'] ?></td>
<td><?= $fetch['name'] ?></td>
<td><?= $fetch['email'] ?></td>
<td><?= $fetch['phone'] ?></td>
<td><?= $fetch['course'] ?></td>
<td>
  
    <a href="student-edit.php?id=<?= $fetch['id'] ?>" class="btn btn-success btn-sm">Edit</a>
   
</td>
</tr>
<?php
    }
}
else {
    echo "<h5> No Student Record Found </h5>";
}
?>


    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>