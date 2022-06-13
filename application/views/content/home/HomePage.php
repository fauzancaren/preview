<div class="mb-1 py-5" style="background: linear-gradient(180deg, rgba(237,237,237,1) 0%, #fefdf9 70%);">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
                <img class="imageHead shadow-lg" src="<?= base_url() ?>/asset/image/project/MpHouse.jpeg" alt="">
            </div>
            <div class="col-12 col-lg-6 text-center d-grid align-content-center align-items-center">
                <div class="col mb-2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
                    <h1 class="fw-bolder text-uppercase" style="font-family: 'Montserrat', sans-serif;">Fungsional sekaligus estetis dengan bentuk geometris.</h1>
                </div>
                <div class="col d-grid mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <small class="fs-6 fw-normal text-uppercase">MP House by TIES</small>
                    <span class="fw-normal text-uppercase" style="font-size: small;">Tangerang</span>
                </div>

                <div class="col" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="3000">
                    <a href="<?= base_url() ?>project"><button class="btn btn-sm px-5 py-3 fw-bold rounded-0 tombol">LIHAT PROJECT <span class="ps-2 fa fa-arrow-right"></span></button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background: linear-gradient(180deg, rgba(254,253,249,1) 15%, rgba(237,237,237,1) 100%);">
    <div class="container py-5">
        <div class="text-center justify-content-end py-5">
            <H1 class="fw-bolder text-uppercase">Featured Projects</H1>
        </div>
        <div class=" project text-center" data-aos="fade-right">
            <?php foreach ($project as $row) : ?>
                <div class="col p-4 item-project">
                    <div class="img-fluid p-4 rounded-1 head-project" style="height: 250px; background-image: url(<?= base_url('asset/image/project/' . $row["CustomerProjectHeaderImg"] . '') ?>); background-size: cover; background-position: center;">
                    </div>
                    <div class="d-flex flex-column rounded-3 p-3 shadow shadow-md deskripsi-project" style="background-color: #fefdf9; margin: -50px 10px 0 10px;">
                        <div class="text-center mb-2">
                            <div class="badge" style="background:#ff3c18">CUSTOMER PROJECT</div>
                        </div>
                        <!-- <button class="btn btn-sm btn-danger">UPDATE AND NEWS</button> -->
                        <div class="align-content-end" style="height: 7em; overflow: hidden;">
                            <a href="<?= base_url() ?>project/projectById/<?= $row["CustomerProjectId"] ?>" class="btnProject">
                                <h5><?= $row["CustomerProjectTitle"] ?></h5>
                            </a>
                        </div>

                        <div class="align-content-start" style="height: 8em; overflow: hidden;">
                            <small><?= $row["CustomerProjectDeskripsi"] ?></small>
                        </div>
                        <div class="row align-content-center" style="height: 3em;">
                            <small><?= date('d F Y', strtotime($row["CustomerProjectDate"])); ?> | <?= $row["CustomerProjectAddress"]  ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row py-1 pb-5 mb-5">
            <div class="d-flex align-items-center justify-content-center mt-4" style="height: 100px;">
                <a href="<?= base_url() ?>project"><button class="btn btn-sm px-5 fw-bold py-3 rounded-0 tombol text-uppercase">Selengkapnya <span class="ps-2 fa fa-arrow-right"></span></button></a>
            </div>
        </div>
        <script>
            $(document).ready(function() {

                // my slick slider options
                var options = {
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    adaptiveHeight: true,
                    infinite: false,
                    dots: true,
                    responsive: [{
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                dots: true,
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                dots: false,
                            }
                        },
                        {
                            breakpoint: 576,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                dots: false,
                            }
                        }
                    ]
                };


                // my slick slider as constant object
                const mySlider = $('.project').on('init', function(slick) {

                    // on init run our multi slide adaptive height function
                    multiSlideAdaptiveHeight(this);

                }).on('beforeChange', function(slick, currentSlide, nextSlide) {

                    // on beforeChange run our multi slide adaptive height function
                    multiSlideAdaptiveHeight(this);

                }).slick(options);


                // our multi slide adaptive height function passing slider object
                function multiSlideAdaptiveHeight(slider) {

                    // set our vars
                    let activeSlides = [];
                    let tallestSlide = 0;

                    // very short delay in order for us get the correct active slides
                    setTimeout(function() {

                        // loop through each active slide for our current slider
                        $('.slick-track .slick-active', slider).each(function(item) {

                            // add current active slide height to our active slides array
                            activeSlides[item] = $(this).outerHeight();

                        });

                        // for each of the active slides heights
                        activeSlides.forEach(function(item) {

                            // if current active slide height is greater than tallest slide height
                            if (item > tallestSlide) {

                                // override tallest slide height to current active slide height
                                tallestSlide = item;

                            }

                        });

                        // set the current slider slick list height to current active tallest slide height
                        $('.slick-list', slider).height(tallestSlide);

                    }, 10);

                }


                // when window is resized
                $(window).on('resize', function() {

                    // run our multi slide adaptive height function incase current slider active slides change height responsively
                    multiSlideAdaptiveHeight(mySlider);

                });
            });
        </script>
    </div>
</div>

<div class="py-5" style="background: radial-gradient(circle, rgba(199,145,123,1) 68%, rgba(189,118,88,1) 28%);">
    <div class="container py-5">
        <div class="row py-2 d-flex justify-content-center">
            <div class="row rows-col-1 rows-cols-md-2 justify-content-center">
                <div class="col-md-8">
                    <div class="row">
                        <h1 class="text-uppercase fw-bold" style="color: whitesmoke; text-align: center;">Kata Mereka Tentang <span style=" color: #6d4a33; ">Omah</span><span style=" color: #d4582a; ">Bata</span></h1>
                    </div>
                    <div class="row row-cols-md-2 py-3 m-auto">
                        <div class="col-lg justify-content-center">
                            <div class="d-flex justify-content-center">
                                <iframe class="img-fluid" src="https://www.youtube.com/embed/Q0U-9m9_sLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                            <div class="row p-3 text-center" style="color: white;">
                                <small class="fw-bold fs-5 text-white">NAYA KUMARA</small>
                                <small class="fw-bold text-light">KONSULTAN DESAIN &amp; KONTRAKTOR</small>
                            </div>
                        </div>
                        <div class="col-lg">
                            <div class="d-flex justify-content-center">
                                <iframe class="img-fluid" src="https://www.youtube.com/embed/5gPSkUXMq-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                            <div class="row p-3 text-center" style="color: white;">
                                <small class="fw-bold fs-5 text-white">SOFYAN</small>
                                <small class="fw-bold text-light">ARSITEK &amp; KONTRAKTOR</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 d-flex flex-column align-items-center p-2" style="background-color: whitesmoke;">

                    <div class="d-flex justify-content-center gap-2 p-2">
                        <h5 class="text-center mb-3 fw-normal">Omahbata on</h5>
                        <img class="mt-1" src="https://192.168.1.200/omahbata.com//asset/image/transtvlogo.png" width="100px" height="15px" alt="">
                    </div>

                    <div class="d-flex justify-content-center">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/M-6erT4kwK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background: linear-gradient(180deg, rgba(237,237,237,1) 0%, #fefdf9 70%);">
    <div class="container py-5">
        <div class="row d-flex justify-content-center py-5 text-center">
            <div class="text-center justify-content-end py-5">
                <h3 class="fw-bold text-uppercase">Percantik hunian anda dengan aneka produk material kami</h3>
            </div>
            <div class="row d-flex">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active p-1" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <img class="img-fluid" src="<?= base_url() ?>/asset/image/test.jpg" alt="">
                    </div>

                    <div class="tab-pane fade p-1" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <img class="img-fluid" src="<?= base_url() ?>/asset/image/1.jpg" alt="">
                    </div>

                    <div class="tab-pane fade p-1" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        <img class="img-fluid" src="<?= base_url() ?>/asset/image/2.jpg" alt="">
                    </div>

                    <div class="tab-pane fade p-1" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact2-tab" tabindex="0">
                        <img class="img-fluid" src="<?= base_url() ?>/asset/image/3.jpg" alt="">
                    </div>
                </div>
            </div>

            <nav>
                <div class="nav nav-tabs nav-fill fw-bold" id="nav-tab" role="tablist">
                    <button class="nav-link active px-lg-5 rounded-0" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">BATA EXPOSE</button>
                    <button class="nav-link px-lg-5 rounded-0" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">BATA TEMPEL</button>
                    <button class="nav-link px-lg-5 rounded-0" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">ROSTER</button>
                    <button class="nav-link px-lg-5 rounded-0" id="nav-contact2-tab" data-bs-toggle="tab" data-bs-target="#nav-contact2" type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">PAVING</button>
                </div>
            </nav>

        </div>
    </div>
</div>

<div class="py-5" style="background: radial-gradient(circle, rgba(199,145,123,1) -1%, rgba(189,118,88,1) 76%);">
    <div class="container">
        <div class="row p-4 p-md-5 p-lg-3 p-sm-5">
            <div class="d-flex flex-column text-center flex-wrap justify-content-center">

                <div class="text-center justify-content-end mb-5 text-white">
                    <h3>Why shope with use?</h3>
                </div>
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
    </div>
</div>

<div class="py-5" style="background-color: #fefdf9;">
    <div class="container">
        <div class="row py-5">
            <div class="text-center justify-content-end">
                <h3>Our Client</h3>
            </div>
            <div class="row justify-content-center ms-auto me-auto">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 gy-xl-5 gy-lg-4 gy-md-3 gy-2">
                    <div class="col">
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
    </div>
</div>

<div class="py-5" style="background: radial-gradient(circle, rgba(199,145,123,1) -1%, rgba(189,118,88,1) 76%);">
    <div class="container ">
        <div class="row">
            <div class="d-grid justify-content-center align-content-center p-4" style="color: whitesmoke;">
                <h4 class="fw-normal">Our Newsletter</h4>
                <small class="fw-light">Subscribe to our newsletter to get update about our grand offers.</small>


                <div class="input-group mb-3 mt-5">
                    <input type="text" class="form-control rounded-0" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn rounded-0 fw-normal px-4" style="background-color: #67452c ; font-size: small; color: white;" type="button" id="button-addon2">Send <i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>