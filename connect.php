<?php

$connect = new mysqli("localhost", "root", "", "crud");


if($connect) {
    
}
else {
    die(mysqli_error($connect));
}

?>