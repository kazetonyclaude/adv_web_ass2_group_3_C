<?php

include("../../config/db.php");
$name = stripslashes($_POST['name']);
$name = mysqli_real_escape_string($conn, $name);

$telephone = stripslashes($_POST['telephone']);
$telephone = mysqli_real_escape_string($conn, $telephone);

$problem = stripslashes($_POST['problem']);
$problem = mysqli_real_escape_string($conn, $problem);

$level = stripslashes($_POST['level']);
$level = mysqli_real_escape_string($conn, $level);

$description = stripslashes($_POST['description']);
$description = mysqli_real_escape_string($conn, $description);

$progress = "Pending";
$date = date("Y-m-d H:i:s");

$sql = "INSERT INTO requests
(postedOn,name, telephone, problem, level_priority, description, progress)

VALUES
('$date','$name', '$telephone', '$problem', '$level', '$description', '$progress')";

if(mysqli_query($conn, $sql)){

    echo "
    <h2>Request Submitted Successfully</h2>

    <a href='../../public/index.php'>Go Back</a>
    ";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>