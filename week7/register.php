<?php

include("connection.php");

if(isset($_POST['email'])){

$name = $_POST['fullname'];
$email = $_POST['email'];

$password = password_hash(
$_POST['password'],
PASSWORD_DEFAULT
);

$sql = "INSERT INTO users
(fullname,email,password)
VALUES
('$name','$email','$password')";

mysqli_query($conn,$sql);

echo "<h3>Registration Successful</h3>";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>User Registration</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">

<input
type="text"
name="fullname"
placeholder="Full Name"
required>

<br><br>

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
Register
</button>

</form>

</body>
</html>