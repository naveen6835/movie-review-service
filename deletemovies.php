<?php
$movid = intval($_GET['q']);
$con = mysqli_connect("localhost","root","root" , "root");
$sql="DELETE FROM Movies WHERE M_ID = '$movid'";
$result = mysqli_query($con,$sql);
?>
