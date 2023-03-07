<?php
$nama = $_GET['nama'];
$profesi = $_GET['profesi'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Basic PHP</title>
</head>

<body>
    <div>
        <form action="">
            <input type="text" name="nama">
            <input type="text" name="profesi">
            <input type="submit">
        </form>
    </div>
    <h1>Selamat Datang, <?php echo $nama; ?></h1>
    <p>Profesi Kamu, <?php echo $profesi; ?></p>



    <?php
    if (!empty($_POST['proses'])) {
        print_r($_POST);
    }
    ?>
    <form action="" method="post">
        Nama: <input type="text" name="nama">
        <br><br>
        Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
        <br><br>
        Program Studi :
        <select name="program_studi">
            <option value="Sistem_Informasi">Sistem Informasi</option>
            <option value="Teknik_Informatika">Teknik Informatika</option>
            <option value="Manajemen_Informatika">Manajemen Informatika</option>
        </select>
        <br><br>
        <input type="submit" name="proses" value="submit">
    </form>
</body>

</html>