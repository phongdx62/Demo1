<?php  
	session_start();
	if($_SESSION["capbac"] == 1)
	{
		echo "Trang admin, <a href='../logout.php''></a> ";
	}
	else
	{
		header("location : ../index.php");
		exit();
	}
?>