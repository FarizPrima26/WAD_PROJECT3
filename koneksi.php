<?php
	$conn = mysqli_connect("127.0.0.1:3307	", "root", "", "wad_project3");
	$result = mysqli_query($conn,"SELECT * FROM students");
	//var_dump($result);
	var_dump(mysqli_fetch_object($result));
?>