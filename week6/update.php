<?php

include("db.php");

$sql = "UPDATE students
SET course='Computer Science'
WHERE id=1";

if(mysqli_query($conn,$sql)){

echo "Record Updated Successfully";

}else{

echo "Update Failed";

}

?>