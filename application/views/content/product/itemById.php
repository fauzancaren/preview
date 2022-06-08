<div class="container-fluid" style="background-color: #fefdf9;;">
    <?php foreach ($MsitemById as $item) : ?>
        <div class="row row-cols-1 row-cols-lg-2 p-lg-5">
            <div class="col mb-5 mb-lg-0 text-center">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
            <div class="col d-flex px-4 px-lg-5 flex-column justify-content-lg-center ">
                <div class="row">
                    <h1><?= $item["MsItemName"] ?></h1>
                    <h3> <?= $item["MsItemCode"] ?></h3>
                    <h5>Rp. <?= number_format($item["MsItemPrice"]) ?> <small class="fw-light">/<?= $item["MsItemUoM"] ?></small></h5>
                    <h5>Ukuran <?= $item["MsItemSize"] ?></h5>
                </div>
            </div>
        </div>


    <?php endforeach; ?>


    <div class="p-5 mt-5">
        <h4 class="text-center mb-5">Gallery Product</h4>
        <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-3 row-cols-xxl-5 text-center">
            <div class="col mb-5">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
            <div class="col mb-5">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
            <div class="col mb-5">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
            <div class="col mb-5">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
            <div class="col mb-5">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
        </div>
    </div>
</div>