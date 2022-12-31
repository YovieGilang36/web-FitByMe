<?php
	// require_once 'koneksi.php';
	// if(ISSET($_POST['edit'])){
	// 	$id = $_POST['user_id'];
	// 	$image_name = $_FILES['photo']['name'];
	// 	$image_temp = $_FILES['photo']['tmp_name'];
	// 	$judul = $_POST['firstname'];
	// 	$kat = $_POST['desk'];
	// 	$previous = $_POST['previous'];
	// 	$exp = explode(".", $image_name);
	// 	$end = end($exp);
	// 	$name = time().".".$end;
	// 	if(!is_dir("./upload"))
	// 		mkdir("upload");
	// 	$path = "upload/".$name;
	// 	$allowed_ext = array("gif", "jpg", "jpeg", "png");
	// 	if(in_array($end, $allowed_ext)){
	// 			if(move_uploaded_file($image_temp, $path)){
	// 				mysqli_query($kon, "UPDATE `resep` set `gambar` = '$name', `judul` = '$judul', `deskripsi` = '$kat' WHERE `id` = '$id'") or die(mysqli_error());
	// 				echo "<script type='text/javascript'>
	// 				alert('Updated successfully!');
	// 				location.replace('resep.php');
	// 				</script>";
	// 				}
	// 		}		
	// 	}else{
	// 		echo "<script>alert('Image only')</script>";
	// 	}
	
?>
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
require_once 'koneksi.php';
// membuat variabel untuk menampung data dari form
if(ISSET($_POST['edit'])){
$id = $_POST['user_id'];
$nama_produk   = $_POST['firstname'];
$deskripsi     = $_POST['desk'];
$gambar_produk = $_FILES['photo']['name'];
//cek dulu jika merubah gambar produk jalankan coding ini
if ($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['photo']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'upload/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
    $query  = "UPDATE resep SET gambar = '$nama_gambar_baru', judul = '$nama_produk', deskripsi = '$deskripsi'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($kon, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($kon) .
        " - " . mysqli_error($kon));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Updated successfully!.');window.location='resep.php';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('image only.');window.location='resep.php';</script>";
  }
} else {
  // jalankan query UPDATE berdasarkan ID yang produknya kita edit
  $query  = "UPDATE resep SET gambar = '$nama_gambar_baru', judul = '$nama_produk', deskripsi = '$deskripsi'";
  $query .= "WHERE id = '$id'";
  $result = mysqli_query($kon, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($kon) .
      " - " . mysqli_error($kon));
  } else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Updated successfully!');window.location='resep.php';</script>";
  }
}
}
