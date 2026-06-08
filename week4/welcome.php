<?php
session_start();

$_SESSION["user"] = "Juan";

echo "Welcome " .
$_SESSION["user"];
?>