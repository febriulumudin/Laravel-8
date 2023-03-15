<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>UIT | {{ $tittle }}</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg header-navigation fixedtopscroll scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="img/logo.jpg" alt="" width="auto" height="30"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item dropdown custom__dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Harga Produk</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> -->
                                <a class="dropdown-item" href="#">PULSA ALL OPERATOR</a>
                                <a class="dropdown-item" href="#">PAKET DATA</a>
                                <a class="dropdown-item" href="#">VOUCHER GOOGLE PLAY</a>
                                <a class="dropdown-item" href="#">PULSA SMS TELEPHONE</a>
                                <a class="dropdown-item" href="#">PULSA TRANSFER</a>
                                <a class="dropdown-item" href="#">VOUCHER GAME</a>
                                <a class="dropdown-item" href="#">PUBG MOBILE UC</a>
                                <a class="dropdown-item" href="#">VOUCHER WIFI.ID</a>
                                <a class="dropdown-item" href="#">TOKEN LISTRIK</a>
                                <a class="dropdown-item" href="#">E-TOLL</a>
                                <a class="dropdown-item" href="#">FREE FIRE DIAMOND</a>
                                <a class="dropdown-item" href="#">MALAYSIA TOPUP</a>
                                <a class="dropdown-item" href="#">SINGAPORE TOPUP</a>
                                <a class="dropdown-item" href="#">E-MONEY</a>
                                <a class="dropdown-item" href="#">MOBILE LEGEND</a>
                                <a class="dropdown-item" href="#">VOUCHER</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN PLN</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN BPJS</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN ASURANSI</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN TV</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN PDAM</a>
                                <a class="dropdown-item" href="#">TELEPHONE PASCABAYAR</a>
                                <a class="dropdown-item" href="#">ZAKAT</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN MULTIFINANCE</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN PBB</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN GAS NEGARA</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN INTERNET</a>
                                <a class="dropdown-item" href="#">PEMBAYARAN TELEPHONE KABEL</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">API Pulsa H2H</a>
                        </li>
                        <!-- 
                            Contoh Active
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ ($tittle === 'Home') ? 'active' : '' }}" href="#">Harga Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($tittle === 'About') ? 'active' : '' }}" href="/about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($tittle === 'Post') ? 'active' : '' }}" href="#">API Pulsa H2H</a>
                            </li>
                        -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item p-2"> -->
                        <li class="nav-item p-lg-2 log-in" >
                            <a class="nav-link" href="#">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/reg">
                                <button class="btn btn-primary btn-register" type="submit">Daftar</button>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <img src="https://tripay.id/assets/images/bg/Rectangle 49.png" class="bg">
        <div class="main">
            @yield('container')
        </div>
        <footer>
            <nav class="navbar navbar-expand-lg navbar__footer mt-4 navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">© 2018 - 2020 PT TRIJAYA DIGITAL GRUP</a>
                <ul class="navbar-nav mx-lg-auto custom__position-footer">
                    <li class="nav-item">
                        <a class="nav-link" href="https://tripay.id/contact">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tripay.id/terms-of-service">Term of Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://tripay.id/privacy-policy">Kebijakan Privasi</a>
                    </li>   
                </ul>
                <ul class="navbar-nav ml-lg-auto custom__position-footerTwo">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://tripay.id/assets/images/icon/facebook.png" class="footer__img">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="https://tripay.id/assets/images/icon/instagram.png" class="footer__img">
                        </a>
                    </li>
                </ul>
            </div>
            </nav>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="js/main_all.js"></script>
    </body>
</html>