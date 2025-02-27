<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /><!-- 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stylish Portfolio - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet"/>
        <link href="css/style2.css" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Allison' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <!-- <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
                <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
                <li class="sidebar-nav-item"><a href="#about">About</a></li>
                <li class="sidebar-nav-item"><a href="#services">Services</a></li>
                <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
                <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
            </ul>
        </nav> -->
        <!-- Header-->

        <audio id="myAudio" autoplay muted>
          <source src="<?= base_url('assets/lagu.mp3'); ?>" type="audio/mpeg">
        </audio>
        <header class="parallax-container">
            <div class="mengundang container px-4 px-lg-5 text-center" id="mengundang">
                <h5 class="dear">Dear :</h5>
                <h5 class="kepada"><?= htmlspecialchars($data['nama']); ?></h5>
                <h5 class="pleasebe">Please be a part of our happiest moment</h5>
                <div class="button-lagu" onclick="toggleAudio()"><img src="<?= base_url('assets/img/down-arrow.png');?>"></div>
            </div>
        	<div class="layer layer-1" data-speed="3"></div>
	        <div class="layer layer-2" data-speed="4">
                <div class="wedding-of container px-4 px-lg-5 text-center" style="z-index: 100;">
                    <h5 class="tweddingof">The Wedding of</h5>
                    <div class="cont-berdua">
                        <h5 class="siyudha">Yudha</h5>
                        <h5 class="siwiddy">Widdy</h5>
                        <span class="dan-icon">&</span>
                    </div>
                </div>  
            </div>
	        <div class="layer layer-3" data-speed="6"></div>
        </header>
        <div class="spacer1">
        </div>
        <!-- About-->
        <section class="content-section surat-section" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <p class="surat">
                            “Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah)”<br>QS. Az-Zariyat:49
                        </p>
                    </div>
                    <!-- <div class="col-12">
                        <div class="counter" style="font-size: 10px;">Scroll Pos: <span id="scroll-pos">0</span> | Threshold: <span id="threshold-value">0</span> | Container Height: <span id="containerHeight-value">0</span> | Device Height: <span id="tinggiLayar-value">0</span> | Nilai Variabel: <span id="variable-value">0</span></div>
                    </div> -->
                </div>
            </div>
        </section>
        <div class="container-img-scroll" id="cont-scroll">
        	<div class="scroll-image" id="targetImage"></div>
        	<div class="cont-g-b" id="cont-groom-bride">
        		<div class="yudha-section" id="yudha">
		        	<div class="yudha"><p>Yudha</p></div>
		        	<div class="pratama"><p>Pratama</p></div>
		        	<div class="putra" id="putra"><p>Putra Pertama dari Bapaknya Yudha dan Ibunya Yudha</p></div>
		        	<div class="groom" id="groom"><p>Groom</p></div>
        		</div>
	        	<div class="widdy-section" id="widdy">
		        	<div class="widdy" id="w_nama"><p>Widdy</p></div>
		        	<div class="clhaudya" id="w_nama"><p>Clhaudya R.</p></div>
		        	<div class="putri" id="putri"><p>Putri Kedua dari Bapaknya Widdy dan Ibunya Widdy</p></div>
	        		<div class="bride" id="bride"><p>Bride</p></div>
	        	</div>
	        </div>
    	</div>
        <div class="spacer2">
        </div>
        <!-- Services-->
        <section class="content-section text-center agenda" id="services">
            <div class="container px-4 px-lg-5">
                <div class="agenda-heading">
                    <h3 class="agenda-title">Agenda</h3>
                    <h2 class="tgl-title">13<span>April</span></h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="akad col-6">
                        <h4><strong>Akad</strong></h4>
                        <h1>09:00</h1>
                        <h5>s/d Selesai</h5>
                    </div>
                    <div class="resepsi col-6">
                        <h4><strong>Resepsi</strong></h4>
                        <h1>10:00</h1>
                        <h5>s/d Selesai</h5>
                    </div>
                    <div class="alamat col-12">
                        <p>Jl. Rumahnya widdy kayanya, daerah jombang, 
Tangerang Selatan</p>
                        <a class="btn-buka-sayang" href="https://maps.app.goo.gl/1ngW2q2tyRhXmPrC7">Buka Maps</a>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7149644208935!2d106.71016519999999!3d-6.301133900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbacf58d83dd%3A0x8c7fa6c598eea12c!2sLapangan%20badminton%20PB%2039%20Kalimati!5e0!3m2!1sid!2sid!4v1740616689378!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- Callout-->
        <div class="container-gallery">
            <div class="gallery-heading">
                <h6 class="gallery-title">Galeri</h6>
                <h6 class="fkami-title">Foto Kami</h6>
            </div>
            <div class="row gallery">
                <div class="col-6">
                    <img src="<?=base_url('assets/img/gallery/gal2.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-6">
                    <img src="<?=base_url('assets/img/gallery/gal4.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-6">
                    <img src="<?=base_url('assets/img/gallery/gal5.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-6">
                    <img src="<?=base_url('assets/img/gallery/gal6.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-6">
                    <img src="<?=base_url('assets/img/gallery/gal5.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-6">
                    <img src="<?=base_url('assets/img/gallery/gal6.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
            </div>
        </div>
    <script>
    let currentImageIndex = 0;
    let images = document.querySelectorAll('.gallery img');

    function openModal(img) {
        currentImageIndex = Array.from(images).indexOf(img);
        document.getElementById('modalImage').src = img.src;
        new bootstrap.Modal(document.getElementById('imageModal')).show();
    }

    function prevImage() {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        document.getElementById('modalImage').src = images[currentImageIndex].src;
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        document.getElementById('modalImage').src = images[currentImageIndex].src;
    }
</script>
        <!-- Modal Preview -->
        <div class="modal fade" id="imageModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <button type="button" class="btn-close position-absolute top-0 end-0 p-3" data-bs-dismiss="modal"></button>
                        <img id="modalImage" class="modal-img" src="" style="width: 100%; max-width: 500px;">
                        <div class="mt-2">
                            <button class="btn btn-secondary" onclick="prevImage()">&#10094; Prev</button>
                            <button class="btn btn-secondary" onclick="nextImage()">Next &#10095;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <div class="footer text-center">
            <div class="glass-bg">
                <div class="ty-heading">
                    <h6 class="terima-title">Terima</h6>
                    <h6 class="kasih-title">Kasih</h6>
                </div>
                <div class="row">
                    <div class="col-6 notes-hadiah">
                        <p>Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran dan hadiah indah Anda.</p>
                    </div>
                    <div class="col-6 icon-hadiah">
                        <div class="circle-img" id="openModal">
                            <img src="<?=base_url('assets/img/gift.png')?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <div id="hadiahModal" class="modal-hadiah">
                        <div class="modal-hadiah-content">
                            <span class="close-hadiah-btn">&times;</span>
                            <div class="row detail-hadiah">
                                <div class="col-12">
                                    <div class="debit-card">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg" alt="Bank Logo" class="bank-logo">
                                        <div class="bank-name">BCA</div>
                                        <div class="card-number">5435051267</div>
                                        <div class="card-holder">ADAM MARULYANTO</div>
                                        <!-- <div class="expiry">VALID THRU 12/28</div> -->
                                    </div>

                                </div>
                                <hr>
                                <div class="col-12 alamat-hadiah">
                                    <h4>Alamat Rumah</h4>
                                    <p>Jl. Rumahnya yudha atau rumah widdy, Ciputat Timur, Tangerang Selatan, 15416</p>
                                    <a class="btn-buka-hadiah" href="https://maps.app.goo.gl/1ngW2q2tyRhXmPrC7">Buka Maps</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        // Ambil elemen modal
                        const modal = document.getElementById("hadiahModal");
                        const openModalBtn = document.getElementById("openModal");
                        const closeModalBtn = document.querySelector(".close-hadiah-btn");

                        // Buka modal saat tombol diklik
                        openModalBtn.addEventListener("click", () => {
                            modal.style.opacity = "1";
                            modal.style.bottom = "-20vh";
                        });

                        // Tutup modal saat tombol close diklik
                        closeModalBtn.addEventListener("click", () => {
                            modal.style.opacity = "0";
                            modal.style.bottom = "-100vh";
                        });

                        // Tutup modal saat klik di luar modal content
                        window.addEventListener("click", (e) => {
                            if (e.target === modal) {
                                modal.style.opacity = "0";
                                modal.style.bottom = "-100vh";
                            }
                        });

                    </script>
        <!-- Portfolio-->
        <div class="container-komen">
            <div class="form-komentar">
                <h6 class="form-title">Doa</h6>
                <h6 class="komentar-title">Kehadiran</h6>
            </div>
            <form id="commentForm" action="<?= base_url('Home/submit_comment'); ?>" method="post">
                <input class="form-control mb-3" type="text" id="name" name="name" placeholder="Nama" required>
                <textarea class="form-control mb-3" id="message" name="message" placeholder="Ucapan" required></textarea>
                <select class="form-control mb-3" id="attendance" name="attendance" required>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                    <option value="Belum Pasti">Belum Pasti</option>
                </select>
                <button class="btn-kirim-ucapan" type="submit" id="submitComment">Kirim</button>
            </form>

            <hr>
            <div id="commentSection">
            </div>

            <!-- Pagination -->
            <div class="pagination" id="pagination"></div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#commentForm').submit(function (event) {
                        event.preventDefault(); // Mencegah reload halaman

                        $.ajax({
                            url: $(this).attr('action'),
                            type: 'POST',
                            data: $(this).serialize(),
                            dataType: 'json',
                            success: function (response) {
                                if (response.status === 'success') {
                                    $('#commentResponse').html('<p style="color: green;">' + response.message + '</p>');
                                    $('#commentForm')[0].reset(); // Reset form setelah sukses
                                } else {
                                    $('#commentResponse').html('<p style="color: red;">' + response.message + '</p>');
                                }
                            },
                            error: function () {
                                $('#commentResponse').html('<p style="color: red;">Terjadi kesalahan, coba lagi.</p>');
                            }
                        });
                    });
                });
            </script>

        </div>
        
        <!-- Footer-->
        <div class="footer text-center">
            <div class="glass-bg">
                <div class="pba col-12">
                    <p>Please be a part of our happiest moment.</p>
                </div>
                <div class="cont-berdua-footer">
                    <h5 class="siyudha-f">Yudha  Widdy</h5>
                    <span class="dan-icon-f">&</span>
                </div>
                <p>Copyright &copy; Yudha <3 Widdy 2025</p>
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script>
            window.onload = function() {
            window.scrollTo(0, 0); // Mengembalikan ke posisi paling atas saat refresh
        };
        </script>
        <script>
            

            // Update saat load dan saat resize
            window.addEventListener('resize', updateVariable);
            updateVariable(); // Jalankan saat pertama kali load
        </script>
        <!-- <script>
        const layers = document.querySelectorAll('.layer');

        function updateParallax(x, y) {
            layers.forEach(layer => {
                const speed = layer.getAttribute('data-speed');
                const xMove = (x * speed) / 20;
                const yMove = (y * speed) / 20;
                layer.style.transform = `translate(${xMove}px, ${yMove}px) scale(${1 + speed / 100})`;
            });
        }

        // Deteksi Gyroscope (Mobile)
        window.addEventListener("deviceorientation", (event) => {
            let x = event.gamma || 0;  // Kiri-kanan
            let y = event.beta || 0;   // Atas-bawah
            updateParallax(x, y);
        });

        // Fallback untuk Mouse (Desktop)
        window.addEventListener("mousemove", (event) => {
            let x = (event.clientX - window.innerWidth / 2) / 25;
            let y = (event.clientY - window.innerHeight / 2) / 25;
            updateParallax(x, y);
        });

    	</script> -->
    	<script>
        const image = document.getElementById('targetImage');
        const surat = document.getElementById('about');
        const groom_bride = document.getElementById('cont-groom-bride');
        const cont = document.getElementById('cont-scroll');
        const yudha = document.getElementById('yudha');
        const widdy = document.getElementById('widdy');
        const mengundang = document.getElementById('mengundang'); 
        const triggerHeight = window.innerHeight * 0.75;
        const scaleTrigger = window.innerHeight * 1.5;

        function scaleTreshold() {
            let screenHeight = window.innerHeight; // Ambil tinggi layar
            let minHeight = 660;
            let maxHeight = 932;
            let minValue = 1.5;
            let maxValue = 1.32;
            let variableValue;

            if (screenHeight <= minHeight) {
                variableValue = minValue;
            } else if (screenHeight >= maxHeight) {
                variableValue = maxValue;
            } else {
                // Interpolasi Linear
                variableValue = minValue + ((screenHeight - minHeight) / (maxHeight - minHeight)) * (maxValue - minValue);
            }

            return variableValue; // Mengembalikan nilai, bukan menulis ke HTML
        }

        window.addEventListener('scroll', function() {
            let scrollPosition = window.scrollY;
            let imagePosition = image.getBoundingClientRect().top;
        	let container = document.querySelector('.container-img-scroll');
        	let containerHeight = container.offsetHeight; // Tinggi container
            let tinggiLayar= window.innerHeight
            let threshold = tinggiLayar * scaleTreshold();// 12.5% dari tinggi container

            // document.getElementById('threshold-value').textContent = threshold.toFixed(2); // Tampilkan threshold awal
            // document.getElementById('containerHeight-value').textContent = containerHeight.toFixed(2); // Tampilkan threshold awal
            // document.getElementById('tinggiLayar-value').textContent = tinggiLayar.toFixed(2); // Tampilkan threshold awal
            // document.getElementById('variable-value').textContent = threshold.toFixed(2);

            // window.addEventListener('scroll', function() {
            //     let scrollPosition = window.scrollY; // Ambil posisi scroll
            //     document.getElementById('scroll-pos').textContent = scrollPosition.toFixed(2); // Update posisi scroll
            // });

            const contScroll = document.getElementById('cont-scroll');

            if (scrollPosition > 1) {
                mengundang.classList.add('scrolled');
            }else{
                mengundang.classList.remove('scrolled');
            }
            // 1. Munculkan gambar saat mulai masuk viewport
            if (imagePosition < triggerHeight) {
                image.classList.add('visible');
            } else {
                image.classList.remove('visible');
            }
            //2. Jika gambar sudah sepenuhnya terlihat, jadikan fixed
            if (scrollPosition >= threshold ) {
                image.classList.add('groom');
                surat.classList.add('hidden');
                groom_bride.classList.add('visible');
                yudha.classList.add('visible');
            } else {
                image.classList.remove('groom');
                image.classList.remove('bride');
                surat.classList.remove('hidden');
                groom_bride.classList.remove('visible');
                yudha.classList.remove('visible');
            }
            // 3. Jika terus scroll lebih jauh, gambar membesar (scale-up)
            if (scrollPosition >= threshold*1.5) {
                image.classList.add('bride');
                widdy.classList.add('visible');
                yudha.classList.remove('visible');
            } else {
                image.classList.remove('bride');
                image.classList.remove('bottom');
                widdy.classList.remove('visible');
            }
            if (scrollPosition > threshold*2) {
                image.classList.add('bottom');
                groom_bride.classList.remove('visible');
                cont.classList.remove('hilang');
            }else{
                image.classList.remove('bottom');
            }
            if (scrollPosition > threshold*2.1) {
                cont.classList.add('hilang');
            }else{
                cont.classList.remove('hilang');
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let audio = document.getElementById("myAudio");
            audio.muted = false; // Unmute setelah halaman dimuat
            audio.play().catch(error => console.log("Autoplay gagal:", error));
        });
        
        function toggleAudio() {
            let audio = document.getElementById("myAudio");
            let button = document.querySelector("button");
            
            if (audio.paused) {
                audio.play();
                document.body.style.overflow = "hidden scroll"; // Mengaktifkan scroll
            } else {
                audio.pause();
                document.body.style.overflow = "hidden scroll"; // Mengaktifkan scroll
            }

            // Scroll ke bawah 100vh
            window.scrollBy({
                top: window.innerHeight*scaleTreshold()*0.9, // Scroll ke bawah 100vh
                behavior: "smooth" // Animasi scroll yang halus
            });
        }
    </script>

    <!-- <script>
        let comments = [
            { name: "Budi", message: "Selamat! Semoga bahagia selalu!", attendance: "Hadir" },
            { name: "Ani", message: "Maaf, aku nggak bisa datang :(", attendance: "Tidak Hadir" },
            { name: "Dewi", message: "Selamat menempuh hidup baru!", attendance: "Hadir" },
            { name: "Joko", message: "InsyaAllah saya hadir!", attendance: "Hadir" },
            { name: "Siti", message: "Semoga menjadi keluarga sakinah!", attendance: "Belum Pasti" },
            { name: "Rizky", message: "Barakallah! Sukses selalu!", attendance: "Hadir" },
            { name: "Eka", message: "Maaf, nggak bisa datang :(", attendance: "Tidak Hadir" },
            { name: "Tono", message: "Semoga pernikahan kalian penuh berkah!", attendance: "Hadir" },
            { name: "Lisa", message: "Saya akan mencoba hadir!", attendance: "Belum Pasti" },
            { name: "Andi", message: "Senang banget mendengar kabar ini!", attendance: "Hadir" }
        ];

        let commentsPerPage = 3;
        let currentPage = 1;

        function displayComments() {
            let start = (currentPage - 1) * commentsPerPage;
            let end = start + commentsPerPage;
            let displayedComments = comments.slice(start, end);

            let commentSection = document.getElementById("commentSection");
            commentSection.innerHTML = "";

            displayedComments.forEach(comment => {
                let div = document.createElement("div");
                div.classList.add("comment");
                div.innerHTML = `<strong>${comment.name}</strong> (${comment.attendance})
                                 <p>${comment.message}</p>`;
                commentSection.appendChild(div);
            });

            updatePagination();
        }

        function updatePagination() {
            let totalPages = Math.ceil(comments.length / commentsPerPage);
            let paginationDiv = document.getElementById("pagination");
            paginationDiv.innerHTML = "";

            for (let i = 1; i <= totalPages; i++) {
                let pageLink = document.createElement("a");
                pageLink.innerText = i;
                pageLink.href = "#";
                pageLink.classList.add("page-link");
                if (currentPage === i) {
                    pageLink.classList.add("active");
                }

                pageLink.addEventListener("click", function (event) {
                    event.preventDefault();
                    currentPage = i;
                    displayComments();
                });

                paginationDiv.appendChild(pageLink);
            }
        }

        document.getElementById("commentForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let name = document.getElementById("name").value;
            let message = document.getElementById("message").value;
            let attendance = document.getElementById("attendance").value;

            if (name && message) {
                comments.unshift({ name, message, attendance });
                document.getElementById("commentForm").reset();
                currentPage = 1;
                displayComments();
            }
        });

        displayComments();
    </script> -->
    <script>
        function loadComments(page = 1) {
            $.ajax({
                url: "<?= base_url('Home/get_comments/'); ?>" + page,  // Pastikan hanya satu 'get_comments/'
                type: "GET",
                dataType: "json",
                success: function (data) {
                    let commentSection = document.getElementById("commentSection");
                    let paginationSection = document.getElementById("pagination");

                    if (commentSection) {
                        commentSection.innerHTML = "";
                        data.comments.forEach(comment => {
                            let div = document.createElement("div");
                            div.classList.add("comment");
                            div.innerHTML = `<strong>${comment.name}</strong> (${comment.attendance})
                                             <p>${comment.message}</p>
                                             <small>${comment.created_at}</small>`;
                            commentSection.appendChild(div);
                        });
                    }

                    if (paginationSection) {
                        paginationSection.innerHTML = data.pagination;
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error:", error); // Debugging
                    console.error("Response:", xhr.responseText); // Debugging
                    let commentSection = document.getElementById("commentSection");
                    if (commentSection) {
                        commentSection.innerHTML = "<p>Gagal memuat komentar.</p>";
                    }
                }
            });
        }


        // Event listener untuk pagination klik
        $(document).on("click", ".pagination a", function (e) {
            e.preventDefault();
            let page = $(this).attr("href").split("/").pop();
            loadComments(page);
        });

        $(document).ready(function () {
            loadComments();
            
            $("#commentForm").submit(function () {
                setTimeout(loadComments, 1000); // Refresh komentar setelah submit
            });
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
