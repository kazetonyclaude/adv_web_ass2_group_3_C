<?php

include("../config/db.php");

$id = $_POST['id'];

$name = $_POST['name'];

$telephone = $_POST['telephone'];

$sql = "UPDATE requests
SET name='$name', telephone='$telephone'
WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: dashboard.php");
}else{
    echo "Update failed";
}

?>
