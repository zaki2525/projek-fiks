<?php include '../config/koneksi.php'; session_start();
if(!isset($_SESSION['stat_login']) and !isset($_SESSION['username']) and !isset($_SESSION['password'])){
	#die("anda belum login silahkan login terlebih dahulu silahkan klik <a href='../index.php'>DI SINI</a> untuk login");
}

if($_SESSION['role'] != "guru"){
    echo "<script>alert('Anda bukan Guru!!!');</script>";
    header('location:../index.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="../https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
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
                    <li class="nav-item"><a class="nav-link" href="hal_guru.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_guru.php"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="dtsiswa_nilai_guru.php"><i
                                class="fas fa-table"></i><span>Data Siswa dan Nilai</span></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><a class="btn btn-warning" role="button"
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
                            style="font-weight: bold;height: 47px;width: 260.8px;">SELAMAT DATANG GURU</a>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">guru</span><img
                                            class="border rounded-circle img-profile"
                                            src="../assets/img/avatars/avatar4.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                            class="dropdown-item" href="profile_guru.php"><i
                                                class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a
                                            class="dropdown-item" href="profile_guru.php"><i
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
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Data Siswa&nbsp;</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"><a class="btn btn-primary" type="submit"
                                    style="height: 36px;width: 140px;" data-bs-toggle="modal"
                                    data-bs-target="#addSiswa">Tambah
                                    Data</a>&nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; Informasi Data Siswa RPL</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label class="form-label">Show&nbsp;<select
                                                class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><input
                                            type="search" class="form-control form-control-sm" aria-controls="dataTable"
                                            placeholder="Search"><label class="form-label"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>

                                            <th style="text-align: center;">No</th>
                                            <th style="text-align: center;">NISN</th>
                                            <th style="text-align: center;">Nama</th>
                                            <th style="text-align: center;">PWPB</th>
                                            <th style="text-align: center;">PBO</th>
                                            <th style="text-align: center;">BD</th>
                                            <th style="text-align: center;">PPL</th>
                                            <th style="text-align: center;">Kelas</th>
                                            <th style="text-align: center;">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../config/koneksi.php";
                                        $no=1;
                                        $show = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
                                        while($data = mysqli_fetch_array($show)){
                                        ?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo $no++;?></td>
                                            <!-- <td style="text-align: center;"><img class="rounded-circle me-2" width="30"
                                                    height="30" src="../assets/img/avatars/avatar2.jpeg">Yuli Dianah
                                                S.t&nbsp;</td> -->
                                            <td style="text-align: center;"><?php echo $data['nisn'] ?>&nbsp;</td>
                                            <td style="text-align: center;"><i
                                                    class="fa fa-user fs-5 mt-1 me-2"><?php echo $data['nama'] ?></td>
                                            <td style="text-align: center;"><?php echo $data['pwpb'] ?></td>
                                            <td style="text-align: center;"><?php echo $data['pbo'] ?></td>
                                            <td style="text-align: center;"><?php echo $data['bd'] ?></td>
                                            <td style="text-align: center;"><?php echo $data['ppl'] ?></td>
                                            <td style="text-align: center;"><?php echo $data['kelas'] ?></td>
                                            <td style="text-align: center;">
                                                <a href="editSiswaNilai_guru.php?id='<?php echo $data['id']?>'"
                                                    class="btn btn-warning" type="button"
                                                    style="width: 25px;height: 25px;margin: 0px;padding: 0px;"><i
                                                        class="fas fa-edit"></i>
                                                </a><a
                                                    href="../config/hapusSiswaNilai_guru.php?id='<?php echo $data['id']?>'"
                                                    class="btn btn-danger" type="button"
                                                    style="width: 25px;height: 25px;margin: 0px;padding: 0px;"><i
                                                        class="far fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav
                                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                        aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
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
            <!-- Tambah Data -->
            <div class="modal fade" id="addSiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addSiswa">Tambah Data Siswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../config/simpanNilai.php" method="POST">
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">NISN</span>
                                    <input type="text" name="nisn" required class="form-control" placeholder="NISN"
                                        aria-label="NIP" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Nama</span>
                                    <input type="text" name="nama" required class="form-control" placeholder="Nama"
                                        aria-label="Nama" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">PWPB</span>
                                    <input type="number" name="pwpb" required class="form-control" placeholder="PWPB"
                                        aria-label="Domisili" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">PBO</span>
                                    <input type="number" name="pbo" required class="form-control" placeholder="PBO"
                                        aria-label="Domisili" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">BD</span>
                                    <input type="number" name="bd" required class="form-control" placeholder="BD"
                                        aria-label="Domisili" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">PPL</span>
                                    <input type="number" name="ppl" required class="form-control" placeholder="PPL"
                                        aria-label="Domisili" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group mb-3">
                                    <select name="kelas" required class="form-select"
                                        aria-label="Default select example">
                                        <option selected disabled selected>Kelas</option>
                                        <option value="11 RPL 1">10 RPL 1</option>
                                        <option value="11 RPL 1">10 RPL 2</option>
                                        <option value="11 RPL 1">11 RPL 1</option>
                                        <option value="11 RPL 2">11 RPL 2</option>
                                        <option value="12 RPL 1">12 RPL 1</option>
                                        <option value="12 RPL 2">12 RPL 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                        class="fa fa-close"></i></button>
                                <input type="submit" name="submit" class="btn btn-success text-white f-bold"
                                    value="simpan">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>