<?php

namespace App\Core;

class Error
{

	public function fileNotFound()
	{
		echo "
		<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>Administrator | PLN</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content='' name='keywords'>
    <meta content='' name='description'>

    <!-- Favicon -->
    <link href='layouts/assets/images/pln.png' rel='icon'>

    <!-- Google Web Fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap' rel='stylesheet'> 
    
    <!-- Icon Font Stylesheet -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' rel='stylesheet'>

    <!-- Libraries Stylesheet -->
    <link href='layouts/assets/lib/owlcarousel/assets/owl.carousel.min.css' rel='stylesheet'>
    <link href='layouts/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css' rel='stylesheet' />

    <!-- Customized Bootstrap Stylesheet -->
    <link href='layouts/assets/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Template Stylesheet -->
    <link href='layouts/assets/css/style.css' rel='stylesheet'>
</head>

<body>
    <div class='container-fluid position-relative d-flex p-0'>
        <!-- Spinner Start -->
        <div id='spinner' class='show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center'>
            <div class='spinner-border text-warning' style='width: 3rem; height: 3rem;' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

    <!-- 404 Start -->
    <div class='container-fluid pt-4 px-4'>
                <div class='row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0'>
                    <div class='col-md-6 text-center p-4'>
                        <i class='bi bi-exclamation-triangle display-1 text-warning'></i>
                        <h1 class='display-1 fw-bold'>404</h1>
                        <h1 class='mb-4'>Page Not Found</h1>
                        <p class='mb-4'>Maaf, halaman yang Anda cari tidak ada di situs web kami! Mungkin pergi ke halaman beranda kami atau mencoba menggunakan pencarian?</p>
                        <a class='btn btn-warning rounded-pill py-3 px-5' href='login'>Go Back To Home</a>
                    </div>
                </div>
            </div>
            <!-- 404 End -->
 
        <!-- Back to Top -->
        <a href='#' class='btn btn-lg btn-warning btn-lg-square back-to-top'><i class='bi bi-arrow-up'></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js'></script>
    <script src='layouts/assets/lib/chart/chart.min.js'></script>
    <script src='layouts/assets/lib/easing/easing.min.js'></script>
    <script src='layouts/assets/lib/waypoints/waypoints.min.js'></script>
    <script src='layouts/assets/lib/owlcarousel/owl.carousel.min.js'></script>
    <script src='layouts/assets/lib/tempusdominus/js/moment.min.js'></script>
    <script src='layouts/assets/lib/tempusdominus/js/moment-timezone.min.js'></script>
    <script src='layouts/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'></script>

    <!-- Template Javascript -->
    <script src='layouts/assets/js/main.js'></script>
</body>

</html>
		";
	}
}