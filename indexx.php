<?php
include 'config.php';

$sql = "SELECT * FROM details_of_gods";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hindu Gods</title>
    
    <link rel="stylesheet" href="Index.css">

    
</head>
<body>
    <h1>Hindu Gods Details</h1>
    <a href="create.php">Add New God</a>
    <table border="1">
        <tr>
            <th>Names</th>
            <th>Description</th>
            <th>Known as</th>
            <th>Prominent Work</th>
            <th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['Names']; ?></td>
            <td><?php echo $row['Description']; ?></td>
            <td><?php echo $row['Known_as']; ?></td>
            <td><?php echo $row['Prominent_Work']; ?></td>
            <td>
                <a href="read.php?id=<?php echo $row['id']; ?>">View</a>
                <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
