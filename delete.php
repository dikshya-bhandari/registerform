<?php

include 'dbconn.php';

extract($_GET);
$query="DELETE FROM FORM WHERE id='$id'";
mysqli_query($conn , $query);
header("location:display.php");
?>