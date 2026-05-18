<?php

include("../config/db.php");

$id = $_GET['id'];

$sql = "SELECT * FROM requests WHERE id=$id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Request</title>
    <link rel="stylesheet" href="../app/views/admin.css">
</head>
<body>

<form action="update.php" method="post">

<h1>Edit User</h1>

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Name</label>
<input type="text" name="name" value="<?php echo $row['name']; ?>">

<label>Telephone</label>
<input type="text" name="telephone" value="<?php echo $row['telephone']; ?>">

<label>Progress</label>
<input type="text" name="progress" value="<?php echo $row['progress']; ?>">

<input type="submit" value="Update User">

<a href="../app/views/dashboard.php" class="back">Back Dashboard</a>

</form>

</body>
</html>
