<div class="container-fluid" style="background-color: #fefdf9;">
    <?php foreach ($projectById as $item) : ?>
        <div class="row row-cols-1 row-cols-lg-2 p-2 p-lg-5 mb-3">
            <div class="row mb-5 col-lg">
                <!-- <img class="img-fluid" style="height: 500px;" src="<?= base_url() ?>/asset/image/project/<?= $item["CustomerProjectHeaderImg"] ?>" alt=""> -->
                <div class="img-fluid p-4 rounded-1" style="height: 500px; background-image: url(<?= base_url('asset/image/project/' . $item["CustomerProjectHeaderImg"] . '') ?>); background-size: cover; background-position: center;">
                </div>
            </div>
            <div class="row col-lg justify-content-lg-evenly align-content-center">
                <div class="row">
                    <h2 class="mb-4"><?= $item["CustomerProjectTitle"] ?></h2>
                    <small class="mb-2"> <?= $item["CustomerProjectDeskripsi"] ?></small>
                    <span><?= date('d F Y', strtotime($item["CustomerProjectDate"])); ?> | <?= $item["CustomerProjectAddress"] ?></span>
                </div>
            </div>
        </div>
        <hr>


    <?php endforeach; ?>


    <div class="row row-cols-2 p-2">
        <div class="col-9">
            <h4 class="p-lg-5 p-sm-4 mb-3">Gallery Project</h4>
            <div class="row row-cols-1 p-sm-4 p-lg-5 text-center">
                <?php foreach ($projectGallery as $row) : ?>
                    <div class="col mb-1 mb-lg-5">
                        <img class="img-fluid mb-4" src="<?= base_url() ?>/asset/image/galleryProject/<?= $row["CustomerProjectGalleryImage"] ?>" alt="">
                        <small><?= $row["CustomerProjectGalleryDesk"] ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>

    <div class="row p-2 p-xl-5">
        <span class="mb-3 p-lg-5 p-sm-4">Item yang digunakan</span>
        <div class="row row-cols-2 row-cols-md-4 row-cols-xl-5 row-cols-xxl-6  m-auto">
            <?php foreach ($projectItem as $item) : ?>
                <div class="col mb-3 shadow shadow-sm mb-4 p-2 justify-content-center">
                    <div class="d-flex flex-column justify-content-center text-center">
                        <img class="img-fluid" src="<?= base_url() ?>asset/image/product/<?= $item["MsItemImage"] ?>" alt="img">
                        <span class="fw-normal mt-2 p-2"><?= $item["MsItemName"]; ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>