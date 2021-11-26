<?php
include("connection.php");
include("index.php");
if (isset($_POST['Sign_up'])) {
    //Collecting the input that was posted
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];
    $password = md5($password);

    $checkmail = "SELECT * FROM Sign_up WHERE email='$email'";
    $results = mysqli_query($con, $checkmail);

    if (mysqli_num_rows($results) > 0) {
        echo ("<script>alert('User already exist!')</script>");
        //echo ("<script>window.location = 'signup.php';</script>");
    } else {
        $query = "INSERT INTO Sign_up( First_name, Last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
        if (mysqli_query($con, $query)) {
            echo '<script>alert("sign up successful!")</script>';
            die;
            header("Location: index.php");
        }
        echo "error";
    }
}

   // else {
    //    echo "Please Enter Valid information";
    //}
//}
