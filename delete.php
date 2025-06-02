<?php

include "connect.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $tableName = "crud";

    $sql = "delete from $tableName where id=$id";
    $result = mysqli_query($connect, $sql);

    if($result) {
        header("location: index.php");
    }else {
        die(mysqli_error($connect));
    }

}
?>