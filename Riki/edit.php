<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <?php
        include ("koneksi.php");
        $id_pemohon = $_GET['id_pemohon'];

        $query = "select * from formulir where id_pemohon = $id_pemohon";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil);
    ?>
    <h1>Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_pemohon" value="<?php echo $row['id_pemohon']; ?>">
        Nama pemohon : <input type="text" name="nama_pemohon" value="<?php echo $row['nama_pemohon']; ?>"><br/>
        Alamat : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br/>
        nomor_hp : <input type="text" name="nomor_hp" value="<?php echo $row['nomor_hp']; ?>"><br/>
        komoditas : <input type="text" name="komoditas" value="<?php echo $row['komoditas']; ?>"><br/>
        teknologi_yang_digunakan : <input type="text" name="teknologi_yang_digunakan" value="<?php echo $row['teknologi_yang_digunakan']; ?>"><br/>
        status_lahan : <input type="text" name="status_lahan" value="<?php echo $row['status_lahan']; ?>"><br/>
        luas_lahan_tersertipikasi : <input type="text" name="luas_lahan_tersertipikasi" value="<?php echo $row['luas_lahan_tersertipikasi']; ?>"><br/>
        status_penerapan_cbib : <input type="text" name="status_penerapan_cbib" value="<?php echo $row['status_penerapan_cbib']; ?>"><br/>
        nomor_sertifikat_cbib : <input type="text" name="nomor_sertifikat_cbib" value="<?php echo $row['nomor_sertifikat_cbib']; ?>"><br/>
        tahun_penerbitan : <input type="text" name="tahun_penerbitan" value="<?php echo $row['tahun_penerbitan']; ?>"><br/>
        luas_lahan_total : <input type="text" name="luas_lahan_total" value="<?php echo $row['luas_lahan_total']; ?>"><br/>
        luas_lahan_usaha_operasional : <input type="text" name="luas_lahan_usaha_operasional" value="<?php echo $row['luas_lahan_usaha_operasional']; ?>"><br/>
        lokasi_lahan : <input type="text" name="lokasi_lahan" value="<?php echo $row['lokasi_lahan']; ?>"><br/>
        nomor_rekening : <input type="text" name="nomor_rekening" value="<?php echo $row['nomor_rekening']; ?>"><br/>
       
        <input type="submit" value="simpan">
    </form>
</body>
</html>