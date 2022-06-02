<div class="container-fluid" style="background-color: #fefdf9;">
    <div class="row text-dark bg-opacity-50" style="height: 400px; background-image: url(<?= base_url() ?>/asset/image/test.jpg);">
        <div class=" d-grid justify-content-center text-center align-content-center">
            <h1 class="fw-bolder">https://Omahbata.com</h1>
            <small class="fw-normal fs-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quo rem odit sit ab aut, aliquid, sint temporibus alias est ut obcaecati quod autem explicabo dolor praesentium ipsa delectus quia distinctio debitis sapiente. Voluptatibus quos temporibus itaque eligendi culpa laboriosam!</small>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg p-5" style="background-color: #fefdf9;">
    <div class="container-fluid">
        <div class="collapse navbar-collapse d-flex justify-content-around mt-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">

                <?php foreach($productKategori as $item) : ?>
                    <a class="nav-link px-4" href="<?= base_url() ?>/pageContent/productsById/<?= $item['obiKategoriName'] ?>"><?= strtoupper($item['obiKategoriName']) ?></a>
                        <?php endforeach;?>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid d-flex flex-wrap justify-content-center p-4 gap-3" style="background-color: #fefdf9;">
    <?php foreach ($product as $row) : ?>
        <div class="p-3 shadow-md shadow rounded-3" style="width: 300px; height: 400px; background-color: #cccac7;">
            <div class="container-fluid d-flex flex-column">
                <div class="p-5 rounded-2 d-flex justify-content-center">
                    <img class="img-thumbnail" src="<?= $row["obiProductImg"] ?>" alt="image">
                </div>

                <span class=" px-1 fw-bold"><?= $row["obiProductNama"] ?></span>
                <small class="px-1"><?= $row["obiProductKategori"] ?></small>
            </div>
        </div>
    <?php endforeach; ?>
</div>