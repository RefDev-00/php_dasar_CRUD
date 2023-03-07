<?php
include('connection_db.php'); //Koneksi ke Database
$keyword = $_GET['keyword']; // mengambil keyword yang dikirim dari form
$query = mysqli_query($connect, "SELECT * FROM guru WHERE nama='$keyword'"); // mengambil data pada database berdasarkan nama sesuai keyword yang ditampung pada variabel $keyword.
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<html>

<body>
    <a href="add.php">Tambah Data</a>
    <br>
    </br>
    <form action="search.php" method="GET">
        <input type="text" name="keyword" placeholder="Keyword .." value="<?php echo $_GET['keyword'] ?>">
        <button type="submit">Search</button>
    </form>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <?php
        foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a>
                    <a href="edit.php?id=<?php echo $result['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>