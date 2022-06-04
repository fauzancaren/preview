<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link href="<?= base_url("asset/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/asset/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="<?= base_url("asset/fontawesome5/fontawesome.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/fontawesome5/all.min.css") ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url("asset/css/style.css?version=1.3") ?>" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            el_autohide = document.querySelector('.autohide');

            // add padding-top to bady (if necessary)
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';

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
                    last_scroll_top = scroll_top;
                });
                window.addEventListener
            }
            // if

        });
    </script>
</head>



<body style="background-color: #e0e0e0;">
        <nav class="navbar ipnav" style="background-color: #fefdf9;">
            <div class="container-fluid">
                <img src="<?= base_url() ?>/asset/image/obilogo.jpg" width="100px" height="30px" alt="omahbata">
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
                                <a class="nav-link" href="<?= base_url() ?>PageContent/index">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>PageContent/products">PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>PageContent/project">PROJECT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>PageContent/contact">CONTACT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>PageContent/myAccount">MY ACCOUNT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>



        <nav class="autohide navbar navbar-expand-lg p-4 shadow shadow-sm scrolled-up pcnav" style="background-color: #fefdf9;">
            <div class="container">
                <div class="collapse navbar-collapse d-flex justify-content-around flex-wrap customNav" id="navbarNavAltMarkup">
                    <div class="navbar">
                        <img src="<?= base_url() ?>/asset/image/obilogo.jpg" width="100px" height="30px" alt="omahbata">
                    </div>
                    <div class="navbar-nav">
                        <a class="nav-link" href="<?= base_url() ?>PageContent/index">HOME</a>
                        <a class="nav-link" href="<?= base_url() ?>PageContent/products">PRODUCTS</a>
                        <a class="nav-link" href="<?= base_url() ?>PageContent/project">PROJECT</a>
                        <a class="nav-link" href="<?= base_url() ?>PageContent/contact">CONTACT</a>
                    </div>
                    <div class="navbar gap-4">
                        <i class="fas fa-user icon"></i>
                        <i class="fas fa-heart icon"></i>
                        <i class="fas fa-shopping-cart icon"></i>
                    </div>
                </div>
            </div>

        </nav>