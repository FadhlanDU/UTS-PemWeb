<?php

require './config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $newName = $_POST['new_name'];
    $newPrice = $_POST['new_price'];
    $newImage = $_POST['new_image'];

    $sql = "UPDATE products SET name='$newName', price='$newPrice', image='$newImage', updated_at=NOW() WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Produk</title>
</head>
<body>
    <h2>Edit Data Produk</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>ID:</label>
        <input type="text" name="id" required>
        <br>
        <label>New Name:</label>
        <input type="text" name="new_name" required>
        <br>
        <label>New Price:</label>
        <input type="text" name="new_price" required>
        <br>
        <label>New Image:</label>
        <input type="file" name="new_image" required>
        <br>
        <input type="submit" value="Update Data">
    </form>
</body>
</html>
