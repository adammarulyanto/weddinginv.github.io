<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" /><!-- 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Wedding of Yudha & Widdy</title>
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
        <link href="css/style2.css?v=7" rel="stylesheet"/>
        <link href='https://fonts.googleapis.com/css?family=Allison' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="<?=base_url()?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
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
        <div class="audio-button" onclick="toggleAudio2()" data-aos="zoom-in" data-aos-duration="1500">
            <img src="<?= base_url('assets/img/disc.png') ?>" id="audioIcon" alt="Play">
        </div>
         <!-- Countdown Timer -->
        <div class="countdown-container" id="countdown" onclick="toggleCountdown(event)">
            <span id="countdown-days">0</span>
            <div class="countdown-item" id="days">0<br>Hari</div>
            <div class="countdown-item" id="hours">0<br>Jam</div>
            <div class="countdown-item" id="minutes">0<br>Menit</div>
            <div class="countdown-item" id="seconds">0<br>Detik</div>
        </div>
        <header class="parallax-container">
            <div class="mengundang container px-4 px-lg-5 text-center" id="mengundang">
                <h5 class="dear">Dear :</h5>
                <h5 class="kepada"><?=$data['nama'];?></h5>
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
                        <p class="surat" data-aos="zoom-in" data-aos-duration="1500">
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
		        	<div class="putra" id="putra"><p>Putra Pertama dari Bapak Cecep Supriadi dan Ibu Iis Ratna Sari</p></div>
		        	<div class="groom" id="groom"><p>Groom</p></div>
        		</div>
	        	<div class="widdy-section" id="widdy">
		        	<div class="widdy" id="w_nama"><p>Widdy</p></div>
		        	<div class="clhaudya" id="w_nama"><p>Clhaudya R.</p></div>
		        	<div class="putri" id="putri"><p>Putri ke empat dari Bapak Rustam Abdul Karim dan Ibu Hartini Mirdayanti</p></div>
	        		<div class="bride" id="bride"><p>Bride</p></div>
	        	</div>
	        </div>
    	</div>
        <div class="spacer2">
        </div>
        <!-- Services-->
        <section class="content-section text-center agenda" id="services">
            <div class="container cont-agenda">
                <div class="agenda-heading">
                    <h3 class="agenda-title">Save</h3>
                    <h2 class="tgl-title">The Date</h2>
                </div>
                <div class="row" >
                    <div class="tgl-agenda col-12" data-aos="zoom-in" data-aos-duration="1000">
                        <h4><strong>Tanggal</strong></h4>
                        <h1>13 <span>April 2025</span></h1>
                        <a class="btn-add-calendar" target="_blank" href="https://calendar.google.com/calendar/u/0/r/eventedit?text=The%20Wedding%20of%20Yudha%20%26%20Widdy&dates=20240413T020000Z/20240413T163000Z&details=Merupakan%20suatu%20kehormatan%20dan%20kebahagiaan%20bagi%20kami%20apabila%20Bapak/Ibu/Saudara/i%20berkenan%20hadir%20untuk%20memberikan%20do’a%20restu.%20Atas%20kehadiran%20dan%20do’a%20restunya%20kami%20ucapkan%20terima%20kasih.%20Kami%20yang%20berbahagia.&location=https%3A%2F%2Fmaps.app.goo.gl%2F1ngW2q2tyRhXmPrC7">Add to Calendar</a>
                        <div class="row container-cd">
                            <div class="col-3" id="hari">
                            </div>
                            <div class="col-3" id="jam">
                            </div>
                            <div class="col-3" id="menit">
                            </div>
                            <div class="col-3" id="detik">
                            </div>
                        </div>
                        <div class="cont-dahan2">
                            <img class="dahan2" src="<?=base_url()?>assets/img/dahan2.png" data-aos="zoom-in" data-aos-duration="1000">
                        </div>
                    </div>
                    <div class="akad col-6" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?=base_url()?>assets/img/rings.png">
                        <h4><strong>Akad</strong></h4>
                        <h1>10:00</h1>
                        <h5>s/d Selesai</h5>
                    </div>
                    <div class="resepsi col-6" data-aos="zoom-in" data-aos-duration="1200">
                        <img src="<?=base_url()?>assets/img/arch.png">
                        <h4><strong>Resepsi</strong></h4>
                        <h1>13:00</h1>
                        <h5>s/d Selesai</h5>
                    </div>
                    <div class="alamat col-12" data-aos="zoom-in" data-aos-duration="1300">
                        <p> Lapangan bulu tangkis, Jalan Betawi No.155, RT.3/RW.9, Kp Gunung Kalimati, Jombang, Ciputat, Kota Tangerang Selatan, Kota Tangerang Selatan, Ciputat, Banten, 15414
</p>
<br>
                        <a class="btn-buka-sayang" href="https://maps.app.goo.gl/1ngW2q2tyRhXmPrC7">Open Maps</a>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7149644208935!2d106.71016519999999!3d-6.301133900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbacf58d83dd%3A0x8c7fa6c598eea12c!2sLapangan%20badminton%20PB%2039%20Kalimati!5e0!3m2!1sid!2sid!4v1740616689378!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- Callout-->
        <div class="container-gallery">
            <div class="cont-bunga1">
                <img class="bunga1" src="<?=base_url()?>assets/img/dahan.png">
            </div>
            <div class="gallery-heading">
                <h6 class="gallery-title">Our</h6>
                <h6 class="fkami-title">Gallery</h6>
            </div>
            <div class="row gallery">
                <div class="col-12" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="<?=base_url('assets/img/gallery/1.jpg')?>" class="img-thumbnail-yw head" onclick="openModal(this)">
                </div>
                <div class="col-6" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="<?=base_url('assets/img/gallery/3.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-6" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="<?=base_url('assets/img/gallery/4.png')?>" class="img-thumbnail-yw" onclick="openModal(this)">
                </div>
                <div class="col-12" data-aos="zoom-in" data-aos-duration="1500">
                    <img src="<?=base_url('assets/img/gallery/2.jpg')?>" class="img-thumbnail-yw head" onclick="openModal(this)">
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
        <!-- Portfolio-->
        <div class="container-komen">
            <div class="form-komentar">
                <h6 class="form-title">RSVP</h6>
                <h6 class="komentar-title">Wishes</h6>
            </div>

            <div class="cont-dahan1">
                <img class="dahan1" src="<?=base_url()?>assets/img/dahan.png" >
            </div>
            <div class="container-form" data-aos="zoom-in" data-aos-duration="1500">
                <form id="commentForm" action="<?= base_url('Home/submit_comment'); ?>" method="post">
                    <h6><?=$data['nama']?></h6>
                    <input type="hidden" id="name" name="name" placeholder="Nama" value="<?=$data['nama']?>">
                    <textarea class="mb-3" id="message" name="message" placeholder="Ucapan.." required style="outline: none;"></textarea>
                    <select class="form-control" id="attendance" name="attendance" required>
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                        <option value="Belum Pasti">Belum Pasti</option>
                    </select>
                    <input type="hidden" name="user_id" value="<?=$data['id']?>">
                    <button class="btn-kirim-ucapan" type="submit" id="submitComment"><img class="img-btn-ucapan" src="<?=base_url()?>assets/img/send.png"></button>
                </form>
            </div>
            <hr>
            <div id="commentSection">
            </div>

            <!-- Pagination -->
            <div class="pagination" id="pagination"></div>
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
        <div class="glass-bg">
            <div class="ty-heading" data-aos="zoom-in" data-aos-duration="1500">
                <h6 class="terima-title">Wedding</h6>
                <h6 class="kasih-title">Gift</h6>
            </div>

            <div class="row">
                <div class="col-12 notes-hadiah" data-aos="zoom-in" data-aos-duration="1500">
                    <p>Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran dan hadiah indah Anda.</p>
                </div>
                <div class="col-12 icon-hadiah"  data-aos="zoom-in" data-aos-duration="1500">
                    <button id="openModal" class="btn-wd-gift">Kirim Hadiah</button>
                </div>
            </div>
        </div>
                    <div id="hadiahModal" class="modal-hadiah">
                        <div class="modal-hadiah-content modal-dialog-centered">
                            <span class="close-hadiah-btn">&times;</span>
                            <div class="row detail-hadiah">
                                <h4>Cashless</h4>
                                <div class="cont-debit-card">
                                    <div class="cont-scroll-card">
                                        <div class="debit-card">
                                            <img src="https://i0.wp.com/americassbdc.org/wp-content/uploads/2021/05/Visa-logo-white.png?fit=900%2C291&ssl=1" alt="Bank Logo" class="bank-logo">
                                            <div class="bank-name"><img src="https://www.bca.co.id/-/media/Files/2023/bangga-lokal/web/images/logo-bca-white.svg" class="bank-logo2"></div>
                                            <div class="copy-container">
                                                <div class="card-number">0670121071</div>
                                                <input type="hidden" id="textToCopy" value="0670121071">
                                                <button id="copyButton" onclick="copyToClipboard(this)"><i class="fa-regular fa-copy"></i></button>
                                            </div>
                                            <div class="card-holder">YUDHA PRATAMA</div>
                                            <!-- <div class="expiry">VALID THRU 12/28</div> -->
                                        </div>
                                        <div class="debit-card">
                                            <img src="https://i0.wp.com/americassbdc.org/wp-content/uploads/2021/05/Visa-logo-white.png?fit=900%2C291&ssl=1" alt="Bank Logo" class="bank-logo">
                                            <div class="bank-name"><img src="https://www.bca.co.id/-/media/Files/2023/bangga-lokal/web/images/logo-bca-white.svg" class="bank-logo2"></div>
                                            <div class="copy-container">
                                                <div class="card-number">0670459608</div>
                                                <input type="hidden" id="textToCopy2" value="0670459608">
                                                <button id="copyButton" onclick="copyToClipboard(this)"><i class="fa-regular fa-copy"></i></button>
                                            </div>
                                            <div class="card-holder">Widdy Clhaudya R</div>
                                            <!-- <div class="expiry">VALID THRU 12/28</div> -->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-12 alamat-hadiah">
                                    <h4>Wedding Gift</h4>
                                    <p>Jalan Betawi No.108, RT.3/RW.9, Kp Gunung Kalimati, Jombang ( Dekat Pohon Beringin ), Ciputat, Kota Tangerang Selatan, Banten, 15411</p>
                                    <a target="_blank" class="btn-buka-hadiah" href="https://maps.app.goo.gl/9tDr7s4WikQMrg3H8">Buka Maps</a>
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
                            modal.style.zIndex = "100";
                        });

                        // Tutup modal saat tombol close diklik
                        closeModalBtn.addEventListener("click", () => {
                            modal.style.opacity = "0";
                            modal.style.zIndex = "-1";
                        });

                        // Tutup modal saat klik di luar modal content
                        window.addEventListener("click", (e) => {
                            if (e.target === modal) {
                                modal.style.opacity = "0";
                                modal.style.zIndex = "-1";
                            }
                        });

                    </script>
        
        <!-- Footer-->
        <div class="footer text-center">
            <div class="bg-glass-one">
                <div class="glass-bg2">
                    <div class="pba col-12">
                        <p class="pesan-footer">"Merupakan suatu kehormatan dan
                            kebahagiaan bagi kami apabila
                            Bapak/Ibu/Saudara/i berkenan hadir
                            untuk memberikan do’a restu.
                            Atas kehadiran dan do’a restunya
                            kami ucapkan terima kasih.
                            Kami yang berbahagia."</p>
                    </div>
                    <div class="cont-berdua-footer">
                        <h5 class="siyudha-f">Yudha  Widdy</h5>
                        <span class="dan-icon-f">&</span>
                    </div>
                    <p class="pesan-dibuat">Undangan Dibuat dengan cinta untuk merayakan perjalanan Sahabat kami Yudha & Widdy. <br>&copy; 2025</p>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Scroll to Top Button-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>

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
            const audioIcon = document.getElementById("audioIcon");
            const cd = document.getElementById("countdown");

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
                audioIcon.style.display="block";
                cd.style.display="flex";
            } else {
                image.classList.remove('visible');
                audioIcon.style.display="none";
                cd.style.display="none";
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
            if (scrollPosition > threshold*1.8) {
                image.classList.add('bottom');
                groom_bride.classList.remove('visible');
                cont.classList.remove('hilang');
            }else{
                image.classList.remove('bottom');
            }
            if (scrollPosition > threshold*2.2) {
                cont.classList.add('hilang');
            }else{
                cont.classList.remove('hilang');
            }
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                audioIcon.classList.add("rotating");
            } else {
                // audio.pause();
                document.body.style.overflow = "hidden scroll"; // Mengaktifkan scroll
                audioIcon.classList.add("rotating");
            }

            
            window.scrollBy({
                top: window.innerHeight*scaleTreshold()*0.9, // Scroll ke bawah 100vh
                behavior: "smooth" // Animasi scroll yang halus
            });

            
        }
        function toggleAudio2() {
            const audio = document.getElementById("myAudio");
            const audioIcon = document.getElementById("audioIcon");

            if (audio.paused) {
                audio.play();
                audioIcon.classList.add("rotating");
            } else {
                audio.pause();
                audioIcon.classList.remove("rotating");
            }
        }

        function updateCountdown() {
            const targetDate = new Date("2025-04-13T09:00:00+07:00"); // Ganti tanggal sesuai kebutuhan
            const now = new Date();
            const diff = targetDate - now;

            if (diff <= 0) {
                document.getElementById("main-countdown").innerHTML = "0 Hari 0 Jam 0 Menit 0 Detik";
                document.getElementById("countdown-days").innerHTML = "0";
                document.getElementById("days").innerHTML = "0 Hari";
                document.getElementById("hours").innerHTML = "0 Jam";
                document.getElementById("minutes").innerHTML = "0 Menit";
                document.getElementById("seconds").innerHTML = "0 Detik";
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById("hari").innerHTML = `<h1>${days}</h1><p>Hari</p>`;
            document.getElementById("jam").innerHTML = `<h1>${hours}</h1><p>Jam</p>`;
            document.getElementById("menit").innerHTML = `<h1>${minutes}</h1><p>Menit</p>`;
            document.getElementById("detik").innerHTML = `<h1>${seconds}</h1><p>Detik</p>`;
            document.getElementById("countdown-days").innerHTML = `${days}<br><h6>Hari</h6>`;
            document.getElementById("days").innerHTML = `${days} <br>Hari`;
            document.getElementById("hours").innerHTML = `${hours} <br>Jam`;
            document.getElementById("minutes").innerHTML = `${minutes} <br>Menit`;
            document.getElementById("seconds").innerHTML = `${seconds} <br>Detik`;
        }

        function toggleCountdown(event) {
            event.stopPropagation(); // Mencegah klik luar langsung menutup
            const countdown = document.getElementById("countdown");
            const countdownItems = document.querySelectorAll(".countdown-item");

            if (countdown.classList.contains("expanded")) {
                countdown.classList.remove("expanded");
                countdownItems.forEach(item => item.style.display = "none");
                document.getElementById("countdown-days").style.display = "block";
            } else {
                countdown.classList.add("expanded");
                countdownItems.forEach(item => item.style.display = "block");
                document.getElementById("countdown-days").style.display = "none";
            }
        }

        function closeCountdown(event) {
            const countdown = document.getElementById("countdown");

            if (!countdown.contains(event.target)) {
                countdown.classList.remove("expanded");
                document.querySelectorAll(".countdown-item").forEach(item => item.style.display = "none");
                document.getElementById("countdown-days").style.display = "block";
            }
        }

        setInterval(updateCountdown, 1000);
        updateCountdown(); // Jalankan saat pertama kali

        function copyToClipboard(button) {
            let copyContainer = button.closest(".copy-container"); // Ambil parent container
            let textInput = copyContainer.querySelector("input[type='hidden']"); // Cari input dalam container

            if (textInput) {
                navigator.clipboard.writeText(textInput.value).then(() => {
                    // Ubah tombol menjadi teks "Copied!"
                    let copiedMessage = document.createElement("p");
                    copiedMessage.textContent = "Copied!";
                    button.replaceWith(copiedMessage);
                }).catch(err => {
                    console.error("Gagal menyalin teks: ", err);
                });
            }
        }

    </script>
    <script>
        function sha1(str) {
            return CryptoJS.SHA1(str).toString();
        }
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
                            let hashedCommentId = comment.name;
                            const createdAt = new Date(comment.created_at);
                            const createdAtFormatted = createdAt.toLocaleDateString('id-ID', { 
                                day: '2-digit', 
                                month: 'short', 
                                year: 'numeric' 
                            }) + ` ${createdAt.getHours()}:${createdAt.getMinutes().toString().padStart(2, '0')}`;

                            // Determine the image based on attendance status
                            let attendanceImage = "";
                            if (comment.attendance === "Hadir") {
                                attendanceImage = "<img src='<?=base_url("assets/img/check.png")?>' alt='Hadir' class='attendance-icon'>";
                            } else if (comment.attendance === "Tidak Hadir") {
                                attendanceImage = "<img src='<?=base_url("assets/img/remove.png")?>' alt='Tidak Hadir' class='attendance-icon'>";
                            } else {
                                attendanceImage = "<img src='<?=base_url("assets/img/question.png")?>' alt='Lainnya' class='attendance-icon'>";
                            }

                            div.classList.add("comment");
                            // div.setAttribute("data-aos", "zoom-in");
                            // div.setAttribute("data-aos-duration", "1500");

                            // Hashing SHA1( SHA1(id) ) di JavaScript (butuh library)

                            const hashedIdFromPHP = "<?=$_GET['to']?>";

                            // Jika hash cocok dengan yang dari PHP ($_GET['id'])
                            if (hashedCommentId === hashedIdFromPHP) {
                                div.classList.add("sender");
                            }

                            div.innerHTML = `<strong>${comment.name}</strong> 
                                             <span class='hadir-bedge'>${attendanceImage}</span>
                                             <p>${comment.message}</p>
                                             <small>${createdAtFormatted}</small>`;
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

    <script>
        let tinggiLayar= window.innerHeight
        let headerHeight = document.getElementById('about').offsetHeight;
        let contentHeight = document.getElementById('cont-scroll').offsetHeight;
        let contentStart = tinggiLayar+(headerHeight*0.7);
        let contentEnd = tinggiLayar+contentStart + (contentHeight*0.7);
        let step = 300;
        let touchStartY = 0;

        function handleScroll(event, deltaY) {
            let currentScroll = window.scrollY;
            let direction = deltaY > 0 ? 1 : -1;
            
            if (currentScroll >= contentStart && currentScroll < contentEnd) {
                event.preventDefault();
                let nextScroll = Math.round((currentScroll + step * direction) / step) * step;
                window.scrollTo({ top: nextScroll, behavior: 'smooth' });
            }
        }
        
        window.addEventListener('wheel', function(event) {
            handleScroll(event, event.deltaY);
        }, { passive: false });

        window.addEventListener('touchstart', function(event) {
            touchStartY = event.touches[0].clientY;
        });

        window.addEventListener('touchmove', function(event) {
            let touchEndY = event.touches[0].clientY;
            let deltaY = touchStartY - touchEndY;
            handleScroll(event, deltaY);
        }, { passive: false });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
