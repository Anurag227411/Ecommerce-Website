<?php

 echo $id = $_GET['id'];
include 'Config.php';
mysqli_query($con, "DELETE FROM `tblproduct` WHERE Id = $id ");
header("location:index.php");

?>