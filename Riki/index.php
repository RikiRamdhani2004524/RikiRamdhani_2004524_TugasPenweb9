<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from formulir";
    $hasil = mysqli_query($koneksi, $query);
?>
    
    <h1> Tambah Identitas </h1>
    <form action="proses_insert.php" method="POST">
        Nama pemohon: <input type="text" name="nama_pemohon" value=""><br/>
        Alamat : <textarea name="alamat"></textarea><br/>
        Nomor_hp : <input type="text" name="nomor_hp" value=""><br/>
        komoditas : <input type="text" name="komoditas" value=""><br/>
        teknologi_yang_digunakan : <input type="text" name="teknologi_yang_digunakan" value=""><br/>
        status_lahan : <input type="text" name="status_lahan" value=""><br/>
        luas_lahan_tersertipikasi : <input type="text" name="luas_lahan_tersertipikasi" value=""><br/>
        status_penerapan_cbib : <input type="text" name="status_penerapan_cbib" value=""><br/>
        nomor_sertifikat_cbib : <input type="text" name="nomor_sertifikat_cbib" value=""><br/>
        tahun_penerbitan : <input type="text" name="tahun_penerbitan" value=""><br/>
        luas_lahan_total : <input type="text" name="luas_lahan_total" value=""><br/>
        luas_lahan_usaha_operasional : <input type="text" name="luas_lahan_usaha_operasional" value=""><br/>
        lokasi_lahan : <input type="text" name="	lokasi_lahan" value=""><br/>
        nomor_rekening : <input type="text" name="nomor_rekening" value=""><br/>
        nomor :  <input type="type" name="id_pemohon" value="">

        <input type="submit" value="simpan">
    </form>
    
    <h1> Tabel Identitas </h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama pemohon</th>
            <th>Alamat</th>
            <th>Nomor_hp</th>
            <th>komoditas</th>
            <th>teknologi_yang_digunakan </th>
            <th>status_lahan</th>
            <th>luas_lahan_tersertipikasi</th>
            <th>status_penerapan_cbib</th>
            <th>nomor_sertifikat_cbib</th>
            <th>tahun_penerbitan</th>
            <th>luas_lahan_total</th>
            <th>luas_lahan_usaha_operasional</th>
            <th>lokasi_lahan</th>
            <th>nomor_rekening</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_pemohon']."</td>";
            echo "<td>".$row['nama_pemohon']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['nomor_hp']."</td>";
            echo "<td>".$row['komoditas']."</td>";
            echo "<td>".$row['teknologi_yang_digunakan']."</td>";
            echo "<td>".$row['status_lahan']."</td>";
            echo "<td>".$row['luas_lahan_tersertipikasi']."</td>";
            echo "<td>".$row['status_penerapan_cbib']."</td>";
            echo "<td>".$row['nomor_sertifikat_cbib']."</td>";
            echo "<td>".$row['tahun_penerbitan']."</td>";
            echo "<td>".$row['luas_lahan_total']."</td>";
            echo "<td>".$row['luas_lahan_usaha_operasional']."</td>";
            echo "<td>".$row['lokasi_lahan']."</td>";
            echo "<td>".$row['nomor_rekening']."</td>";
            echo "<td><a href='edit.php?id_pemohon=".$row['id_pemohon']."'>edit</a></td>";
            echo "<td><a href='delete.php?id_pemohon=".$row['id_pemohon']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>  
    </table>
</body>
</html>

