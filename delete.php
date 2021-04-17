<?php
include('add.php');
$my=$_GET['id'];
$todelete="Delete from form where sn='$my'";
$del=mysqli_query ($server,$todelete);
if(!$del)
{
	echo"not delete";
}
else{
	header('location: display.php');
	
}

?>