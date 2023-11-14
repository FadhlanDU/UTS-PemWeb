<?php

require "./../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM products WHERE id=$id LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Produk</title>
</head>
<body>
    <h2>Hapus Data Produk</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>ID:</label>
        <input type="text" name="id" required>
        <br>
        <input type="submit" value="Hapus Data">
    </form>
</body>
</html>
