<div class="container-fluid mb-1" style="background-color: #fefdf9; color: #69422d">
    <div class="row py-4">
        <div class="container-fluid col-6 d-flex justify-content-center align-items-center">
            <img class=" imageHead" src="<?= base_url() ?>/asset/image/project/MpHouse.jpeg" width="550px" height="550px" alt="">
        </div>
        <div class="container-fluid col-6 text-center d-grid align-content-center align-items-center" style="width: 600px;">
            <div class="col">
                <p class="fw-normal fs-1" style="font-family: 'Lora', serif;">Fungsional sekaligus estetis dengan bentuk geometris.</p>
            </div>
            <div class="col d-grid mb-5">
                <small class="fs-6 fw-normal" style="font-family: 'Lora', serif;">MP House by TIES</small>
                <span class="fw-lighter" style="font-family: 'Lora', serif; font-size: small;">Tangerang</span>
            </div>

            <div class="col">
                <a href="<?= base_url() ?>/PageContent/project"><button class="btn btn-sm px-5 py-3 fw-bold rounded-0 tombol">LIHAT PROJECT</button></a>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-1" style="background-color: #fefdf9;">
    <div>
        <div class="row flex-column text-center justify-content-end mb-5" style="height: 100px;">
            <h4 class="fw-normal" style="color: #69422d;">Featured Projects</h4>
        </div>
        <div class="container-fluid d-flex p-3 flex-wrap gap-4 justify-content-around">
            <div class="d-flex flex-column projectList">
                <img src="<?= base_url() ?>/asset/image/project/kfc.jpg" width="300px" height="300px" alt="image">
                <small class="text-center py-2">KFC Pustitek Pamulang</small>

            </div>

            <div class="d-flex flex-column projectList">
                <img src="<?= base_url() ?>/asset/image/project/stasiunTebet.jpg" width="300px" height="300px" alt="image">
                <small class="text-center py-2">Halte Integrasi Stasiun Tebet</small>

            </div>

            <div class="d-flex flex-column projectList">
                <img src="<?= base_url() ?>/asset/image/project/kfc.jpg" width="300px" height="300px" alt="image">
                <small class="text-center py-2">Starbucks Dramaga Bogor</small>
            </div>
        </div>

        <div class="row py-4">
            <div class="d-flex align-items-center justify-content-center mt-4" style="height: 100px;">
                <a href="<?= base_url() ?>PageContent/project"><button class="btn btn-sm px-5 fw-bold py-3 rounded-0 tombol">LIHAT SELURUH PROJECT</button></a>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background-color: #bd7658;;">
    <div class="youtube-grid">
        <div class="sub-youtube1">
            <h4 style="color: whitesmoke;">Kata Mereka Tentang Omah Bata</h4>
        </div>

        <div class="youtube-katamereka">
            <div class="youtubeimg">
                <div>
                    <iframe class="container-fluid" src="https://www.youtube.com/embed/5gPSkUXMq-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="row p-3 text-center" style="color: white;">
                        <small>Sofian</small>
                        <small class="fw-light">Arsitek & Kontraktor</small>
                    </div>
                </div>
            </div>
            <div class="youtubeimg">
                <div>
                    <iframe class="container-fluid" src="https://www.youtube.com/embed/49SPpOzj-Pk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="row p-3 text-center" style="color: white;">
                        <small>Nayakumara</small>
                        <small class="fw-light">Arsitek</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-youtube2">
            <div class="coveryoutube">
                <div class="d-flex justify-content-center gap-2 p-2">
                    <h5 class="text-center mb-3 fw-normal">Omahbata on</h5>
                    <img class="mt-1" src="<?= base_url() ?>/asset/image/transtvlogo.png" width="100px" height="15px" alt="">
                </div>
                <div class="div">
                    <iframe class="container-fluid" src="https://www.youtube.com/embed/M-6erT4kwK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5" style="background-color: #fefdf9;">
    <p class="py-2 textNavigasiHomeProduct">Percantik hunian anda dengan dengan aneka produk material kami</p>

    <div class="container">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/test.jpg" alt="">
            </div>

            <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/1.jpg" alt="">
            </div>

            <div class="tab-pane fade p-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/2.jpg" alt="">
            </div>

            <div class="tab-pane fade p-3" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact2-tab" tabindex="0">
                <img class="img-fluid" src="<?= base_url() ?>/asset/image/3.jpg" alt="">
            </div>
        </div>

        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <button class="nav-link active px-lg-5 rounded-0" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">BATA EXPOSE</button>
                <button class="nav-link px-lg-5 rounded-0" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">BATA TEMPEL</button>
                <button class="nav-link px-lg-5 rounded-0" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">ROSTER</button>
                <button class="nav-link px-lg-5 rounded-0" id="nav-contact2-tab" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">PAVING</button>
            </div>
        </nav>
    </div>
</div>

<div class="container-fluid p-4 p-md-5 p-lg-3 p-sm-5" style="background-color: #bd7658;">
    <div class="d-flex flex-column text-center flex-wrap justify-content-center">
        <h4 class="fw-light" style="color: whitesmoke;">Why shope with use?</h4>

        <div class="d-flex flex-lg-row flex-md-column flex-sm-column flex-wrap justify-content-center gap-4 p-4 text-center">
            <div class="col-md img-fluid border border-#f2e0d6 border-2 rounded-3 p-3" style="background-color: #6e492f; color: #f2e0d6;">
                <h4>Free Delivery</h4>
                <span class="fw-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem cumque tempora magnam!</span>

            </div>
            <div class="col-md img-fluid border border border-2 rounded-3 p-3" style="background-color: #6e492f; color: #f2e0d6;">
                <h4>100% Secure Payment</h4>
                <span class="fw-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error officia illo nisi.</span>

            </div>
            <div class="col-md img-fluid border border-#f2e0d6 border-2 rounded-3 p-3" style="background-color: #6e492f; color: #f2e0d6;">
                <h4>Quality Quarantee</h4>
                <span class="fw-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum incidunt eius aliquam. Aut, autem?</span>

            </div>
            <div class="col-md img-fluid border border-#f2e0d6 border-2 rounded-3 p-3" style="background-color: #6e492f; color: #f2e0d6;">
                <h4>Big Offers</h4>
                <span class="fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, repellat corrupti?</span>

            </div>
        </div>
    </div>
</div>

<div class="container-fuid py-5" style="background-color: #fefdf9;">
    <div class="row text-center">
        <h3 class="fw-normal py-5" style="color: #69422d;">Our Client</h3>
    </div>

    <div class="container px-2 px-sm-3 px-md-5">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 g-2">
            <div class="col text-center">
                <div class="box-client">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/logoClient/adhi.png" alt="">
                </div>
            </div>
            <div class="col">
                <div class="box-client">
                    <img class="img-fluid" src="<?= base_url() ?>/asset/image/logoClient/al-jazaera-logo.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/daiso.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/Dominos_pizza.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/dr-marteens.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/Hana_Bank.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/Hotel-Santika.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/Jaya-Konstruksi.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/jco.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/jw marriote.jpg" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/kfc.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/logo-Net-tv.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/PT_PP_logo.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/quality.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/Rai-Fitness.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/sbucks.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/skechers.png" alt="">
                </div>
            </div>
            <div class=" col">
                <div class="box-client">
                    <img class="  img-fluid" src="<?= base_url() ?>/asset/image/logoClient/Wika.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class=" container-fluid" style="background-color: #bd7658;">
    <div class="d-grid justify-content-center align-content-center p-4" style="color: whitesmoke;">
        <h4 class="fw-normal">Our Newsletter</h4>
        <small class="fw-light">Subscribe to our newsletter to get update about our grand offers.</small>

        <div class="input-group mb-3 mt-5">
            <input type="text" class="form-control rounded-0" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn rounded-0 fw-normal px-4" style="background-color: #67452c ; font-size: small; color: white;" type="button" id="button-addon2">Send <i class="fas fa-paper-plane ml-2"></i></button>
        </div>
    </div>
</div>