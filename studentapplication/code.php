<?php
include("dbh.php");
session_start();
?>

<!-- Logic for Saving students' Record -->
<?php
if(isset($_POST['save_student']))
$matno = mysqli_real_escape_string($connection, $_POST['matno']);
$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$course = mysqli_real_escape_string($connection, $_POST['course']);

$sql = "INSERT INTO students (matno, name, email, phone, course) VALUES ('$matno', '$name', '$email', '$phone', '$course')";
$query = mysqli_query($connection, $sql);
if($query){
    $_SESSION['message'] = "Student is added successfully";
    header("Location: student-create.php");
   
}else{
    $_SESSION['message'] = "Student not added";
    header("Location: student-create.php");
   
}
?>
