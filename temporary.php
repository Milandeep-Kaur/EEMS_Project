<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "eems";
$conn = mysqli_connect($host, $user, $password, $db);

if ($conn === false) {
    echo "Connection error: " . mysqli_connect_error();
}
$id=$_GET['id'];
$exit=date("Y-m-d");
$q="UPDATE admin SET exitt ='$exit' WHERE id=$id";
mysqli_query($conn,$q);
// session_start();
//         $message= "exit done";
//         $_SESSION['exitMessage']=$message;
header('location:exit.php');

 ?>