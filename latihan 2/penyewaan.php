<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Form Penyewaan</h1>
    <form action="penyewaanpost.php" method="post">
        Judul Buku <input type="text" name="judul"><br>
        Kategori Buku :<select name="kategori">
            <option value="">...</option>
            <option value="fiksi">Fiksi</option>
            <option value="non-fiksi">Non-Fiksi</option>
            <option value="karya ilmiah">Karya Ilmiah</option>
            <option value="majalah">Majalah</option>
        </select><br>
        Tanggal Pinjam :<select name="tanggal">
                <?php
                    for($i=1; $i<=31; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <select name="bulan">
                <?php
                    $month=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                    foreach ($month as $mon) {
                        echo "<option value='$mon'>$mon</option>";
                    }
                ?>
            </select>
            <select name="tahun">
                <?php
                    for($i=2023; $i<=2025; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        <br>
        Lama Pinjam :<input type="number" name="durasi"><br>
        Nama Anggota :<input type="text" name="nama"><br>
        Nama Petugas :<select name="petugas">
            <?php
                $officer=array("Dian Sastro", "Hester Isis", "Yente Sandra");
                foreach($officer as $x) {
                    echo "<option value='$x'>$x</option>";
                }
            ?>
        </select>
        <br>
        <br>
        <input name="btnsubmit" type="submit" value="simpan">
        <input name="btnreset" type="reset" value="batal">
    </form>
</body>
</html>