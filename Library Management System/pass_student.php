<?php
session_start();
$username=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','lms');
if(isset($_POST['pass'])){
$result = mysqli_query($con,"SELECT * from adminlogin WHERE user='" .$username. "'");
$row=mysqli_fetch_array($result);
if($_POST["op"] == $row["pass"] && $_POST["np"] == $_POST["cnp"] ) {
mysqli_query($con,"UPDATE adminlogin set pass='" . $_POST["np"] . "' WHERE user='" . $username . "'");
echo '<script>alert("Password updated successfully into Database")</script>';
echo'<script>window.location.replace("student_password.php")</script>';
} else{
header("location:student_home.php");
}
}
?>