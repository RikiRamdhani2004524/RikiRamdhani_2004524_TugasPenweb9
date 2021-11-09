<?php    
   include("koneksi.php");

   $id_pemohon = $_GET['id_pemohon'];

   $query = "delete from formulir where id_pemohon = $id_pemohon";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?id_pemohon=$id_pemohon");
   }

?>