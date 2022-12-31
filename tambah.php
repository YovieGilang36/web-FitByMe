<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
// membuat variabel untuk menampung data dari form
if(ISSET($_POST['save'])){
$nama_produk   = $_POST['keterangan'];
$deskripsi     = $_POST['artikel'];
$gambar_produk = $_FILES['gambar']['name'];
//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'upload/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO `artikel` VALUES('', '$nama_gambar_baru','$nama_produk ','$deskripsi  ')" or die(mysqli_error());
    $result = mysqli_query($kon, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($kon) .
        " - " . mysqli_error($kon));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
  }
// } else {
//   $query = "INSERT INTO artikel (gambar, judul, artikel) VALUES ('', null, '$nama_produk', '$deskripsi')";
//   $result = mysqli_query($kon, $query);
//   // periska query apakah ada error
//   if (!$result) {
//     // die("Query gagal dijalankan: " . mysqli_errno($kon) .
//     //   " - " . mysqli_error($kon));
//   } else {
//     //tampil alert dan akan redirect ke halaman index.php
//     //silahkan ganti index.php sesuai halaman yang akan dituju
//     echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
//   }
}
}