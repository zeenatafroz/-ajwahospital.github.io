<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "connect Successfully";
}
else{
	echo "No connection";
}

mysqli_select_db($con, 'ajwahospitaldata');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = " insert into contactusdata (name, email, message)
values ('$name', '$email', '$message')";

mysqli_query($con,$query);
// header('location:index.php');

?>