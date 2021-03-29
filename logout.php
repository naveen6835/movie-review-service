<?php
// unset($_COOKIE['movierating']);
setcookie('movierating', '', time()-1000);
session_start();
if($_SESSION['admin'] === 1){
  session_destroy();
}
header('Location: index.php');
 ?>
