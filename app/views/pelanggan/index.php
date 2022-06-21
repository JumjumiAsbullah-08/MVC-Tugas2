<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrator | PLN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="layouts/assets/images/pln.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="layouts/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="layouts/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="layouts/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="layouts/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="admin" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-warning"><img src="layouts/assets/images/pln.png" alt="" srcset="" style="width:35px !important;"> PLN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="layouts/assets/images/admin.png" alt="" style="width: 50px; height: 50px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                        <?php echo $_SESSION['user_nama']; ?>
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="admin" class="nav-item nav-link" ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="golongan" class="nav-item nav-link"><i class="fa fa-th-large me-2"></i>Golongan</a>
                    <a href="pelanggan" class="nav-item nav-link active"><i class="fa fa-users me-2"></i>Pelanggan</a>
                    <a href="laporan_admin" class="nav-item nav-link"><i class="fa fa-newspaper me-2"></i>Laporan</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-warning mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Pesan</span>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div> -->
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Pemberitahuan</span>
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div> -->
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="layouts/assets/images/admin.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">
                            <?php echo $_SESSION['user_nama']; ?>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Profil Ku</a>
                            <a href="#" class="dropdown-item">Pengaturan</a>
                            <a href="login" class="dropdown-item">Keluar</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            
            <div class="col-12">   
            <div class="bg-secondary rounded h-100 p-4">
                <h5 class="m-0 text-light">Data Pelanggan</h5>
                        <button type="button" class="btn btn-warning mb-4" style="margin-left:1040px !important;" data-bs-toggle="modal" data-bs-target="#tambahpelanggan"><i class="fas fa-fw fa-plus"></i> Tambah Pelanggan</button>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr style="text-align:center !important;">
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Golongan</th>
                                            <th scope="col">No. Hp</th>
                                            <th scope="col">No. Seri</th>
                                            <th scope="col">No. Meteran</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 0;
                                    foreach ($data['row_index'] as $row)
                                    foreach ($data['row_gol'] as $c)
                                    {
                                        $no++;
                                        
                                        echo"
                                    <tbody>
                                        <tr style='text-align:center !important;'>
                                            <th>$no</th>
                                            <td>$row[pel_nama]</td>
                                            <td>$row[pel_ktp]</td>
                                                <td>
                                                $c[gol_nama] 
                                            </td>
                                            <td>$row[pel_hp]</td>
                                            <td>$row[pel_ser]</td>
                                            <td>$row[pel_meteran]</td>
                                            <td>$row[pel_aktif]</td>
                                            <td>$row[pel_id_user]</td>
                                            <td>$row[pel_alamat]</td>
                                            <td>
                                            <a href='#' data-bs-toggle='modal' data-bs-target='#editPelanggan_$no' class='btn btn-info' style='width:100px !important;'><i class='fa fa-paper-plane'></i> Edit</a> 
                                            <a href='".URL."/pelanggan/hapusPelanggan/$row[pel_nama]' class='btn btn-warning' style='width:100px !important;'><i class='fa fa-trash'></i> Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <div class='modal fade' id='editPelanggan_$no' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content bg-secondary'>
                                            <form action='Pelanggan/editPelanggan' method='post' enctype='multipart/form-data'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title text-warning' id='exampleModalLabel'>Data Pelanggan | PLN</h5>
                                                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                </div>
                                                <div class='modal-body'>
                                                    <div class='mb-3'>
                                                        <label for='pel_id' class='form-label text-warning'>Nama Pelanggan</label>  
                                                        <input type='text' class='form-control' id='pel_nama' name='pel_nama' value='$row[pel_nama]'>
                                                    </div>
                                                    <div class='mb-3'>
                                                        <label for='pel_ktp' class='form-label text-warning'>NIK Pelanggan</label>
                                                        <input type='number' class='form-control' id='pel_ktp' name='pel_ktp' value='$row[pel_ktp]'>
                                                    </div>
                                                    <div class='mb-3'>
                                                    <label for='golongan' class='form-label text-warning'>Golongan</label>
                                                    <select class='form-select' aria-label='Default select example' name='pel_id_gol' id='pel_id_gol'>
                                                    <option>-Pilih Golongan-</option>
                                                    ";
                                                    if($c['gol_nama'] == 'Pascabayar'){
                                                    echo "
                                                        <option value='Pascabayar' selected>Pascabayar</option>
                                                        <option value='Prabayar'>Prabayar</option>
                                                    ";
                                                    }
                                                    elseif($c['gol_nama'] == 'Prabayar'){
                                                        echo "
                                                        <option value='Pascabayar'>Pascabayar</option>
                                                        <option value='Prabayar' selected>Prabayar</option>
                                                    ";
                                                    }
                                                    else{
                                                        echo "
                                                        <option value='Pascabayar'>Pascabayar</option>
                                                        <option value='Prabayar'>Prabayar</option>
                                                    ";
                                                    }
                                                    echo"
                                                    </select>
                                                    
                                                    </div>
                                                    <div class='mb-3'>
                                                        <label for='pel_hp' class='form-label text-warning'>Nomor Handphone</label>
                                                        <input type='number' class='form-control' id='pel_hp' name='pel_hp' value='$row[pel_hp]'>
                                                    </div>
                                                    <div class='mb-3'>
                                                        <label for='pel_seri' class='form-label text-warning'>Nomor Seri</label>
                                                        <input type='number' class='form-control' id='pel_ser' name='pel_ser' value='$row[pel_ser]'>
                                                    </div>
                                                    <div class='mb-3'>
                                                        <label for='pel_meteran' class='form-label text-warning'>Nomor Meteran (kwh)</label>
                                                        <input type='number' class='form-control' id='pel_meteran' name='pel_meteran' value='$row[pel_meteran]'>
                                                    </div>
                                                    <div class='mb-3'>
                                                    <label for='golongan' class='form-label text-warning'>Status Pelanggan</label>
                                                    <select class='form-select' aria-label='Default select example' name='pel_aktif' id='pel_aktif'>
                                                        <option selected>-Pilih Status-</option>
                                                        ";
                                                        if($row['pel_aktif'] == 'Y'){
                                                            echo "
                                                                <option value='Y' selected>Y</option>
                                                                <option value='N'>N</option>
                                                            ";
                                                            }
                                                            elseif($row['pel_aktif'] == 'N'){
                                                                echo "
                                                                <option value='Y'>Y</option>
                                                                <option value='N' selected>N</option>
                                                            ";
                                                            }
                                                            else{
                                                                echo"
                                                                <option value='Y'>Y</option>
                                                                <option value='N'>N</option>
                                                            ";
                                                            }
                                                            echo"
                                                    </select>
                                                    </div>
                                                    <div class='mb-3'>
                                                    <label for='golongan' class='form-label text-warning'>User Role</label>
                                                    <select class='form-select' aria-label='Default select example' name='pel_id_user' id='pel_id_user'>
                                                    <option selected>-Pilih Role-</option>
                                                        <option>Admin</option>
                                                        <option>Member</option>
                                                    </select>
                                                    </div>
                                                    <div class='form-group mb-3'>
                                                        <label for='golongan' class='form-label text-warning'>Alamat</label>
                                                        <textarea class='form-control' id='pel_alamat' name='pel_alamat' rows='3'>$row[pel_alamat]</textarea>
                                                    </div>
                                                </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-info' data-dismiss='modal'>Batal</button>
                                                        <input class='btn btn-warning' type='submit' name='Pelanggan/savePelanggan' value='Update'>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                    }
            
                    ?>
           </table>
            <!-- start modal input -->
            <div class="modal fade" id="tambahpelanggan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-secondary">
                        <form action="Pelanggan/savePelanggan" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title text-warning" id="exampleModalLabel">Data Pelanggan | PLN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="pel_no" class="form-label text-warning">Nama Pelanggan</label>
                                    <input type="text" class="form-control" id="pel_nama" name="pel_nama">
                                </div>
                                <div class="mb-3">
                                    <label for="pel_ktp" class="form-label text-warning">NIK Pelanggan</label>
                                    <input type="number" class="form-control" id="pel_ktp" name="pel_ktp">
                                </div>
                                <div class="mb-3">
                                <label for="golongan" class="form-label text-warning">Golongan</label>
                                <select class="form-select" aria-label="Default select example" name="pel_id_gol" id="pel_id_gol">
                                    <option selected>-Pilih Golongan-</option>
                                    <?php 
                                        foreach($data['row_home'] as $r){
                                            echo "<option value='$r[gol_nama]'>$r[gol_nama]</option>";
                                        } 
                                        ?>
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="pel_hp" class="form-label text-warning">Nomor Handphone</label>
                                    <input type="number" class="form-control" id="pel_hp" name="pel_hp">
                                </div>
                                <div class="mb-3">
                                    <label for="pel_seri" class="form-label text-warning">Nomor Seri</label>
                                    <input type="number" class="form-control" id="pel_ser" name="pel_ser">
                                </div>
                                <div class="mb-3">
                                    <label for="pel_meteran" class="form-label text-warning">Nomor Meteran (kwh)</label>
                                    <input type="number" class="form-control" id="pel_meteran" name="pel_meteran">
                                </div>
                                <div class="mb-3">
                                <label for="golongan" class="form-label text-warning">Status Pelanggan</label>
                                <select class="form-select" aria-label="Default select example" name="pel_aktif" id="pel_aktif">
                                    <option selected>-Pilih Status-</option>
                                    <option>Aktif</option>
                                    <option>Non Aktif</option>
                                </select>
                                </div>
                                <div class="mb-3">
                                <label for="golongan" class="form-label text-warning">User Role</label>
                                <select class="form-select" aria-label="Default select example" name="pel_id_user" id="pel_id_user">
                                <?php 
                                        foreach($data['row_user'] as $b){
                                            echo "<option value='$b[user_id]'>$b[user_id]</option>";
                                        } 
                                        ?>
                                <!-- <option selected>-Pilih Role-</option>
                                    <option>Admin</option>
                                    <option>Member</option> -->
                                </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="golongan" class="form-label text-warning">Alamat</label>
                                    <textarea class="form-control" id="pel_alamat" name="pel_alamat" rows="3"></textarea>
                                </div>
                            </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Batal</button>
                                    <input class="btn btn-warning" type="submit" name="Pelanggan/savePelanggan" value="Simpan">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end modal input -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="http://jumjumiasbullah.gyar-indonesia.com/">Jumjumi Asbullah</a>, All Right Reserved. 
                        </div>
                        <!-- <div class="col-12 col-sm-6 text-center text-sm-end"> -->
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="layouts/assets/lib/chart/chart.min.js"></script>
    <script src="layouts/assets/lib/easing/easing.min.js"></script>
    <script src="layouts/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="layouts/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="layouts/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="layouts/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="layouts/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="layouts/assets/js/main.js"></script>
</body>

</html>
