<style>
    .jumbotron .img-background {
        background: rgb(255 255 255 / 40%);
        position: absolute;
        width: 100%;
        height: 400px;
        top: 0;
        left: 0;
    }

    .jumbotron .img-display {
        position: absolute;
        left: 0;
        top: 0;
        object-fit: cover;
        height: 400px;
        width: 100%;
    }

    .jumbotron .img-text {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        text-align: center;
        height: 400px;
        margin-top: 150px;
    }
</style>
<div class="py-5 jumbotron" style="position: relative; overflow: hidden;height: 400px;">
    <img class="img-display" src="<?= base_url("asset/image/test.jpg") ?>" id="CategoryDetailImg">
    <div class="img-background"></div>
    <div class="img-text">
        <h1 class="fw-bolder" id="CategoryDetailHeader">https://Omahbata.com</h1>
        <small class="fw-normal fs-3" id="CategoryDetailText">Omahbata penyedia berbagai macam Bata Expose, Bata Tempel Roster Dan Paving</small>
    </div>
</div>
<div class="costumproduct">
    <a href="<?= base_url() ?>product/productsById/5">BATA EXPOSE</a>
    <a href="<?= base_url() ?>product/productsById/6">BATA TEMPEL</a>
    <div class="drop">
        <button class="dropbtn">ROSTER
        </button>
        <div class="drop-content">
            <a href="<?= base_url() ?>product/productsById/1">ROSTER WHITE</a>
            <a href="<?= base_url() ?>product/productsById/2">ROSTER RED</a>
            <a href="<?= base_url() ?>product/productsById/3">ROSTER SEMEN</a>
            <a href="<?= base_url() ?>product/productsById/4">ROSTER TANAH LIAT</a>
        </div>
    </div>
    <a href="<?= base_url() ?>/product/productsById/10">PAVING</a>
</div>
<div class="container-fluid" style="background-color: #fefdf9;">
    <div class="container py-5" style="background-color: #fefdf9;">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-2" id="data-item" data-index="0" style="background-color: #fefdf9;">
        </div>
        <div class="text-center loading" style="display: none">
            <div class="fa-5x">
                <i class="fas fa-spinner fa-pulse"></i>
            </div>
        </div>

    </div>
</div>
<!-- <nav class="navbar navbar-expand-lg p-5" style="background-color: #fefdf9;">
            <div class="collapse navbar-collapse d-flex justify-content-around mt-5" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link px-4" href="<?= base_url() ?>product/productsById/5">BATA EXPOSE</a>
                    <a class="nav-link px-4" href="<?= base_url() ?>product/productsById/6">BATA TEMPEL</a>
                    <li class="nav-item dropdown px-4">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ROSTER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url() ?>product/productsById/1">ROSTER PUTIH</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>product/productsById/2">ROSTER RED</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>product/productsById/3">ROSTER SEMEN</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>product/productsById/4">ROSTER TANAH LIAT</a></li>
                        </ul>
                    </li>
                    <a class="nav-link px-4" href="<?= base_url() ?>/product/productsById/10">ROBLOCK</a>
                </div>
            </div>
        </nav>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-2" id="data-item" data-index="0" style="background-color: #fefdf9;">
        </div>
        <div class="text-center loading" style="display: none">
            <div class="fa-5x">
                <i class="fas fa-spinner fa-pulse"></i>
            </div>
        </div> -->
<script>
    var loaddata = true;
    var request; // Stores the XMLHTTPRequest object
    var timeout; // Stores time
    $(window).scroll(function() {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            if (!request && loaddata) {
                load_data();
            }
        }
    });
    load_data = function() {
        $(".loading").css("display", "block");
        request = $.ajax({
            url: "<?= base_url("product/getitem/")  . "0/" ?>" + $("#data-item").data("index"),
            success: function(data) {
                if (data != "") {
                    $("#data-item").append(data);
                    $("#data-item").data("index", parseInt($("#data-item").data("index")) + 20);
                } else {
                    loaddata = false;
                }
                $(".loading").css("display", "none");
                timeout = request = null
            }
        });

        timeout = setTimeout(function() {
            if (request) {
                request.abort();
                $(".loading").css("display", "none");
            }
        }, 10000);
    }
    load_data();
</script>
</div>