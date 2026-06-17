<?php
include("db.php");

if(isset($_POST['fullname'])){

$name = $_POST['fullname'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "INSERT INTO students(fullname,email,course)
VALUES('$name','$email','$course')";

mysqli_query($conn,$sql);

echo "<h3>Record Saved Successfully</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
</head>
<body>

<h2>Student Registration Form</h2>

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
type="text"
name="course"
placeholder="Course"
required>

<br><br>

<button type="submit">
Save Student
</button>

</form>

</body>
</html>