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
	$Category = $_POST['category'];
	$Description = $_POST['desc'];

	$sql = "INSERT INTO globalCafe(fname, lname, gender, email, phone, class, course, category, description) VALUES ('$Fname', '$Lname', '$Sex', '$Mail', '$Phone', '$Year', '$Course', '$Category', '$Description')";

	if (mysqli_query($conn, $sql)) {
		echo ("<script>alert('Registration was successful!')</script>");
		echo ("<script>window.location = '../html/program.php';</script>");
	} else {
		echo "Error with query";
	}
	mysqli_close($conn);
}
