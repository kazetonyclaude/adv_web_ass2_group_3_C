<?php

include("../config/db.php");

$id = $_POST['id'];
$id = stripslashes($id);
$id = mysqli_real_escape_string($conn, $id);

$name = $_POST['name'];
$name = stripslashes($name);
$name = mysqli_real_escape_string($conn, $name);

$telephone = $_POST['telephone'];
$telephone = stripslashes($telephone);
$telephone = mysqli_real_escape_string($conn, $telephone);

$sql = "UPDATE requests
SET name='$name', telephone='$telephone'
WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: ../app/views/dashboard.php");
}else{
    echo "Update failed";
}

?>
