<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Y&W - Undangan</title>

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?=base_url()?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

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
                <?php 
                    include('topbar.php');
                ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List Undangan</h1>
                    <p class="mb-4">Kalo mau ubah datanya, ke link ini <a target="_blank"
                            href="https://docs.google.com/spreadsheets/d/1qwhMRrixcXCFhM1_E1GLvk6KbCUtSX1tDcZOlUylh8M/edit?gid=0#gid=0">Template Data</a>, terus download as Excel, baru klik tombol dibawah Change Data.</p>
                    
                    <a href="#" class="btn btn-warning btn-icon-split mb-4" data-bs-toggle="modal" data-bs-target="#pesanModal">
                        <span class="icon text-white-50">
                            <i class="fa fa-edit"></i>
                        </span>
                        <span class="text">Ubah Pesan</span>
                    </a>
                    <a target="_blank" href="https://docs.google.com/spreadsheets/d/1qwhMRrixcXCFhM1_E1GLvk6KbCUtSX1tDcZOlUylh8M/edit?gid=0#gid=0" class="btn btn-dark btn-icon-split mb-4">
                        <span class="icon text-white-50">
                            <i class="fa fa-file-excel"></i>
                        </span>
                        <span class="text">Template</span>
                    </a>
                    <a href="#" class="btn btn-success btn-icon-split mb-4" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        <span class="icon text-white-50">
                            <i class="fa fa-file-excel"></i>
                        </span>
                        <span class="text">Change Data</span>
                    </a>
                    <!-- <a href="<?=base_url()?>admin/delete_all" class="btn btn-danger btn-icon-split mb-4">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete All Data</span>
                    </a> -->

                    <!-- Modal -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="uploadModalLabel">Upload File Excel</h5>
                                    <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                </div>
                                <div class="modal-body">
                                    <form id="uploadForm" enctype="multipart/form-data">
                                        <input type="file" name="excel_file" class="form-control mb-3" required>
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </form>
                                    <div id="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal ubah pesan -->
                    <?php if($this->session->flashdata('success')): ?>
                        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
                    <?php endif; ?>
                    <div class="modal fade" id="pesanModal" tabindex="-1" aria-labelledby="pesanModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="pesanModalLabel">Ubah Pesan</h5>
                                    <button type="button" class="btn btn-danger btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admin/simpan_pesan') ?>" method="POST">
                                        <textarea style="height: 70vh; margin-bottom: 20px;" type="textarea" name="pesan" class="form-control" required><?= isset($pesan['pesan']) ? $pesan['pesan'] : '' ?></textarea>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </form>
                                    <div id="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Whatsapp</th>
                                            <th>Instagram</th>
                                            <!-- <th>Created At</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $pesan_db = $this->db->get_where('pesan', ['id' => 1])->row_array();
                                        $isi_pesan = $pesan_db ? $pesan_db['pesan'] : ''; // Pastikan tidak error jika pesan kosong

                                        foreach ($users as $user) : 
                                        $nomor = $user['wa']; // Pastikan hanya angka
                                        $encoded_link = base_url()."?to=".rawurlencode($user['nama']); // Encoding untuk URL
                                        $pesan = str_replace(['##UNDANGAN##', '##LINK##'], [$user['nama'], $encoded_link], $isi_pesan);
                                        $wa_link = "https://wa.me/{$nomor}?text=" . urlencode($pesan);
                                        ?>   
                                        <tr>
                                            <td><a href="<?=base_url('?to='.urlencode($user['nama']))?>"><?= $user['nama']; ?></a></td>
                                            <td><?= $user['wa']; ?></td>
                                            <td><?= $user['ig']; ?></td>
                                            <!-- <td><?= $user['created_at']; ?></td> -->
                                            <td>
                                                <button class="copy-btn btn btn-secondary btn-circle" data-text="<?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?>">
                                                    <i class="fas fa-copy"></i>
                                                </button>
                                                <a target="_blank" href="https://www.instagram.com/<?=$user['ig']?>" class="btn btn-primary btn-circle">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                                <a target="_blank" href="<?= $wa_link ?>" class="btn btn-success btn-circle">
                                                    <i class="fab fa-whatsapp"></i>
                                                </a>
                                                <a href="<?= base_url('admin/del_undangan/' . $user['id']); ?>" 
                                                   class="btn btn-danger btn-circle" 
                                                   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
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
                        <span>Copyright &copy; Your Website 2020</span>
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

    <script>
        $("#uploadForm").submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);

            $.ajax({
                url: "<?= base_url('Admin/upload') ?>",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#result").html('<div class="alert alert-success">Upload berhasil!</div>');
                },
                error: function() {
                    $("#result").html('<div class="alert alert-danger">Terjadi kesalahan!</div>');
                }
            });
        });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".copy-btn").forEach(button => {
            button.addEventListener("click", function() {
                let textToCopy = this.getAttribute("data-text");
                navigator.clipboard.writeText(textToCopy).then(() => {
                    alert("Pesan berhasil disalin!");
                }).catch(err => {
                    console.error("Gagal menyalin teks: ", err);
                });
            });
        });
    });
</script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url()?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url()?>js/demo/datatables-demo.js"></script>

</body>

</html>