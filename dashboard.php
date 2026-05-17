<?php
include("connection.php");

$sql = "SELECT * FROM requests ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="container">

<h1>USS Admin Dashboard</h1>

<a href="../index.php" class="back">Back Home</a>

<br><br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Telephone</th>
<th>Problem</th>
<th>Level</th>
<th>Description</th>
<th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['telephone']; ?></td>

<td><?php echo $row['problem']; ?></td>

<td><?php echo $row['level_priority']; ?></td>

<td><?php echo $row['description']; ?></td>

<td>
<a class="btn edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a class="btn delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
