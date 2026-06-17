<?php
include("db.php");

$result = mysqli_query(
$conn,
"SELECT * FROM students"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Students</title>
</head>
<body>

<h2>Student Records</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Course</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

echo "<tr>";

echo "<td>".$row['id']."</td>";

echo "<td>".$row['fullname']."</td>";

echo "<td>".$row['email']."</td>";

echo "<td>".$row['course']."</td>";

echo "</tr>";

}

?>

</table>

</body>
</html>