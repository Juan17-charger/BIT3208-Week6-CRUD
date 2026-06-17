<?php

session_start();

if(!isset($_SESSION['user'])){

header("Location: login.php");

exit();

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<?php
echo "Welcome "
. $_SESSION['user'];
?>

<br><br>

<a href="logout.php">
Logout
</a>

</body>
</html>