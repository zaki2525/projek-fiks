<?php include '../config/koneksi.php'; session_start();
if(!isset($_SESSION['stat_login']) and !isset($_SESSION['username']) and !isset($_SESSION['password'])){
	#die("anda belum login silahkan login terlebih dahulu silahkan klik <a href='../index.php'>DI SINI</a> untuk login");
}

if($_SESSION['role'] != "guru"){
    echo "<script>alert('Anda bukan Guru!!!');</script>";
    header('location:../index.php');
}

?>

<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_siswa WHERE id = $id");
$data = $query->fetch_assoc();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Data Siswa</title>
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
                    <li class="nav-item"><a class="nav-link" href="hal_guru.php"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile_guru.php"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item">
                        <a class="nav-link active" href="dtsiswa_nilai_guru.php"><i class="fas fa-table"></i><span>Data
                                Siswa dan
                                Nilai</span></a>
                    </li>
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
                    <h3 class="text-dark mb-4">Data Siswa <?= $data['nama']; ?></h3>
                    <div class="card shadow" id="report">
                        <div class="card-header py-3">
                            <h4 class="text-dark font-monospace m-0 fw-bold mb-2">Nama : <?= $data['nama']; ?></h4>
                            <h4 class="text-dark font-monospace m-0 fw-bold mt-2">Kelas : <?= $data['kelas']; ?></h4>
                            <h4 class="text-dark font-monospace m-0 fw-bold mt-2">NISN : <?= $data['nisn']; ?></h4>
                        </div>
                        <div class="card-body text-center">
                            <table class="table table-striped table-hover">
                                <thead class="fw-bold">
                                    <tr class="text-bold">
                                        <th scope="col">Mapel</th>
                                        <th scope="col">Nilai</th>
                                        <th scope="col">Predikat</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-bold">
                                    <tr>
                                        <td>PWPB</td>
                                        <td><?= $data['pwpb']; ?></td>
                                        <td><?php 
                                                if( $data['pwpb'] >= 90 ) {
                                                    echo "A";
                                                }

                                                else if( $data['pwpb'] >= 85 ) {
                                                    echo "A-";
                                                }

                                                else if( $data['pwpb'] >= 80 ) {
                                                    echo "B+";
                                                }

                                                else if( $data['pwpb'] >= 75 ) {
                                                    echo "B";
                                                } 

                                                else {
                                                    echo "C";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PBO</td>
                                        <td><?= $data['pbo']; ?></td>
                                        <td><?php 
                                                if( $data['pbo'] >= 90 ) {
                                                    echo "A";
                                                }

                                                else if( $data['pbo'] >= 85 ) {
                                                    echo "A-";
                                                }

                                                else if( $data['pbo'] >= 80 ) {
                                                    echo "B+";
                                                }

                                                else if( $data['pbo'] >= 75 ) {
                                                    echo "B";
                                                } 

                                                else {
                                                    echo "C";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>PPL</td>
                                        <td><?= $data['ppl']; ?></td>
                                        <td><?php 
                                                if( $data['ppl'] >= 90 ) {
                                                    echo "A";
                                                }

                                                else if( $data['ppl'] >= 85 ) {
                                                    echo "A-";
                                                }

                                                else if( $data['ppl'] >= 80 ) {
                                                    echo "B+";
                                                }

                                                else if( $data['ppl'] >= 75 ) {
                                                    echo "B";
                                                } 

                                                else {
                                                    echo "C";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BD</td>
                                        <td><?= $data['bd']; ?></td>
                                        <td><?php 
                                                if( $data['bd'] >= 90 ) {
                                                    echo "A";
                                                }

                                                else if( $data['bd'] >= 85 ) {
                                                    echo "A-";
                                                }

                                                else if( $data['bd'] >= 80 ) {
                                                    echo "B+";
                                                }

                                                else if( $data['bd'] >= 75 ) {
                                                    echo "B";
                                                } 

                                                else {
                                                    echo "C";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div style="width: 800px;margin: 0px auto;">
                                <canvas id="myChart"></canvas>
                            </div>

                            <a href="javascript:demoFromHTML()" class="btn btn-danger mt-4 mb-4 btn-sm p-2">Ekspor PDF
                                <i class="ms-1 fas fa-file pdf fs-6"></i>
                            </a>
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
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/chartjs/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <!-- GRAFIK NILAI -->
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["PWPB", "PBO", "BD", "PPL"],
            datasets: [{
                label: 'Nilai Produktif Siswa',
                data: [
                    <?php 
                        echo $data['pwpb'];
					?>,
                    <?php 
                        echo $data['pbo'];
					?>,
                    <?php 
                        echo $data['bd'];
					?>,
                    <?php 
                        echo $data['ppl'];
					?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>

    <!-- PRINT PDF -->
    <script>
    function demoFromHTML() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#report')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function(element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };

        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
            source, // HTML string or DOM elem ref.
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, // max width of content on PDF
                'elementHandlers': specialElementHandlers
            },

            function(dispose) {
                // dispose: object with X, Y of the last line add to the PDF 
                //          this allow the insertion of new lines after html
                pdf.save('Test.pdf');
            }, margins
        );
    }
    </script>
</body>

</html>