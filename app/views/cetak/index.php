<title>Cetak</title>
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
<h3>Data Pelanggan</h3>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr style="text-align:center !important;">
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">NIK</th>
                                            <th scope="col">Golongan</th>
                                            <th scope="col">No. Hp</th>
                                            <th scope="col">No. Seri</th>
                                            <th scope="col">No. Meteran</th>
                                            <th scope="col">Alamat</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $no = 0;
                                    foreach ($data['row_index'] as $row)
                                    foreach ($data['row_home'] as $c)
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
                                            <td>$row[pel_alamat]</td>
                                        </tr>
                                    </tbody>
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
           <script>
            window.print();
           </script>
