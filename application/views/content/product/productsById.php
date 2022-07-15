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
    <div class="container-md d-flex flex-column d-md-block">
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
        <a href="<?= base_url() ?>/product/productsById/10">ROBLOCK</a>
    </div>
</div>
<div class="container-fluid" style="background-color: #fefdf9;">
    <div class="py-5 container px-sm-0" style="background-color: #fefdf9;">
        <div class="input-group mb-5" style="max-width: 600px; margin: auto;">
            <input type="text" class="form-control" id="text-produk" placeholder="Cari nama produk..." aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" onclick="cariProduk()" id="button-addon2"><i class="fas fa-search icon"></i></button>
        </div>
        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-1 g-md-2" id="data-item" data-index="0" style="background-color: #fefdf9;">
       
        </div>
        <div class="loading row row-cols-2 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-1 g-md-2" id="data-item" data-index="0" style="background-color: #fefdf9" >
        <?php for ($i= 0 ; $i < 8;$i++) : ?>
            <a class="col" style="text-decoration: none; color: #000000bd;">
                <div class="d-flex flex-column p-md-2" style="background-color: #f2f2f22b;box-shadow: 1px 2px 2px 0px #a3a2a291;border: 1.2px solid #a3a2a280; font-family: Montserrat, sans-serif; height: 100%;">
                    <div class="d-flex flex-column item p-md-2">
                        <div class="C-containerImg">
                            <div class="box-img">
                                <div class="img-fluid loading image"></div>
                            </div> 
                        </div>
                        <div class="loading label1"></div>
                        <div class="loading label2"></div>
                        <div class="loading label3"></div> 
                    </div>
                </div>
            </a>
        <?php endfor; ?> 
            
        </div>

    </div>
</div>

<script>
    var loaddata = true;
    var request; // Stores the XMLHTTPRequest object
    var timeout; // Stores time
    $(window).scroll(function() {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
            if (loaddata) {
                load_data();
            }
        }
    });
    load_data = function() {
        $(".loading").css("display", "block");
        request = $.ajax({
            url: "<?= base_url("product/getitem/")  .$catid. "/" ?>" + $("#data-item").data("index"),
            success: function(data) {
                if (data != "") {
                    $("#data-item").append(data);
                    $("#data-item").data("index", parseInt($("#data-item").data("index")) + 20);
                } else {
                    loaddata = false;
                }
                $(".loading").css("display", "none");
                timeout = request = null;
                if($('img.lazy').length){ 
                    $('img.lazy').lazy({  
                        effect: 'fadeIn', 
                        visibleOnly: true, 
                        onError: function(element) {
                            console.log('error loading ' + element.data('src'));
                        }, 
                        afterLoad: function(element) {
                            console.log('after loading ' + element.data('src'));
                            $(element).removeClass('skeleton');
                        }

                    }).removeClass('lazy').addClass('lazyloaded'); 
                }
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