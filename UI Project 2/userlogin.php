<?php session_start(); include 'database.php';
if(isset($_POST['login'])){
   $data=mysqli_query($con, "select * from registration where Email='".$_POST['email']."' and 
   Password='".$_POST['password']."'");  
   if(mysqli_num_rows($data)>0) {
    $row = mysqli_fetch_array($data);
    $_SESSION['success']="Login successfull"; $_SESSION['userid']=$row['Firstname'];
    header("location:index.php");
  } else{
    $_SESSION['error']= " <center> User Data Not Found </center> "; header("location:login.php");
   }

}
else {
    $_SESSION['error']="Don't try to hack"; header("location:login.php");
}
?>