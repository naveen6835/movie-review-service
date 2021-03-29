<?php
$username = $_POST['username'];
$pw = $_POST['password'];
$con = mysqli_connect("localhost","root","root" , "root");
$sql="SELECT * FROM `Users` WHERE username = '$username'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
// echo $username;
// echo mysqli_num_rows($result);
// echo password_verify($pw, $row['u_password']);
if(password_verify($pw, $row['u_password'])){
  // echo $row['u_password'];
  if(isset($_POST['keepLogin'])){
    setcookie("movierating", $username, time()+2592000);
  }else{
    setcookie("movierating", $username, time()+10800);
  }
  if($row[Admin_YesNo] === '1'){
    // echo "yes";
    session_start();
    $_SESSION['admin'] = 1;
    // echo $_SESSION['admin'];
  }
}
header('Location: index.php');
 ?>
