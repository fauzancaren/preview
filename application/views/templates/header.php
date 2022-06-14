<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?= base_url("asset/bootstrap5-2/css/bootstrap.min.css") ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url("asset/omahbata/style.css?version=v2.0.2") ?>" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/fontawesome.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/slick/slick.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/slick/slick-theme.css") ?>" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/bootstrap.min.js") ?>"></script>
    <script type="text/javascript" src="<?= base_url("asset/slick/slick.min.js") ?>"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/TextPlugin.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            el_autohide = document.querySelector('.autohide');
            navbar_height = document.querySelector('.navbar').offsetHeight;
            //  document.body.style.paddingTop = navbar_height + 'px';

            if (el_autohide) {
                var last_scroll_top = 0;
                window.addEventListener('scroll', function() {
                    let scroll_top = window.scrollY;
                    if (scroll_top < last_scroll_top) {
                        el_autohide.classList.remove('scrolled-down');
                        el_autohide.classList.add('scrolled-up');
                    } else {
                        el_autohide.classList.remove('scrolled-up');
                        el_autohide.classList.add('scrolled-down');
                    }
                    scroll_top > 0 ? el_autohide.classList.add('shadow-sm') : el_autohide.classList.remove('shadow-sm')
                    last_scroll_top = scroll_top;
                });
                window.addEventListener
            }
        });
    </script>
</head>



<body style="background-color: #e0e0e0;">
    <nav class="navbar ipnav" style="background-color: #fefdf9;">
        <div class="container-fluid">
            <div class="navbar align-content-center" style="width: 175px;height:60px; ">
                <img src="<?= base_url() ?>/asset/image/obilogo.png" class="img-fluid" alt="omahbata">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url() ?>product">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url() ?>project">PROJECT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url() ?>contact">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  " href="<?= base_url() ?>account">MY ACCOUNT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <nav class="autohide navbar navbar-expand-lg p-4 scrolled-up pcnav" style="background-color: #fefdf9;">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-around flex-wrap customNav" id="navbarNavAltMarkup">
                <div class="navbar align-content-center" style="width: 175px;height:60px; ">
                    <img src="<?= base_url() ?>/asset/image/obilogo.png" class="img-fluid" alt="omahbata">
                </div>
                <div class="navbar-nav fw-bold gap-3">
                    <a class="nav-link <?= ($_page == "HOME" ? "active" : "") ?>" href="<?= base_url() ?>">HOME</a>
                    <a class="nav-link <?= ($_page == "PRODUCTS" ? "active" : "") ?>" href="<?= base_url() ?>product">PRODUCTS</a>
                    <a class="nav-link <?= ($_page == "PROJECT" ? "active" : "") ?>" href="<?= base_url() ?>project">PROJECT</a>
                    <a class="nav-link <?= ($_page == "CONTACT" ? "active" : "") ?>" href="<?= base_url() ?>contact">CONTACT</a>
                </div>
                <div class="navbar gap-4">
                    <i class="fas fa-user icon"></i>
                    <i class="fas fa-heart icon"></i>
                    <i class="fas fa-shopping-cart icon"></i>
                </div>
            </div>
        </div>
    </nav>
    <div class="mt-0 pt-0 mt-lg-5 pt-lg-5">