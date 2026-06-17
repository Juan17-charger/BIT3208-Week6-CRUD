<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"studentdb2"
);

if(!$conn){
die("Connection Failed");
}

echo "Connected Successfully";

?>