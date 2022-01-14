<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>smkn 1 cibinong</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="hal_guru.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_guru.php"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="tambahSiswaNilai_guru.php"><i class="fas fa-table"></i><span>Data Siswa dan Nilai</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><a class="btn btn-warning" role="button" style="width: 40px;height: 40px;margin: 0px;padding: 0px;" href="dtsiswa_nilai_admin.php"><i class="fa fa-caret-left"></i></a></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"></div>
                        </form><a class="navbar-brand" href="#" style="font-weight: bold;height: 47px;width: 260.8px;">SELAMAT DATANG GURU</a>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1"></li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">guru</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar4.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="profile_admin.php"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="index.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Data Siswa</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="text-align: center;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Edit Data Siswa dan Nilai Produktif RPL</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;font-weight: bold;"><label class="col-form-label">NISN</label></div>
                                <div class="col offset-lg-0">
                                    <form><input class="form-control" type="number" style="width: 174.8px;" name="nip" placeholder="Masukkan NISN"></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;font-weight: bold;"><label class="col-form-label">Nama</label></div>
                                <div class="col offset-lg-0">
                                    <form><input class="form-control" type="text" style="width: 174px;text-align: left;height: 37px;margin: 0px;" name="nama" placeholder="Masukkan Nama"></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;font-weight: bold;"><label class="col-form-label">PWPB</label></div>
                                <div class="col offset-lg-0">
                                    <form><input class="form-control" type="number" style="width: 174.8px;" name="pwpb" placeholder="Masukkan nilai"></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;"><label class="col-form-label" style="width: 61px;font-weight: bold;">PBO</label></div>
                                <div class="col offset-lg-0">
                                    <form><input class="form-control" type="number" style="width: 174.8px;" name="pwpb" placeholder="Masukkan nilai"></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;font-weight: bold;"><label class="col-form-label">BD</label></div>
                                <div class="col offset-lg-0">
                                    <form><input class="form-control" type="number" style="width: 174.8px;" name="pwpb" placeholder="Masukkan nilai"></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;font-weight: bold;"><label class="col-form-label">PPL</label></div>
                                <div class="col offset-lg-0">
                                    <form><input class="form-control" type="number" style="width: 174.8px;" name="pwpb" placeholder="Masukkan nilai"></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 69.5px;font-weight: bold;"><label class="col-form-label">Kelas</label></div>
                                <div class="col offset-lg-0">
                                    <form style="width: 174.8px;"><select class="form-select">
                                            <optgroup label="Pilih">
                                                <option value="12" selected="">10 RPL 1</option>
                                                <option value="13">10 RPL 2</option>
                                                <option value="14">11 RPL 1</option>
                                                <option value="12">11 RPL 2</option>
                                                <option value="12">12 RPL 1</option>
                                                <option value="">12 RPL 2</option>
                                            </optgroup>
                                        </select></form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 offset-lg-3" style="width: 165.5px;font-weight: bold;"><button class="btn btn-primary" type="submit">Update</button></div>
                                <div class="col offset-lg-0">
                                    <form><button class="btn btn-danger" type="reset" style="width: 80.7px;">Reset</button></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © RPL ONE 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>