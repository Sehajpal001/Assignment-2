<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM details_of_gods WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View God Details</title>
</head>
<body>
    <h1><?php echo $row['Names']; ?></h1>
    <p>Description: <?php echo $row['Description']; ?></p>
    <p>Known as: <?php echo $row['Known_as']; ?></p>
    <p>Prominent Work: <?php echo $row['Prominent_Work']; ?></p>
    <a href="indexx.php">Back to Home</a>
</body>
</html>

<?php $conn->close(); ?>
