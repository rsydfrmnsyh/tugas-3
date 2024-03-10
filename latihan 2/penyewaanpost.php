<?php
    $title=$_POST['judul'];
    $genre=$_POST['kategori'];
    $date=$_POST['tanggal'];
    $month=$_POST['bulan'];
    $year=$_POST['tahun'];
    $datecomb=date_create($year."-".$month."-".$date);
    $fulldate=date_format($datecomb, "d M Y");
    $duration=$_POST['durasi'];
    $name=$_POST['nama'];
    $officer=$_POST['petugas'];

    $rent=0;
    if ($genre == "ilmiah") {
        $rent = 10000;
    }
    else {
        $rent = 5000;
    }
    $bill = $rent * $duration;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Resume Penyewaan</h1>
    Judul Buku : <?php echo $title ?> <br>
    Kategori Buku : <?php echo $genre ?> <br>
    Tanggal Pinjam : <?php echo $fulldate ?> <br>
    Lama Pinjam : <?php echo $duration ?> Hari <br>
    Biaya Sewa : Rp. <?php echo $bill ?>,- <br>
    Nama Anggota : <?php echo $name ?> <br> 
    Nama Petugas : <?php echo $officer ?> <br>
    <br>
    <a href="penyewaan.php"> Kembali </a>
</body>
</html>