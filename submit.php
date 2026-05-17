<?php

include("../config/db.php");

$name = mysqli_real_escape_string($conn, $_POST['name']);

$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);

$problem = mysqli_real_escape_string($conn, $_POST['problem']);

$level = mysqli_real_escape_string($conn, $_POST['level']);

$description = mysqli_real_escape_string($conn, $_POST['description']);
$progress = "Pending";
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO requests
(postedOn,name, telephone, problem, level_priority, description, progress)

VALUES
('$date','$name', '$telephone', '$problem', '$level', '$description', '$progress')";

if(mysqli_query($conn, $sql)){

    echo "
    <h2>Request Submitted Successfully</h2>

    <a href='index.php'>Go Back</a>
    ";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>