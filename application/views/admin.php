<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Y&W - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            include('sidebar.php');
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                    include('topbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Undangan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$summary['undangan']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Hadir</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$summary['hadir']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tidak Hadir
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$summary['tidak_hadir']?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-info-circle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Belum Pasti</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$summary['belum_pasti']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-question fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">RSVP</h6>
                                </div>
                            <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Doa/Pesan</th>
                                                <th>Kehadiran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($comments as $comment) : ?>
                                            <tr>
                                                <td><?= $comment['name']; ?></td>
                                                <td><?= $comment['message']; ?></td>
                                                <td><?= $comment['attendance']; ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <a target="_blank" rel="nofollow" href="<?=base_url()?>admin/doa_kehadiran">Lihat Selengkapnya
                                        RSVP &rarr;</a>
                            </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Undangan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Whatsapp</th>
                                                    <th>Instagram</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($users as $user) : 
                                                $nomor = $user['wa']; // Pastikan hanya angka
                                                $encoded_link = base_url()."?to=".rawurlencode($user['nama']); // Encoding untuk URL
                                                $pesan = "Kepada Yth.\n".
                                                         "Bapak/Ibu/Saudara/i\n".
                                                         $user['nama']."\n".
                                                         "di tempat\n\n".
                                                         "Assalamu'alaikum Warahmatullahi Wabarakatuh\n\n".
                                                         "Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri acara Resepsi Pernikahan Kami\n\n".
                                                         "Info lebih lengkap klik link dibawah ini\n".
                                                         $encoded_link."\n\n".
                                                         "Merupakan suatu kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.\n\n".
                                                         "Wassalamu'alaikum Warahmatullahi Wabarakatuh\n\n".
                                                         "Kami yang berbahagia\n".
                                                         "Keluarga Kedua Mempelai\n\n".
                                                         "Mohon maaf perihal undangan hanya dibagikan melalui pesan ini.";
                                                $wa_link = "https://wa.me/{$nomor}?text=" . urlencode($pesan);
                                                ?>   
                                                <tr>
                                                    <td><a href="<?=base_url('?to='.urlencode($user['nama']))?>"><?= $user['nama']; ?></a></td>
                                                    <td><?= $user['wa']; ?></td>
                                                    <td><?= $user['ig']; ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <a href="#" class="btn btn-primary btn-icon-split mb-4 mt-4">
                                        <span class="icon text-white-50">
                                            <i class="fab fa-instagram"></i>
                                        </span>
                                        <span class="text">Send All Instagram</span>
                                    </a>
                                    <a href="#" class="btn btn-success btn-icon-split mb-4 mt-4">
                                        <span class="icon text-white-50">
                                            <i class="fab fa-whatsapp"></i>
                                        </span>
                                        <span class="text">Send All Whatsapp</span>
                                    </a> -->
                                <a target="_blank" rel="nofollow" href="<?=base_url()?>admin/undangan">Lihat Selengkapnya
                                        Undangan &rarr;</a>
                                </div>
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
                        <span>Copyright &copy; Your Website 2021</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>js/demo/chart-area-demo.js"></script>
    <script src="<?=base_url()?>js/demo/chart-pie-demo.js"></script>

</body>

</html>