<?php
require('dbh.php');  
session_start();
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
                <div class="card-header">
                    <h4>Student Details
                        <a href="student-create.php" class="btn btn-primary float-end">Add Student</a>
                </div>
                <div class="card-body">
<table class="table table-bordered table-striped">
    <thead>
        <tr>
       
            <th style="text-align:center">S/N</th>
            <th>Mat. No.</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
<?php
$serial = 1;
$sql = "SELECT * FROM students";
$query = mysqli_query($connection, $sql);
$result = mysqli_num_rows($query);

if($result > 0){
    foreach($query as $stdData){
        ?>
<tr>
<td style="text-align:center"><?= $serial ?></td>
<td><?= $stdData['matno'] ?></td>
<td><?= $stdData['name'] ?></td>
<td><?= $stdData['email'] ?></td>
<td><?= $stdData['phone'] ?></td>
<td><?= $stdData['course'] ?></td>
<td>
    <a href="student-view.php?id=<?= $stdData['id']; ?>" class="btn btn-info btn-sm d-inline mt-0">View</a>
    <a href="student-edit.php?id=<?= $stdData['id']; ?>" class="btn btn-success btn-sm d-inline mt-0">Edit</a>
    
    <form action="delete-logic.php" method="POST" class="d-inline">
    <button type="submit" name="student-delete" value="<?= $stdData['id']; ?>" class="btn btn-danger btn-sm mt-0">Delete</button>
    </form>
</td>
</tr>
<?php
$serial++;
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

</body>
</html>