<div style="background-color: #fefdf9;">
    <div class="container">
        <div class="row py-3">
            <div class="col-12">
                <h4 class="px-2 py-2">CUSTOMER PROJECT</h4>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 text-center">
            <?php foreach ($project as $row) : ?>
                <div class="col mb-5">
                    <a href="#">
                        <div class="img-fluid p-4 rounded-1" style="height: 250px; background-image: url(<?= base_url('asset/image/project/' . $row["CustomerProjectHeaderImg"] . '') ?>); background-size: cover; background-position: center;">
                        </div>
                    </a>

                    <div class="d-flex flex-column rounded-3 p-3 shadow shadow-md" style="background-color: #fefdf9; margin: -50px 10px 0 10px;">
                        <button class="btn btn-sm btn-danger">UPDATE AND NEWS</button>
                        <a href="#" class="btnProject"><h5><?= $row["CustomerProjectTitle"] ?></h5></a>
                        <small><?= $row["CustomerProjectDeskripsi"] ?></small>
                        <small><?= date('d F Y', strtotime($row["CustomerProjectDate"])); ?> | <?= $row["CustomerProjectAddress"]  ?></small>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>