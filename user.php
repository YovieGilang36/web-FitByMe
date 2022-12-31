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
                                <h1 class="h3 mb-0 text-gray-800">User</h1>
                            </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Siti Rohilah</span>
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
                            <h6 class="m-0 font-weight-bold text-primary">User Table</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Height</th>
                                            <th>Weight</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include 'koneksi.php';
                                            $sql = "SELECT * FROM user";
                                            $hasil = mysqli_query($kon,$sql);
                                            $nomer = 0;
                                            while($data = mysqli_fetch_array($hasil,MYSQLI_ASSOC)){
                                                $email= stripslashes ($data['email']);
                                                $name = stripslashes ($data['nama']);
                                                $kelamin = stripslashes ($data['jenis_kelamin']);
                                                $usia= stripslashes ($data['usia']);
                                                $tinggi = stripslashes ($data['tinggi_badan']);
                                                $berat = stripslashes ($data['berat_badan']);
                                                $reg = stripslashes ($data['tanggal_registrasi']);
                                                                                             
                                                    {
                                                $nomer++
                                        ?>
                                        <tr>
                                            <td><?=$nomer?></td>
                                            <td><?=$email?></td>
                                            <td><?=$name?></td>
                                            <td><?=$kelamin?></td>
                                            <td><?=$usia?></td>
                                            <td><?=$tinggi."cm"?></td>
                                            <td><?=$berat."kg"?></td>
                                            <td>
                                                <div >
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?=$nomer ?>">detail</button>
                                                    <a href="delete_user.php?delete=<?php echo $data['email']?>" onclick="return confirm('Are you sure you want to remove <?php echo $data['nama']?>?')">
                                                    <input type="button" class="btn btn-danger" value="delete"></a>
                                                </div>
                                            </td>
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal<?=$nomer?>" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5" id="staticBackdropLabel">Detail User</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                
                                                                <div class="mb-3">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="text" class="form-control"value="<?= $email ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Fullname</label>
                                                                    <input type="text" class="form-control"value="<?= $name ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Gender</label>
                                                                    <input type="text" class="form-control"value="<?= $kelamin ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Age</label>
                                                                    <input type="text" class="form-control"value="<?= $usia ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Height</label>
                                                                    <input type="text" class="form-control"value="<?= $tinggi ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Weight</label>
                                                                    <input type="text" class="form-control"value="<?= $berat ?>" readonly>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Register</label>
                                                                    <input type="text" class="form-control"value="<?= $reg ?>" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                            <!-- Modal Edit End -->   
                                        </tr>
                                        <?php
                                        }
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
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

                    

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