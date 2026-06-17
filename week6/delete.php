<?php

include("db.php");

$sql = "DELETE FROM students
WHERE id=1";

if(mysqli_query($conn,$sql)){

echo "Record Deleted Successfully";

}else{

echo "Delete Failed";

}

?>