<?php
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
            <div class="card-header mb-5">
                <h4>Add Student 
                    <a href="index.php" class="btn btn-info float-end">VIEW RECORD</a>
</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST">
                <div class="mb-3">
                    <label for="matno">Student Mat. Number</label>
                    <input type="text" name="matno" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stdname">Student Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stdmail">Student Mail</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stdphone">Student Phone</label>
                    <input type="number" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="stdcourse">Student course</label>
                    <input type="text" name="course" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>