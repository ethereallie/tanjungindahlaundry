<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanjung Indah Laundry | Penyelamat Kala Padat Sampai Mencucipun Tak Sempat</title>

    <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://kit.fontawesome.com/b229c07b4a.js" crossorigin="anonymous" rel="stylesheet">

    <script src="https://kit.fontawesome.com/b229c07b4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid container">
                <a class="navbar-brand" href="#">
                    <img src="assets/logo.png" alt="" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                    </ul>
                    <div class="d-flex">
                        <ul class="navbar-nav me-auto mb-lg-0">
                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page" href="#tentang">Tentang</a>
                            </li>

                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page" href="#layanan">Layanan</a>
                            </li>

                            <li class="nav-item">
                                <a style="color: white;" class="nav-link active" aria-current="page" href="#testimoni">Testimoni</a>
                            </li>
                        </ul>
                        <button class="ms-3 btn btn-cta"><a style="text-decoration: none; color: black;" href="#request">Coba Sekarang</a></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="hero py-5 d-flex align-items-center justify-content-center animate-on-scroll">
            <div class="container text-center">
                <h1>Laundry terbersih, termurah, dan tercepat<br>di Purwokerto</h1>
                <p>Percayakan cucianmu ke tenaga profesional dengan peralatan canggih dan garansi uang kembali</p>
                <a href="#layanan" class="btn btn-cta">Lihat layanan</a>
            </div>
        </section>

        <!-- About Section -->
        <section class="about py-5 animate-on-scroll" id="tentang">
            <div class=" container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img src="assets/about.jpg" alt="Tentang" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-4">Tentang Kami</h2>
                        <p>Sejak didirikan, kami dengan bangga melayani pelanggan dengan layanan pembersihan yang profesional dan ramah lingkungan. Didukung oleh tim berpengalaman dan teknologi canggih, kami berkomitmen untuk memberikan hasil terbaik bagi pakaian dan linen Anda. Ketepatan waktu, kebersihan, dan kepuasan pelanggan adalah prinsip inti kami, sehingga Anda dapat mempercayakan pakaian berharga Anda kepada kami dengan keyakinan penuh. Segera kunjungi Tanjung Indah Laundry dan rasakan perbedaan yang luar biasa dalam merawat pakaian Anda.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Services Section -->
        <section class="services py-5 animate-on-scroll" id="layanan">
            <div class="container text-center">
                <h2 class="mb-4">Layanan Kami</h2>
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="assets/cuci.jpg" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title">Hanya Cuci</h5>
                                <p class="card-text">3 jam: Rp 6.000/kg</p>
                                <p class="card-text">1 hari: Rp 4.000/kg</p>
                                <p class="card-text">2 hari: Rp 3.000/kg</p>
                                <p class="card-text">3 hari: Rp 2.000/kg</p>
                                <a href="#" class="btn btn-cta">Hubungi sekarang</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="assets/setrika.jpg" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title">Hanya Setrika</h5>
                                <p class="card-text">3 jam: Rp 7.000/kg</p>
                                <p class="card-text">1 hari: Rp 5.000/kg</p>
                                <p class="card-text">2 hari: Rp 4.000/kg</p>
                                <p class="card-text">3 hari: Rp 3.000/kg</p>
                                <a href="#" class="btn btn-cta">Hubungi sekarang</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <img src="assets/komplit.jpg" class="card-img-top" alt="Service 3">
                            <div class="card-body">
                                <h5 class="card-title">Paket Komplit</h5>
                                <p class="card-text">3 jam: Rp 8.000/kg</p>
                                <p class="card-text">1 hari: Rp 6.000/kg</p>
                                <p class="card-text">2 hari: Rp 5.000/kg</p>
                                <p class="card-text">3 hari: Rp 4.000/kg</p>
                                <a href="#" class="btn btn-cta">Hubungi sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Callout for Special Requests -->
                <div class="mt-4">
                    <p>*Tambahan harga berlaku jika ada permintaan khusus dari customer</p>
                </div>
            </div>
        </section>


        <!-- Testimonials Section -->
        <section class="testimonial py-5 animate-on-scroll" id="testimoni">
            <div class="container">
                <h2 class="text-center mb-4">Testimoni</h2>
                <div class="testimonial-slider">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Tanjung Indah Laundry adalah tempat terbaik untuk merawat pakaian saya. Hasil cuciannya sangat berkualitas, dan saya suka bahwa mereka menyediakan opsi layanan cepat jika saya butuh pakaian segera. Layanan yang profesional dan harga yang wajar."</p>
                                <hr>
                                <p class="customer-name">Andi Winardi</p>
                                <p class="service">Paket komplit 3 jam</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Saya sangat terkesan dengan ketepatan waktu Tanjung Indah Laundry. Pakaian saya selalu siap sesuai jadwal yang dijanjikan, baik untuk cuci saja maupun cuci setrika. Pelayanan yang sangat mengagumkan!"</p>
                                <hr>
                                <p class="customer-name">Bella Syaputri</p>
                                <p class="service">Setrika 3 hari</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Tidak perlu ragu untuk menggunakan jasa Tanjung Indah Laundry. Mereka menjaga pakaian saya dengan baik dan benar-benar memperhatikan setiap detailnya. Harga yang sebanding dengan kualitas pelayanan yang mereka berikan."</p>
                                <hr>
                                <p class="customer-name">Coraline Smith</p>
                                <p class="service">Cuci 2 hari</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="testimonial-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Selama ini, saya belum pernah kecewa dengan Tanjung Indah Laundry. Mereka mengerti cara merawat pakaian dengan berbagai jenis bahan dan warna. Selain itu, stafnya sangat ramah dan membantu. 5 bintang!"</p>
                                <hr>
                                <p class="customer-name">Dea Adeline</p>
                                <p class="service">Setrika 2 hari</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 5 -->
                    <div class="testimonial-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Saya sangat puas dengan pelayanan Tanjung Indah Laundry. Cucian saya selalu bersih, rapi, dan harum setiap kali diambil. Mereka juga sangat ramah dan responsif terhadap permintaan khusus saya. Sangat merekomendasikan!"</p>
                                <hr>
                                <p class="customer-name">Dianita S.</p>
                                <p class="service">Paket komplit 1 hari</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 6 -->
                    <div class="testimonial-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">"Sudah bertahun-tahun saya menjadi pelanggan setia Tanjung Indah Laundry, dan saya belum pernah mempertimbangkan untuk beralih ke tempat lain. Pakaian saya selalu tampil prima setelah dicuci dan disetrika di sini. Terima kasih atas layanan yang luar biasa!"</p>
                                <hr>
                                <p class="customer-name">Fathurrahman</p>
                                <p class="service">Setrika 3 jam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Pickup Request Form Section -->
        <section class="pickup-request py-5 animate-on-scroll" id="request">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="text-center mb-4">Gunakan Layanan Kami</h2>
                        <form id="requestForm" action="process_form.php" method="POST">
                            <div class="mb-3">
                                <label for="nama_customer" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama_customer" name="nama_customer" required>
                            </div>
                            <div class="mb-3">
                                <label for="layanan" class="form-label">Layanan yang dibutuhkan</label>
                                <select class="form-select" id="layanan" name="layanan" required>
                                    <option value="cuci-3-jam">Cuci 3 jam</option>
                                    <option value="cuci-1-hari">Cuci 1 hari</option>
                                    <option value="cuci-2-hari">Cuci 2 hari</option>
                                    <option value="cuci-3-hari">Cuci 3 hari</option>
                                    <option value="setrika-3-jam">Setrika 3 jam</option>
                                    <option value="setrika-1-hari">Setrika 1 hari</option>
                                    <option value="setrika-2-hari">Setrika 2 hari</option>
                                    <option value="setrika-3-hari">Setrika 3 hari</option>
                                    <option value="komplit-3-jam">Paket Komplit 3 jam</option>
                                    <option value="komplit-1-hari">Paket Komplit 1 hari</option>
                                    <option value="komplit-2-hari">Paket Komplit 2 hari</option>
                                    <option value="komplit-3-hari">Paket Komplit 3 hari</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-cta">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-6" id="map">
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    </div>
                    <div class="modal-body">
                        Form submitted successfully!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cta" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="footer py-4">
        <div class="container text-center">
            <!-- Logo -->
            <img src="assets/logo.png" alt="Logo" class="logo mb-3">

            <!-- Copyright Text -->
            <p>&copy; 2023 Tanjung Indah Laundry. Hak cipta dilindungi.</p>
        </div>
    </footer>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic2hubmNoaW50eWEiLCJhIjoiY2xra2ZpMXY0MHkxaTNrcDR1Y2J6NnFrZSJ9.JmdqRTNIkZHJhWClLmMDIg';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            center: [-74.5, 40], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });
    </script>

    <script>
        // Function to check if an element is in the viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Function to add animation class to elements when they are in the viewport
        function handleScrollAnimations() {
            const sections = document.querySelectorAll('.animate-on-scroll');

            sections.forEach((section) => {
                if (isInViewport(section)) {
                    // Add the "animate__animated" class to the element
                    section.classList.add('animate__animated');

                    // Add the corresponding animation class based on the section's class
                    if (section.classList.contains('hero')) {
                        section.classList.add('animate__zoomIn');
                    } else if (section.classList.contains('about')) {
                        section.classList.add('animate__fadeInLeft');
                    } else if (section.classList.contains('services')) {
                        section.classList.add('animate__fadeInRight');
                    } else if (section.classList.contains('testimonial')) {
                        section.classList.add('animate__fadeInUp');
                    } else if (section.classList.contains('pickup-request')) {
                        section.classList.add('animate__slideInLeft');
                    }
                }
            });
        }

        // Event listener for scroll to trigger animations
        document.addEventListener('scroll', handleScrollAnimations);

        // Trigger animations on page load
        handleScrollAnimations();
    </script>

    <script>
        $(document).ready(function() {
            function showSuccessModal() {
                $('#successModal').modal('show');
            }

            $('form').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'process_form.php',
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Show the success modal
                            showSuccessModal();
                        } else {
                            // Handle error case if needed
                        }
                    },
                    error: function() {
                        // Handle error case if needed
                    }
                });
            });

            // Event binding for the close button
            $('#successModal .btn-close, #successModal .btn-cta').click(function() {
                $('#successModal').modal('hide');
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Event binding for the close button
            $('#successModal').on('hidden.bs.modal', function() {
                // Reset the form after the modal is closed
                $('#requestForm').trigger('reset');
            });
        });
    </script>

    <!-- Back to Top Button -->
    <button id="backToTopBtn" class="btn btn-primary btn-floating"><i class="fas fa-arrow-up"></i></button>

    <script>
        $(document).ready(function() {
            // Show or hide the "Back to Top" button based on the scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('#backToTopBtn').fadeIn();
                } else {
                    $('#backToTopBtn').fadeOut();
                }
            });

            // Scroll to the top when the button is clicked
            $('#backToTopBtn').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
                return false;
            });
        });
    </script>
</body>

</html>