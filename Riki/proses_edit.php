<?php

    include("koneksi.php");

    $id_pemohon = $_POST['id_pemohon'];
    $nama_pemohon = $_POST['nama_pemohon'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST ['nomor_hp'];
    $komoditas = $_POST ['komoditas'];
    $teknologi_yang_digunakan = $_POST ['teknologi_yang_digunakan'];
    $status_lahan = $_POST ['status_lahan'];
    $luas_lahan_tersertipikasi = $_POST ['luas_lahan_tersertipikasi'];
    $status_penerapan_cbib = $_POST ['status_penerapan_cbib'];
    $nomor_sertifikat_cbib = $_POST ['nomor_sertifikat_cbib'];
    $tahun_penerbitan = $_POST ['tahun_penerbitan'];
    $nomor_luas_lahan_total = $_POST ['luas_lahan_total'];
    $luas_lahan_usaha_operasional = $_POST ['luas_lahan_usaha_operasional'];
    $lokasi_lahan = $_POST ['lokasi_lahan'];
    $nomor_rekening = $_POST ['nomor_rekening'];

    $query = "update formulir set nama_pemohon = '$nama_pemohon', alamat = '$alamat',  nomor_hp = '$nomor_hp', komoditas = '$komoditas', teknologi_yang_digunakan = '$teknologi_yang_digunakan', status_lahan = '$status_lahan', 'luas_lahan_tersertipikasi' = '$luas_lahan_tersertipikasi', status_penerapan_cbib = '$status_penerapan_cbib' , nomor_sertifikat_cbib = '$nomor_sertifikat_cbib' , tahun_penerbitan= '$tahun_penerbitan' ,nomor_luas_lahan_total = '$nomor_luas_lahan_total' , luas_lahan_usaha_operasional = '$luas_lahan_usaha_operasional' , lokasi_lahan = '$lokasi_lahan' , nomor_rekening = '$nomor_rekening'  where id_pemohon = $id_pemohon";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id_pemohon=$id_pemohon");
    }

?>