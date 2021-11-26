<?php
session_start();
require("checklogin.php");
$user_data = check_login($con);

if (isset($_POST['submit'])) {

	$Fname = $_POST['first'];
	$Lname = $_POST['last'];
	$Sex = $_POST['gender'];
	$Mail = $_POST['mail'];
	$Phone = $_POST['phone'];
	$Year = $_POST['year'];
	$Course = $_POST['course'];
	$Description = $_POST['desc'];

	$sql = "INSERT INTO buddyUp(fname, lname, gender, email, phone, class, course, description) VALUES ('$Fname', '$Lname', '$Sex', '$Mail', '$Phone', '$Year', '$Course', '$Description')";

	if (mysqli_query($con, $sql)) {
		echo ("<script>alert('Registered successfully!')</script>");
		echo ("<script>window.location = 'program.php';</script>");
	} else {
		echo "Error with query";
	}
}
mysqli_close($con);
