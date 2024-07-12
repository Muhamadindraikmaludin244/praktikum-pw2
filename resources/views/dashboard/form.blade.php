<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>InfoSehat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+62 83806756478</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>InfoSehat@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm mb-5">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>InfoSehat</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link ">Beranda</a>
                        <a href="rumahsakit" class="nav-item nav-link">Rumah Sakit</a>
                        <a href="puskesmas" class="nav-item nav-link">Puskesmas</a>
                        <a href="apotik" class="nav-item nav-link">Apotik</a>
                        <a href="form" class="nav-item nav-link active">Form</a>
                        <a href="login" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-15">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Pendaftaran Faskes</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Nama faskes" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Nama Pengelola Faskes" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Alamat Faskes" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="website Faskes" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Jenis Faskes</option>
                                        <option value="1">Rumah Sakit</option>
                                        <option value="2">Puskesmas</option>
                                        <option value="3">Apotik</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Kategori Faskes</option>
                                        <option value="1">Tingkat 1</option>
                                        <option value="2">Tingkat 2</option>
                                        <option value="3">Tingkat 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-white border-0" style="height: 55px;">
                                        <option selected>Kabupaten/Kota</option>
                                        <option value="1">Bandung</option>
                                        <option value="2">Jakarta</option>
                                        <option value="3">Depok</option>
                                        <option value="4">Bogor</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Daftar Faskes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">Alamat</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>InfoSehat@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+6283806756478</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/"><i class="fa fa-angle-right me-2"></i>Beranda</a>
                        <a class="text-light mb-2" href="rumahsakit"><i class="fa fa-angle-right me-2"></i>Rumah Sakit</a>
                        <a class="text-light mb-2" href="puskesmas"><i class="fa fa-angle-right me-2"></i>Puskesmas</a>
                        <a class="text-light mb-2" href="apotik"><i class="fa fa-angle-right me-2"></i>Apotik</a>
                        <a class="text-light mb-2" href="form"><i class="fa fa-angle-right me-2"></i>Form</a>
                        <a class="text-light" href="login"><i class="fa fa-angle-right me-2"></i>Login</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="/"><i class="fa fa-angle-right me-2"></i>Beranda</a>
                        <a class="text-light mb-2" href="rumahsakit"><i class="fa fa-angle-right me-2"></i>Rumah Sakit</a>
                        <a class="text-light mb-2" href="puskesmas"><i class="fa fa-angle-right me-2"></i>Puskesmas</a>
                        <a class="text-light mb-2" href="apotik"><i class="fa fa-angle-right me-2"></i>Apotik</a>
                        <a class="text-light mb-2" href="form"><i class="fa fa-angle-right me-2"></i>Form</a>
                        <a class="text-light" href="login"><i class="fa fa-angle-right me-2"></i>Login</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">InfoSehat</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">Kelompok 7</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    @push('scripts')
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @endpush

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
