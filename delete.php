<?php

include("../config/db.php");

$id = $_GET['id'];

$sql = "DELETE FROM requests WHERE id=$id";

if(mysqli_query($conn, $sql)){
    header("Location: ../app/views/dashboard.php");
}else{
    echo "Delete failed";
}

?>
