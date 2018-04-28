<?php
include "../db.php";

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$desc = $_POST['desc'];
$kategori = $_POST['kat'];
$foto = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
  
$fotobaru = date('dmYHis').$foto;
$path = "../img/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
  
  $query = "INSERT INTO barang(barang_nama, barang_harga, barang_desc, barang_kategori, barang_pict) VALUES('".$nama."', '".$harga."', '".$desc."', '".$kategori."', '".$fotobaru."')";
  $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: ../index.php"); // Redirect ke halaman index.php
  }
  else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='addBarang.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='addBarang.php'>Kembali Ke Form</a>";
}
?>