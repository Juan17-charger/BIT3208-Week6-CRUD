<form method="POST">

<input
type="text"
name="username"
placeholder="Enter Name">

<button type="submit">
Submit
</button>

</form>

<?php

if(isset($_POST['username'])){
    echo "Welcome " .
    $_POST['username'];
}

?>