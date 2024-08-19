<?php
include 'config.php';

$username = $_POST['username'];
$useremail = $_POST['email'];
$password = $_POST['password'];


$query = ("INSERT INTO tbl_user (`user_name`,`email`,`password`) values ('$username','$useremail','$password')");

$result = mysqli_query($con, $query);


if ($result) {
    echo '<script>alert("User created sucessfully")</script>';
    echo '<script>window.location = "http://localhost/myWeb/signup.php";</script>';
    
} else {
    echo '<script>alert("Error")</script>';
}
?>