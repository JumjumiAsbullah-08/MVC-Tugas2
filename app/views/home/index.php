<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daftar | PLN</title>
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


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-warning"><img src="layouts/assets/images/pln.png" alt="" srcset="" style="width:35px !important;"> PLN</h3>
                            </a>
                            <h3 class="text-warning">Daftar</h3>
                        </div>
                        <form action="Home/saveData" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="user_nama" name="user_nama" placeholder="Username">
                            <label for="user_nama">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
                            <label for="user_email">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
                            <label for="user_password">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="user_hp" name="user_hp" placeholder="no Hp">
                            <label for="user_hp">No. Hp</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="user_pos" name="user_pos" placeholder="Kode Pos">
                            <label for="user_pos">Kode Pos</label>
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" id="user_alamat" name="user_alamat" rows="3" placeholder="Alamat"></textarea>
                            
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="" class="text-warning">Lupa Password</a>
                        </div>
                        <input type="submit" name="Home/saveData" value="Daftar" class="btn btn-warning py-3 w-100 mb-4">
                        <p class="text-center mb-0">Sudah memiliki akun? <a href="login" class="text-warning">Masuk</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
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
