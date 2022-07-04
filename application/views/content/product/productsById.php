<div class="py-5 jumbotron" style="position: relative; overflow: hidden;height: 400px;">
    <?php foreach ($productKategoriById as $item) : ?>
        <?php $catid = $item['CategoryRef']; ?>
        <img class="img-display" src="<?= base_url() ?>/asset/image/headerProduct/<?= $item['CategoryDetailImg'] ?>">
        <div class="img-background"></div>
        <div class="img-text">
            <h1 class="fw-bolder"><?= $item['CategoryDetailHeader'] ?></h1>
            <small class="fw-normal fs-3"><?= $item['CategoryDetailText'] ?></small>
        </div>
    <?php endforeach; ?>
</div>

<div class="costumproduct">
    <div class="container">
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
</div>
<div class="container-fluid" style="background-color: #fefdf9;">
    <div class="contanier-product py-5" style="background-color: #fefdf9;">
        <div class="input-group mb-5" style="max-width: 600px; margin: auto;">
            <input type="text" class="form-control" id="text-produk" placeholder="Cari nama produk..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" onclick="cariProduk()" id="button-addon2"><i class="fas fa-search icon"></i></button>
        </div>
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-1 g-md-2" id="data-item" data-index="0" style="background-color: #fefdf9;">
        <?php foreach ($productsById as $item) : ?>
            <a data-aos="fade-up" data-aos-once="false" class="col" style="text-decoration: none; color: #000000bd;" href="<?= base_url() ?>/product/detailItem/<?= $item['MsItemId'] ?>">
                <div class="d-flex flex-column p-md-2" style="background-color: #f2f2f22b;box-shadow: 1px 2px 2px 0px #a3a2a291;     border: 1.2px solid #a3a2a280; font-family: Montserrat, sans-serif; height: 100%;">
                    <div class="d-flex flex-column item p-md-2">
                        <div class="C-containerImg">
                            <div class="box-img">
                                <img class="img-fluid lazy skeleton" data-src="<?= base_url() ?>/asset/image/product/<?= $item['MsItemImage'] ?>">
                            </div>
                            <ul class="icon-product">
                                <li class="lip1">
                                    <i class="fas fa-heart"></i>
                                    <span>Add Favorite</span>
                                </li>
                                <li class="lip1">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span>Add Cart</span>
                                </li>
                            </ul>
                        </div>
                        <small class="align-self-center align-self-lg-start px-2 mt-2 fw-bold" style="color: #896a5e; font-size: 1em; min-height: 46px;"><?= $item['MsItemName'] ?></small>
                        <span class="align-self-center align-self-lg-start px-sm-2 mb-2 fw-normal" style="font-size: 1.3vh;"><?= $item['MsItemSize'] ?></span>
                        <span class="align-self-center align-self-lg-start px-sm-2 fw-normal mb-2" style="font-size: 1.7vh;"><?= $item['MsItemPrice'] ?></span>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
        </div>
        <!-- <div class="text-center loading" style="display: none">
            <div class="fa-5x">
                <i class="fas fa-spinner fa-pulse"></i>
            </div>
        </div> -->

    </div>
</div>
<!-- <div class="container">
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
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-2" data-aos="fade-up" id="data-item" data-index="0" style="background-color: #fefdf9;">
        </div>
        <div class="text-center loading" style="display: none">
            <div class="fa-5x">
                <i class="fas fa-spinner fa-pulse"></i>
            </div>
        </div>
    </div> -->
<!-- <script>
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
            url: "<?= base_url("product/getitem/") . $catid . "/" ?>" + $("#data-item").data("index"),
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
</script> -->
</div>