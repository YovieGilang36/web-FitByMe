<?php
	// require_once 'koneksi.php';
	// if(ISSET($_POST['save'])){
	// 	$image_name = $_FILES['gambar']['name'];
	// 	$image_temp = $_FILES['gambar']['tmp_name'];
	// 	$firstname = $_POST['judul'];
	// 	$lastname = $_POST['oleh'];
    //     $durasi = $_POST['durasi'];
    //     $deskrip = $_POST['deskripsi'];
	// 	$exp = explode(".", $image_name);
	// 	$end = end($exp);
	// 	$name = time().".".$end;
	// 	if(!is_dir("./vidio"))
	// 		mkdir("vidio");
	// 	$path = $name;
	// 	$allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
	// 	if(in_array($end, $allowed_ext)){
	// 		if(move_uploaded_file($image_temp, $path)){
	// 			mysqli_query($kon, "INSERT INTO `workout` VALUES('', '$path','$firstname', '$durasi', '$deskrip', '$lastname', '')") or die(mysqli_error());
	// 			echo "<script type='text/javascript'>
    //             alert('Saved successfully!');
    //             location.replace('workout.php');
    //             </script>";
	// 		}	
	// 	}else{
	// 		echo "<script>alert('Videos only')</script>";
	// 	}
	// }
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
// membuat variabel untuk menampung data dari form
if(ISSET($_POST['save'])){
    $firstname = $_POST['judul'];
		$lastname = $_POST['oleh'];
        $durasi = $_POST['durasi'];
        $deskrip = $_POST['deskripsi'];
        $cover = $_POST['cover'];
$gambar_produk = $_FILES['gambar']['name'];
//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('avi', 'flv', 'wmv', 'mov', 'mp4'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, 'vidio/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO `workout` VALUES('', '$nama_gambar_baru','$firstname', '$durasi', '$deskrip', '$lastname', '$cover')" or die(mysqli_error());
    $result = mysqli_query($kon, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($kon) .
        " - " . mysqli_error($kon));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Saved successfully!');window.location='workout.php';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('video only');window.location='workout.php';</script>";
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FitByMe</title>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">FBM</div>
                <div class="sidebar-brand-text mx-3">FitByMe</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

                        <!-- Nav Item - Dashboard -->
                        <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-user"></i>
                    <span>User</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="workout.php">
                    <i class="fas fa-dumbbell"></i>
                    <span>Workout</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="nutrisi.php">
                    <i class="fas fa-newspaper"></i>
                    <span>Articles</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="resep.php">
                    <i class="fa-brands fa-nutritionix"></i>
                    <span>Meals</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="d-sm-flex align-items-center justify-content-between mb-1">
                                <h1 class="h3 mb-0 text-gray-800">Workout</h1>
                            </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/face1.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Workout Table</h6>
                                </div>
                                
                                <div class="col card-header text-right">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">+ Add New</button>
                                </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Duration</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require 'koneksi.php';
                                            $query = mysqli_query($kon, "SELECT * FROM `workout`") or die(mysqli_error());
                                            $nomer = 0;
                                            while($fetch = mysqli_fetch_array($query)){
                                                $nomer++
                                        ?>
                                        <tr>
                                            <td><?=$nomer?></td>
                                            <td><?php echo $fetch['judul']?></td>
                                            <td><?php echo $fetch['durasi']?></td>
                                            <td><?php echo $fetch['oleh']?></td>
                                            <td><?php echo $fetch['deskripsi']?></td>					
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $fetch['id']?>"><span class="glyphicon glyphicon-edit"></span> Update</button>
                                                <a href="delete_workout.php?delete=<?php echo $fetch['id']?>" onclick="return confirm('Are you sure you want to remove <?php echo $fetch['judul']?>?')">
                                                <input type="button" class="btn btn-danger" value="delete"></a>
                                            </td>
                                <div class="modal fade" id="edit<?php echo $fetch['id']?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form method="POST" enctype="multipart/form-data" action="edit_workout.php">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Workout</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <input type="hidden" name="previous" value="<?php echo $fetch['vidio']?>"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" name="photo" value="<?php echo $fetch['vidio']?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="hidden" value="<?php echo $fetch['id']?>" name="id"/>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['judul']?>" name="judul" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Duration</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['durasi']?>" name="durasi" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['deskripsi']?>" name="deskripsi" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>By</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetch['oleh']?>" name="oleh" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br style="clear:both;"/>
                                                <div class="modal-footer">
                                                    <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                    <button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>				
                                        </tr>
                                        <?php
                                         }
                                        ?>
                                           
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; FitByMe 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah-->
    <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false"
       tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Insert Workout</h5>
               </div>                
            <form method="post" action="" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Videos</label>
                    <input type="file" name="gambar" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label class="form-label">cover</label>
                    <input name="cover" class="form-control" placeholder="paste link cover"></input>
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input name="judul" class="form-control"></input>
                </div>
                <div class="mb-3">
                    <label class="form-label">Duration</label>
                    <input name="durasi" class="form-control" placeholder="00:00"></input>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">By</label>
                    <input name="oleh" class="form-control"></input>
                </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
            </form>
           </div>
       </div>
   </div>
   <!-- Modal Tambah End -->
                

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>