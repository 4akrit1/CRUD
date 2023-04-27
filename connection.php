<!-- connecting database -->

<?php

$conn = new mysqli('localhost', 'root','', 'table');
if(!$conn){
    die(mysqli_error($conn));
}
?>



