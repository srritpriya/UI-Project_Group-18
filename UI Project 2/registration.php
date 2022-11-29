<?php session_start(); include 'database.php';
if(isset($_POST['submit']))
{
    mysqli_query($con, "INSERT INTO `registration` (`Firstname`, `Lastname`, `Email`, `Password`, `Mobile`)
    VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."', 
    '".$_POST['password']."','".$_POST['phone']."')");
}
$_SESSION['success']="Successfully Registered"; header("location:register.php"); 