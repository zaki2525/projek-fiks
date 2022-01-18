<?php include '../config/koneksi.php'; session_start();
if(!isset($_SESSION['stat_login']) and !isset($_SESSION['username']) and !isset($_SESSION['password'])){
	#die("anda belum login silahkan login terlebih dahulu silahkan klik <a href='../index.php'>DI SINI</a> untuk login");
}

if($_SESSION['role'] != "admin"){
    echo "<script>alert('Anda bukan Admin!!!');</script>";
    header('location:../index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Article-List.css">
    <link rel="stylesheet" href="../assets/css/Features-Clean.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>smkn 1 cibinong</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="hal_admin.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_admin.php"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="dtguru_admin.php"><i
                                class="fas fa-table"></i><span>Data Guru</span></a><a class="nav-link"
                            href="dtsiswa_nilai_admin.php"><i class="fas fa-table"></i><span>Data Siswa dan
                                Nilai</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><a class="btn btn-warning" type="button"
                        style="width: 40px;height: 40px;margin: 0px;padding: 0px;" href="javascript:history.back()"><i
                            class="fa fa-caret-left"></i></a></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form><a class="navbar-brand" href="#"
                            style="font-weight: bold;height: 47px;width: 260.8px;">SELAMAT DATANG ADMIN</a>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                                    aria-expanded="false" data-bs-toggle="dropdown" href="#"><i
                                        class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end"
                                    aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown"
                                        href="#">
                                        <i class="fa fa-user fs-3 me-2"></i>
                                        <span class="d-none d-lg-inline me-2 text-gray-600 small"></span>
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile_admin.php"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a
                                            class="dropdown-item" href="#"><i
                                                class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity
                                            log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item"
                                            href="../config/logout.php"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <h1>Dashboard Admin</h1>
                <section class="article-list">
                    <div class="container">
                        <div class="intro">
                            <h2 class="text-center">Artikel Terbaru</h2>

                        </div>
                        <div class="row articles">
                            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid"
                                        src="..\assets\img\rancangan-ibu-kota-baru-2_169.png"></a>
                                <h3 class="name">Jejak Desain Ibu Kota Baru: 8 Kali Revisi, Kompleks Istana 100 Hektare
                                </h3>
                                <p class="description">Desain Istana Negara di ibu kota baru dibuat oleh seniman patung
                                    asal Bali, I Nyoman Nuarta. Dalam pradesain buatan Nyoman, tampak Istana Negara
                                    lengkap dengan sejumlah taman, kolam, hingga area transportasi, dan dikelilingi
                                    dengan patung burung garuda raksasa.</p><a class="action" href="#"><i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid"
                                        src="../assets/img/pemrov-dki-hentikan-uji-coba-sekolah-tatap-muka_169.jpeg"></a>
                                <h3 class="name">Daftar 39 Sekolah Jakarta Ditutup Sementara Akibat Kasus Covid</h3>
                                <p class="description">Pemerintah Provinsi DKI Jakarta menutup sementara 39 sekolah yang
                                    menggelar pembelajaran tatap muka (PTM) 100 persen. Penutupan itu dilakukan usai
                                    temuan kasus virus corona (Covid-19) di sekolah.</p><a class="action" href="#"><i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid"
                                        src="../assets/img/desain-terbaru-istana-kepresidenan-ibu-kota-negara_169.jpeg"></a>
                                <h3 class="name">Nusantara Jadi Nama Ibu Kota Negara Pilihan Jokowi, Gugurkan 80 Nama
                                </h3>
                                <p class="description">Menteri Perencanaan Pembangunan Nasional (PPN)/ Kepala Badan
                                    Perencanaan Pembangunan Nasional (Bappenas), Suharso Monoarfa, mengungkapkan
                                    Presiden Joko Widodo (Jokowi) memilih Nusantara untuk menjadi ibu kota negara (IKN)
                                    baru yang berlokasi di Kabupaten Penajam Paser Utara, Kalimantan Timur (Kaltim).
                                </p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © RPL ONE 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>