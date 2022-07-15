<div class="container-fluid" style="background-color: #fefdf9;">
    <?php foreach ($MsitemById as $item) : ?>
        <div class="row row-cols-1 row-cols-lg-2 p-lg-5 shadow-sm pb-5">
            <div class="col mb-5 mb-lg-0 text-center d-flex justify-content-center" style="height: 600px;">
                <img class="img-fluid" style="object-fit: contain;" src="<?= base_url() ?>/asset/image/product/<?= $item["MsItemImage"] ?>" alt="">
            </div>
            <div class="col d-flex px-4 px-lg-5 flex-column justify-content-lg-center">
                <div class="row">
                    <h2 class="mb-2"><?= $item["MsItemName"] ?></h2>
                    <h6 class="mb-2"><?= $item["MsItemCode"] ?></h6>
                    <span class="mb-4">Ukuran <?= $item["MsItemSize"] ?></span>
                    <h4 class="mb-4 fw-normal">Rp. <?= number_format($item["MsItemPrice"]) ?> <small class="fw-light">/<?= $item["MsItemUoM"] ?></small></h4>
                    <?php
                    if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=628128201414&text=' . urlencode('Halo omahbata');
                    // tapi kalau desktop pakai web.whatsapp.com
                    else $linkWA = 'https://web.whatsapp.com/send?phone=628128201414&text=' . urlencode('Halo omahbata');
                    ?>

                    <div class="col col-sm-6 col-lg-8 col-xl-6">
                        <a class="btn d-flex justify-content-center align-items-center" style="background-color: #26a69a; color: white;" target="_blank" href="<?php echo $linkWA ?>">
                            <i class="fab fa-whatsapp fs-2" style="margin-right: 1rem;"></i>
                            <span>Order Via Whatsapp</span>
                        </a>
                    </div>

                </div>
                <hr class="mb-4">
                <div class="p-0" id="list-tab" role="tablist">
                    <a class="px-4 py-1 active border border-1 border-dark text-dark" style="text-decoration: none;" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Deskripsi</a>
                    <a class="px-4 py-1 border border-1 border-dark text-dark" style="text-decoration: none;" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Info Tambahan</a>
                </div>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <?php foreach ($MsitemDeskripsi as $row) : ?>
                            <blockquote class="mb-3" style="white-space: pre-wrap; "><?= $row["MsItemDeskripsiText"] ?> </blockquote>

                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <table>
                            <tr>
                                <td><small class="fw-bold">Warna</small></td>
                                <td style="width: 1rem;"> : </td>
                                <td><?= $row["MsItemColor"] ?></td>
                            </tr>
                            <tr>
                                <td><small class="fw-bold">Material</small> </td>
                                <td style="width: 1rem;"> : </td>
                                <td><?= $row["MsItemMaterial"] ?></td>
                            </tr>
                        </table>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
</div>
<?php endforeach; ?>



<div class="container-fluid p-5" style="background-color: #fefdf9;">
    <h4 class="text-center mb-5">Gallery Product</h4>
    <div class="row row-cols-2 row-cols-lg-4 row-cols-sm-3 row-cols-xxl-5 text-center">
        <?php foreach ($MsItemSubImg as $row) : ?>
            <div class="col mb-5">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/subProduct/<?= $row["ItemSubImageFileName"] ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>