<?php
include("dbh.php");
session_start();
?>

<!-- Logic for Updating students' Record -->
<?php
if(isset($_POST['update_student']))
$id = mysqli_real_escape_string($connection, $_POST['id']);
$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$course = mysqli_real_escape_string($connection, $_POST['course']);

$sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course = '$course' WHERE id = '$id'";
$query = mysqli_query($connection, $sql);
if($query){
    $_SESSION['message'] = "Record Updated Successfully";
    header("Location: index.php");
    exit(0);
} else{
    $_SESSION['message'] = "Unable to Update Record";
    header("Location: index.php");
    exit(0);
}
?>


