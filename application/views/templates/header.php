<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?= base_url("asset/animate.css/animate.min.css") ?>" type="text/css">
    <link href="<?= base_url("asset/bootstrap5-2/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/omahbata/style.css?version=v2.0.3") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/fontawesome.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/slick/slick.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/slick/slick-theme.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/aos/aos.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/lora.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/montserrat.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/poppins.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontgoogle/roboto.css") ?>" rel="stylesheet" type="text/css">

    <script src="<?= base_url("asset/bootstrap5-2/js/jquery-3.6.0.min.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/popper.js") ?>"></script>
    <script src="<?= base_url("asset/bootstrap5-2/js/bootstrap.min.js") ?>"></script>
    <script src="<?= base_url("asset/slick/slick.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/gsap/gsap.min.js") ?>" type="text/javascript"></script>
    <script src="<?= base_url("asset/gsap/TextPlugin.min.js") ?>" type="text/javascript"></script>

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
    <style>
        small {
            /* font-family: 'Montserrat', sans-serif; */
            font-family: 'Poppins', sans-serif;
        }
    </style>
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
            <div class="offcanvas offcanvas-end" style="background-color: #bd7658d9;" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="color: #ffffffa3;">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" style="background-color: #ffffffa3;" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffffa3; margin-bottom: 1rem; border-bottom: 1px solid #ffffffa3;" href="<?= base_url() ?>">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffffa3; margin-bottom: 1rem; border-bottom: 1px solid #ffffffa3;" href="<?= base_url() ?>product">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffffa3; margin-bottom: 1rem; border-bottom: 1px solid #ffffffa3;" href="<?= base_url() ?>project">PROJECT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffffa3; margin-bottom: 1rem; border-bottom: 1px solid #ffffffa3;" href="<?= base_url() ?>contact">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ffffffa3; margin-bottom: 1rem; border-bottom: 1px solid #ffffffa3;" href="<?= base_url() ?>account">MY ACCOUNT</a>
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
                <!-- <div class="navbar gap-4">
                    <i class="fas fa-user icon"></i>
                    <i class="fas fa-heart icon"></i>
                    <i class="fas fa-shopping-cart icon"></i>
                </div> -->
            </div>
        </div>
    </nav>
    <div class="mt-0 pt-0">