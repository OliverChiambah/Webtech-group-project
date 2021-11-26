<?php
session_start();
require("checklogin.php");
$user_data = check_login($con);

require('connection.php');
if (isset($_POST['submit'])) {

	$Fname = $_POST['first'];
	$Lname = $_POST['last'];
	$Sex = $_POST['gender'];
	$Mail = $_POST['mail'];
	$Phone = $_POST['phone'];
	$Year = $_POST['year'];
	$Course = $_POST['course'];
	$Pname = $_POST['pname'];
	$Description = $_POST['desc'];


	$checkmail = "SELECT * FROM cohesionFund WHERE email='$Mail'";
	$results = mysqli_query($con, $checkmail);

	if (mysqli_num_rows($results) > 0) {
		echo ("<script>alert('Sorry you are already registered!')</script>");
		echo ("<script>window.location = 'cohesionFund.html';</script>");
	} else {

		$sql = "INSERT INTO cohesionFund(fname, lname, gender, email, phone, class, course, pname, description) VALUES ('$Fname', '$Lname', '$Sex', '$Mail', '$Phone', '$Year', '$Course', '$Pname', '$Description')";
	}
	if (mysqli_query($con, $sql)) {
		echo ("<script>alert('Registration was successful!')</script>");
		echo ("<script>window.location = 'program.php';</script>");
	} else {
		echo "Error with query";
	}
}
mysqli_close($con);
