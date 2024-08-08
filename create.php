<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = $_POST['names'];
    $description = $_POST['description'];
    $known_as = $_POST['known_as'];
    $prominent_work = $_POST['prominent_work'];

    $sql = "INSERT INTO details_of_gods (Names, Description, Known_as, Prominent_Work) VALUES ('$names', '$description', '$known_as', '$prominent_work')";

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
    <title>Add New God</title>
</head>
<body>
    <h1>Add New God</h1>
    <form action="create.php" method="POST">
        <label for="names">Names:</label>
        <input type="text" id="names" name="names"><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br>

        <label for="known_as">Known as:</label>
        <input type="text" id="known_as" name="known_as"><br>

        <label for="prominent_work">Prominent Work:</label>
        <textarea id="prominent_work" name="prominent_work"></textarea><br>

        <input type="submit" value="Add God">
    </form>
    <a href="indexx.php">Back to Home</a>
</body>
</html>
