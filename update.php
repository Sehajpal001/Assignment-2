<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM details_of_gods WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['names'];
    $description = $_POST['description'];
    $known_as = $_POST['known_as'];
    $prominent_work = $_POST['prominent_work'];

    $sql = "UPDATE details_of_gods SET Names='$names', Description='$description', Known_as='$known_as', Prominent_Work='$prominent_work' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: indexx.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update God Details</title>
</head>
<body>
    <h1>Update God Details</h1>
    <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <label for="names">Names:</label>
        <input type="text" id="names" name="names" value="<?php echo $row['Names']; ?>"><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"><?php echo $row['Description']; ?></textarea><br>

        <label for="known_as">Known as:</label>
        <input type="text" id="known_as" name="known_as" value="<?php echo $row['Known_as']; ?>"><br>

        <label for="prominent_work">Prominent Work:</label>
        <textarea id="prominent_work" name="prominent_work"><?php echo $row['Prominent_Work']; ?></textarea><br>

        <input type="submit" value="Update">
    </form>
    <a href="indexx.php">Back to Home</a>
</body>
</html>

<?php $conn->close(); ?>
