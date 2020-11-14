<?php


	include 'connection.php';

	$delete_id = $_GET['del'];

	$query = "delete from login where id='$delete_id'";

	if (mysqli_query($conn,$query)) {
		//echo " <script> alert('Profile has been deleted');</script> ";
		header('location:index.php');
	}
?>