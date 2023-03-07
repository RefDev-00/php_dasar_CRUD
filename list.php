<?php

include('connection_db.php');

$query = mysqli_query($connect, "SELECT * FROM guru");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
    <body>
        <form action="search.php" method="GET">
            <input type="text" name="keyword" placeholder="Keyword .." value="<?php echo $_GET['keyword']?>">
            <button type="submit">Search</button>
        </form>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
            <?php
            foreach($results as $result):?>
            <tr>
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['alamat']?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>