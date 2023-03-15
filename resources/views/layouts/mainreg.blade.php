<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style2.css">
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
                        
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="icofont icofont-social-facebook color__icon-blue mr-1"></i>
                                <img src="img/fbig.png" width="65px">
                                <i class="icofont icofont-social-instagram color__icon-blue"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <img src="https://tripay.id/assets/images/bg/Rectangle 49.png" class="bg"> -->
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