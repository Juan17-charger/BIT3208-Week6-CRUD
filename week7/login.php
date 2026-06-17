<?php

session_start();
include("connection.php");

if(isset($_POST['email'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE email='$email'";

$result = mysqli_query($conn,$sql);

$user = mysqli_fetch_assoc($result);

if(
$user &&
password_verify(
$password,
$user['password']
)
){

$_SESSION['user']
= $user['fullname'];

header("Location: dashboard.php");

exit();

}else{

echo "<h3>Invalid Login</h3>";

}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="POST">

<input
type="email"
name="email"
placeholder="Email"
required>

<br><br>

<input
type="password"
name="password"
placeholder="Password"
required>

<br><br>

<button type="submit">
Login
</button>

</form>

</body>
</html>