<div class="py-5" style="position: relative; overflow: hidden;">
    <img class="demo-bg" src="<?= base_url() ?>/asset/image/test.jpg" alt="" style="opacity: 0.6;position: absolute;left: 0;top: 0; height: 400;z-index: -1;">
    <div class="container text-dark">
        <div class=" d-grid justify-content-center text-center align-content-center" data-aos="zoom-out" style="height: 400px;font-family: 'Montserrat', sans-serif;position: relative;">
            <h1 class="fw-bolder">https://Omahbata.com</h1>
            <small class="fw-normal fs-3">Omahbata penyedia berbagai macam Bata Expose, Bata Tempel Roster Dan Paving</small>
        </div>
    </div>
</div>
<div class="py-5" style="background-color: #fefdf9;">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-5" style="background-color: #fefdf9;">
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
        </div>
    </div>
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