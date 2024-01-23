<?php
include "koneksi.php";
if($nim && $nama && $alamat && $fakultas){
    if($op=='edit'){
      $sql1="update mahasiswa set nim='$nim',nama='$nama',alamat='$alamat',fakultas='$fakultas' where id='$id'";
      $q1=mysqli_query($koneksi,$sql1);
      if($q1){
        $sukses="Data berhasil di update";
      }else{
        $eror="Data Gagal di Update";
      }
    }else{
    $sql1="insert into mahasiswa (nim,nama,alamat,fakultas) values('$nim','$nama','$alamat','$fakultas')";
     $q1= mysqli_query($koneksi,$sql1);
     if($q1){
      $sukses="berhasil memasukkan data";
     }else{
      $eror="gagal memasukkan data";
     }
    }
    
  }else{
    $eror="silakan memasukkan semua data";
  }

?>