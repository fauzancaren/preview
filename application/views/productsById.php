<div class="container-fluid" style="background-color: #fefdf9;">
    <?php foreach ($productKategoriById as $item) : ?>
        <div class="row text-dark" style="height: 400px; background-size: cover; background-image: url(<?= base_url() ?>/asset/image/headerProduct/<?= $item['MsItemHeaderImg'] ?>);">
            <div class=" d-grid justify-content-center text-center align-content-center">
                <h1 class="fw-bolder"><?= $item['MsItemCatName'] ?></h1>
                <h4 class="fw-normal fa-align-justify sm"><?= $item['MsItemTextHeader'] ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo rem odit sit ab aut, aliquid, sint temporibus alias est ut obcaecati quod autem explicabo dolor praesentium ipsa delectus quia distinctio debitis sapiente. Voluptatibus quos temporibus itaque eligendi culpa laboriosam!</h4>

            </div>
        </div>
    <?php endforeach; ?>
</div>

<nav class="navbar navbar-expand-lg p-5" style="background-color: #fefdf9;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse d-flex justify-content-around mt-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <!-- <?php foreach ($productKategori as $item) : ?>
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
    <?php foreach ($productsById as $row) : ?>
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