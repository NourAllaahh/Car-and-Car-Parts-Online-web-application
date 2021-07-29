<?php
include('config.php');
$sql ="insert into user (name,email,Password)
values('$_post[user]','$_post[email]','$_post[password]')";
if(!mysqli_query($con,$sql))
{
	echo "Error inserting".mysqli_error[$con];
}
else
		echo"1 row added"
?>