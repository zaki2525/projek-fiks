<?php include 'config/koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>utama</title>
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

<body style="height: 650px;">
    <header></header>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button">
        <div class="container">
            <!-- <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                </ol>
            </div> -->
            <figure class="figure"></figure>
            <picture><img src="assets/img/1641989180041[1].png" style="width: 80px;"></picture><a class="navbar-brand" href="#">SMKN 1 CIBINONG</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Website Sekolah&nbsp;</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">E-Learning Sekolah</a></li>
                </ul>
                <form action="proses-login.php" class="d-flex" method="POST">
                    <i class="fa fa-user me-2 mt-2"></i>
                    <input class="form-control-sm me-4" type="text" style="width: 100px;height: 20px;" name="username" placeholder="username">
                    <i class="fa fa-lock me-2 mt-2"></i>  
                    <input class="form-control-sm" type="password" style="width: 110px;height: 20px;" name="password" placeholder="password">
                    <span class="navbar-text actions"> </span>
                    <input class="btn btn-primary btn-sm d-block ms-3" type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </nav>
    <section class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Website Input Nilai Produktif</h2>
                <p class="text-center">Kenapa harus menggunkan Website ini ??</p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Bisa di Pakai Kapanpun</h3>
                    <p class="description">bisa di pakai kapanpun di mana pun</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Hemat Waktu</h3>
                    <p class="description">sangat hemat waktu karena mudah di gunakan</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">costumisasi yang mudah</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Ramah</h3>
                    <p class="description">ramah lingkungan</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Cepat</h3>
                    <p class="description">sangat cepat dan mudah</p>
                </div>
            </div>
        </div>
        <footer class="footer-basic">
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">RPL ONE © 2022</p>
        </footer>
    </section>
    <section class="article-clean"></section>
    <section class="features-boxed"></section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>