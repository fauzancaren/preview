<div class="container-fluid" style="background-color: #fefdf9;;">
    <?php foreach ($MsitemById as $item) : ?>
        <div class="row row-cols-2 p-5">
            <div class="col text-center">
                <img class="img-fluid" style="height: 500px;" src="<?= base_url() ?>/asset/image/product/notFound.jpg" alt="">
            </div>
            <div class="col d-flex px-5 flex-column justify-content-center">
                <div class="row">
                    <h1><?= $item["MsItemName"] ?></h1>
                    <h3> <?= $item["MsItemCode"] ?></h3>
                    <h5>Rp .<?= number_format($item["MsItemPrice"]) ?> <small class="fw-light">/<?= $item["MsItemUoM"] ?></small></h5>
                    <h5>Ukuran <?= $item["MsItemSize"] ?></h5>
                </div>
            </div>
        </div>


    <?php endforeach; ?>


    <div class="container-fluid p-5">
        <h2 class="p-5">Gallery</h2>
        <div class="row row-cols-4 text-center">
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