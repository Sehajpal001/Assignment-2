<?php
include 'config.php';

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM details_of_gods WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: indexx.php");
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
} else {
    $sql = "SELECT * FROM details_of_gods WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete God</title>
</head>
<body>
    <h1>Are you sure you want to delete <?php echo $row['Names']; ?>?</h1>
    <form action="delete.php?id=<?php echo $id; ?>" method="POST">
        <input type="submit" value="Yes">
    </form>
    <a href="indexx.php">Cancel</a>
</body>
</html>

<?php $conn->close(); ?>
