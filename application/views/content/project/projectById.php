<div class="container-fluid" style="background-color: #fefdf9;;">
    <?php foreach ($projectById as $item) : ?>
        <div class="row row-cols-2 p-5">
            <div class="col text-center">
                <img class="img-fluid" style="height: 500px;" src="<?= base_url() ?>/asset/image/project/<?= $item["CustomerProjectHeaderImg"] ?>" alt="">
            </div>
            <div class="col d-flex px-5 flex-column justify-content-center">
                <div class="row">
                    <h1 class="mb-3"><?= $item["CustomerProjectTitle"] ?></h1>
                    <small class="mb-2"> <?= $item["CustomerProjectDeskripsi"] ?></small>
                    <span><?= date('d F Y', strtotime($item["CustomerProjectDate"])); ?> | <?= $item["CustomerProjectAddress"] ?></span>
                </div>
            </div>
        </div>


    <?php endforeach; ?>


    <div class="row row-cols-2 p-5">
        <div class="col-9">
            <h2 class="p-5">Gallery</h2>
            <div class="row row-cols-1 p-5 text-center">
                <?php foreach ($projectGallery as $row) : ?>
                    <div class="col mb-5">
                        <img class="img-fluid" src="<?= base_url() ?>/asset/image/galleryProject/<?= $row["CustomerProjectGalleryImage"] ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>