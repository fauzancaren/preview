<div class="container-fluid" style="background-color: #fefdf9;">
    <div class="row text-dark bg-opacity-50" style="height: 400px; background-image: url(<?= base_url() ?>/asset/image/test.jpg);">
        <div class=" d-grid justify-content-center text-center align-content-center" style="font-family: 'Montserrat', sans-serif;">
            <h1 class="fw-bolder">https://Omahbata.com</h1>
            <small class="fw-normal fs-3">Omahbata penyedia berbagai macam Bata Expose, Bata Tempel Roster Dan Paving</small>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg p-5" style="background-color: #fefdf9;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse d-flex justify-content-around mt-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <!-- <?php foreach ($productKategori as $item) : ?>
                    <a class="nav-link px-4" href="<?= base_url() ?>/pageContent/productsById/<?= $item['MsItemCatId'] ?>"><?= $item['MsItemCatName'] ?></a>
                <?php endforeach; ?> -->

                <a class="nav-link px-4" href="<?= base_url() ?>/PageContent/productsById/5">BATA EXPOSE</a>
                <a class="nav-link px-4" href="<?= base_url() ?>/PageContent/productsById/6">BATA TEMPEL</a>
                <li class="nav-item dropdown px-4">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ROSTER
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url() ?>/PageContent/productsById/1">ROSTER PUTIH</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>/PageContent/productsById/2">ROSTER RED</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>/PageContent/productsById/3">ROSTER SEMEN</a></li>
                        <li><a class="dropdown-item" href="<?= base_url() ?>/PageContent/productsById/4">ROSTER TANAH LIAT</a></li>
                    </ul>
                </li>
                <a class="nav-link px-4" href="<?= base_url() ?>/pageContent/productsById/10">ROBLOCK</a>
            </div>
        </div>
    </div>
</nav>

<div class="d-flex flex-wrap justify-content-center p-4 gap-3" style="background-color: #fefdf9;">
    <?php foreach ($product as $row) : ?>
        <div class="d-flex flex-row justify-content-center">
            <div class="d-flex flex-column p-3">
                <img class="img-fluid mb-3 rounded-3" style="height: 250px; width: 250px;" src="" alt="">
                <span class=" px-1 fw-bold"><?= $row["MsItemName"] ?></span>
                <small class="px-1">Rp. <?= number_format($row["MsItemPrice"]) ?></small>
                <small class="px-1"><?= $row["MsItemCode"] ?></small>
            </div>
        </div>
    <?php endforeach; ?>
</div>