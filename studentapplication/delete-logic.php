<?php
include_once('dbh.php');
session_start();
?>


<?php
if(isset($_POST['student-delete']))
$stdId = mysqli_real_escape_string($connection, $_POST['student-delete']);
$sql = "DELETE FROM students WHERE id='$stdId'";
$query = mysqli_query($connection, $sql);
if($query){
    $_SESSION['message'] = "Record Deleted Successfully";
    header("Location: index.php");
    exit(0);
}else{
    $_SESSION['message'] = "No Record Deleted";
    header("Location: index.php");
    exit(0);
}

?>