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
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$query = " insert into userregistrationdata (name, email, mobile, username, password, confirmpassword)
values ('$name', '$email', '$mobile', '$username', '$password', '$confirmpassword')";

mysqli_query($con,$query);
// header('location:index.php');

?>