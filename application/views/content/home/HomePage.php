<div class="mb-1 py-5" style="background: linear-gradient(180deg, rgba(237,237,237,1) 0%, #fefdf9 70%);background-image:url('<?= base_url("asset/image/bg-light-1.svg") ?>');background-size: cover;">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center mb-4 mb-lg-0" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-out-back">
                <img class="imageHead shadow-lg" src="<?= base_url() ?>/asset/image/project/MpHouse.jpeg" alt="">
            </div>
            <div class="col-12 col-lg-6 text-center d-grid align-content-center align-items-center">
                <div class="col mb-2" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
                    <h1 class="fw-bolder" style="font-family: 'Montserrat', sans-serif;">Fungsional sekaligus estetis dengan bentuk geometris.</h1>
                </div>
                <div class="col d-grid mb-5" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <small class="fs-6 fw-normal text-uppercase">MP House by TIES</small>
                    <span class="fw-normal text-uppercase" style="font-size: small;">Tangerang</span>
                </div>

                <div class="col" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="2000">
                    <a href="<?= base_url() ?>project/projectById/2"><button class="btn btn-sm px-5 py-3 fw-bold rounded-0 tombol">LIHAT PROJECT <span class="ps-2 fa fa-arrow-right"></span></button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background: linear-gradient(180deg, rgba(254,253,249,1) 15%, rgba(237,237,237,1) 100%);">
    <div class="container py-5">
        <div class="text-center justify-content-end py-5">
            <H1 class="fw-bolder text-uppercase">Featured <span style="color:#d4582a">Projects</span></H1>
        </div>
        <div class="project text-center" data-aos="fade-right">
            <?php foreach ($project as $row) : ?>
                <div class="col p-4 item-project">
                    <div class="img-fluid p-4 rounded-1 head-project" style="height: 250px; background-image: url(<?= base_url('asset/image/project/' . $row["CustomerProjectHeaderImg"] . '') ?>); background-size: cover; background-position: center;">
                    </div>
                    <div class="d-flex flex-column rounded-3 p-3 shadow shadow-md deskripsi-project" style="background-color: #fefdf9; margin: -50px 10px 0 10px;">
                        <div class="text-center mb-2">
                            <div class="badge" style="background:#ff3c18">CUSTOMER PROJECT</div>
                        </div>
                        <div class="align-content-end" style="height: 7em; overflow: hidden;">
                            <a href="<?= base_url() ?>project/projectById/<?= $row["CustomerProjectId"] ?>" class="btnProject">
                                <h6><?= $row["CustomerProjectTitle"] ?></h6>
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
                        },
                        {
                            breakpoint: 375,
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
                <div class="col-lg-8 col-md-12 p-2">
                    <div class="row">
                        <h2 class="text-uppercase fw-bold" style="color: whitesmoke; text-align: center;"><span class="text-kata-mereka">Kata Mereka Tentang <span style=" color: #6d4a33; ">Omah</span><span style=" color: #d4582a; ">Bata</span></span>&nbsp;|</h2>
                    </div>
                    <div class="row row-cols-md-2 pt-3 m-auto">
                        <div class="col-lg-6 col-md-6 col-sm-12 p-4">
                            <div class="d-flex justify-content-center">
                                <div style="border-radius:10px;overflow: hidden;width: fit-content;display: flex;height: 180px">
                                    <iframe class="img-fluid" src="https://www.youtube.com/embed/Q0U-9m9_sLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="row py-3 text-center" style="color: white;">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <small class="fw-bold fs-5 text-white" style="font-family: 'Poppins', sans-serif;font-size: 1.4em !important;color: #422c1e !important;">NAYA KUMARA</small>
                                    </blockquote>
                                    <figcaption class="blockquote-footer" style="color: #422c1e73;">
                                        <small class="fw-light text-light" style="color: #422c1e73 !important;font-size: 0.75rem;">KONSULTAN DESAIN &amp; KONTRAKTOR</small>
                                    </figcaption>
                                </figure>


                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12  p-4">
                            <div class="d-flex justify-content-center">
                                <div style="border-radius:10px;overflow: hidden;width: fit-content;display: flex;height: 180px">
                                    <iframe class="img-fluid" src="https://www.youtube.com/embed/5gPSkUXMq-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="row py-3 text-center" style="color: white;">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <small class="fw-bold fs-5 text-white" style="font-family: 'Poppins', sans-serif;font-size: 1.4em !important;color: #422c1e !important;">SOFYAN</small>
                                    </blockquote>
                                    <figcaption class="blockquote-footer" style="color: #422c1e73;">
                                        <small class="fw-light text-light" style="color: #422c1e73 !important;font-size: 0.75rem;">ARSITEK &amp; KONTRAKTOR</small>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-0">
                    <div class="d-flex flex-column align-items-center p-2 rounded" style="background-color: #f5f5f5d4;">
                        <div class="row pb-2">
                            <h1 class="fw-bolder" style="color: whitesmoke; text-align: center;">
                                <span class="fs-5" style=" color: #6d4a33; ">OMAH</span><span class="fs-5" style=" color: #d4582a; ">BATA</span> <span class="fs-5" style=" color: #6c6c6c; ">on</span>
                                <img class="d-inline-block" src="<?= base_url("asset/image/transtvlogo.png") ?>" height="15px" alt="" style="width:7rem">
                            </h1>
                        </div>
                        <div class="d-flex justify-content-center p-4 mb-4">
                            <div style="border-radius:10px;overflow: hidden;width: fit-content;display: flex;height: 180px">
                                <iframe class="img-fluid" src="https://www.youtube.com/embed/M-6erT4kwK8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background: linear-gradient(54deg, #9b9fa3 0%, #fefdf9 70%)">
    <div class="container py-5">
        <div class="row d-flex justify-content-center py-5 text-center container-bingkai">
            <div class="text-center justify-content-end py-5">
                <h3 class="fw-bold text-uppercase">Percantik hunian anda dengan <span style="color:#d4582a">aneka produk material kami</span></h3>
            </div>

            <div class="contain-bg-clip">
                <span class="clip-text clip-text1">Bata Expose</span>
                <span class="clip-text clip-text2">Bata Tempel</span>
                <span class="clip-text clip-text3">Roster</span>
                <span class="clip-text clip-text4">Roblock</span>
                <div class="clip clip1">
                    <div class="clip-content">
                        <a href="<?= base_url() ?>">
                            <button class="btn-imgrole">LIHAT PRODUK</button>
                        </a>
                        <p style="font-size: 2vh; text-align: justify; color: #ffffff6e;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sit illum reprehenderit laudantium, accusamus nobis ab voluptas cupiditate voluptatibus architecto ipsum iusto quasi!</p>
                    </div>
                </div>
                <div class="clip clip2">
                    <div class="clip-content">
                        <a href="<?= base_url() ?>">
                            <button class="btn-imgrole">LIHAT PRODUK</button>
                        </a>
                        <p style="font-size: 2vh; text-align: justify; color: #ffffff6e;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sit illum reprehenderit laudantium, accusamus nobis ab voluptas cupiditate voluptatibus architecto ipsum iusto quasi!</p>
                    </div>
                </div>
                <div class="clip clip3">
                    <div class="clip-content">
                        <a href="<?= base_url() ?>">
                            <button class="btn-imgrole">LIHAT PRODUK</button>
                        </a>
                        <p style="font-size: 2vh; text-align: justify; color: #ffffff6e;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sit illum reprehenderit laudantium, accusamus nobis ab voluptas cupiditate voluptatibus architecto ipsum iusto quasi!</p>
                    </div>
                </div>
                <div class="clip clip4">
                    <div class="clip-content">
                        <a href="<?= base_url() ?>">
                            <button class="btn-imgrole">LIHAT PRODUK</button>
                        </a>
                        <p style="font-size: 2vh; text-align: justify; color: #ffffff6e;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi sit illum reprehenderit laudantium, accusamus nobis ab voluptas cupiditate voluptatibus architecto ipsum iusto quasi!</p>
                    </div>
                </div>
            </div>

            <script>
                $().ready(function() {
                    $(".contain-bg-clip .clip").hover(function() {
                            $(this).addClass("clipshow");
                        },
                        function() {
                            $(this).removeClass("clipshow");
                        });

                        $("contain-bg-clip .clip").addClass("cliphide");
                });
            </script>


            <div class="slide-image-using-clip d-block w-md-75 w-sm-100 w-lg-75 mt-5 position-relative">

            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background-image: url('<?= base_url("asset/image/bg-world.svg") ?>')">
    <div class="container">
        <div class="row p-4 p-md-5 p-lg-3 p-sm-5">
            <div class="d-flex flex-column text-center flex-wrap justify-content-center">

                <div class="text-center justify-content-end mb-5 text-white text-uppercase">
                    <h2>Service & Support</h2>
                </div>

                <!-- <div class="containercard">
                    <div class="card">
                        <div class="imgbx">
                            <img src=" <?= base_url("asset/image/delivery-truck-svgrepo-com.svg") ?>" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Free Delivery</h3>
                                <p>Gratis Pengiriman untuk area Jakarta<br>syarat dan ketentuan berlaku</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imgbx">
                            <img src="<?= base_url("asset/image/secure-payment-svgrepo-com.svg") ?>" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h3>100% Secure Payment</h3>
                                <p>Jaminan transaksi yang aman dan terpercaya</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imgbx">
                            <img src="<?= base_url("asset/image/quality-svgrepo-com.svg") ?>" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Quality Quarantee</h3>
                                <p>Kualitas produk yang tidak diragukan lagi</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imgbx">
                            <img src="<?= base_url("asset/image/handshake-deal-svgrepo-com.svg") ?>" alt="">
                        </div>
                        <div class="content">
                            <div>
                                <h3>Big Offers</h3>
                                <p>Banyak benefit yang akan anda dapatkan</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row gy-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src=" <?= base_url("asset/image/appreciation-best-marketing-svgrepo-com.svg") ?>" style="width:50%; filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">Best Service</h4>
                            <span class="fw-light">Pelayanan terbaik dan profesional.</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src=" <?= base_url("asset/image/factory-stock-house-svgrepo-com.svg") ?>" style="width:50%; filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">Biggest Factory</h4>
                            <span class="fw-light">Kami memiliki pabrik sendiri, terlengkap dan terbesar.</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src="<?= base_url("asset/image/numb1.svg") ?>" style="width:50%;filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-4">Pioneer</h4>
                            <span class="fw-light">Pelopor di Indonesia</span>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src="<?= base_url("asset/image/status-good-svgrepo-com.svg") ?>" style="width:50%; filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">Good Quality</h4>
                            <span class="fw-light">Produk kami sudah memiliki standar mutu yang tinggi.</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src="<?= base_url("asset/image/change-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">Custom</h4>
                            <span class="fw-light">Jasa custom roster</span>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src="<?= base_url("asset/image/telemarketer-customer-service-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">Sales Support</h4>
                            <span class="fw-light">Memiliki kontak layanan After Sales</span>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src="<?= base_url("asset/image/brickwall-brick-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">installation service</h4>
                            <span class="fw-light">Jasa pasang profesional</span>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="img-fluid rounded-3 p-3 py-5 text-white h-100" style="background-color: #6e492f99;">
                            <img src="<?= base_url("asset/image/delivery-truck-svgrepo-com.svg") ?>" style="width:50%;  filter: invert(90%) drop-shadow(-1px -1px 4px rgb(189 118 88 / 40%));" alt="">
                            <h4 class="mt-2">fast delivery</h4>
                            <span class="fw-light">Pengiriman aman, cepat dan terpercaya</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5" style="background: linear-gradient(180deg, rgba(237,237,237,1) 0%, #fefdf9 70%);background-image:url('<?= base_url("asset/image/bg-light-1.svg") ?>');background-size: cover;">
    <div class="container py-5">
        <div class="row py-5">
            <div class="text-center justify-content-end mb-5 text-uppercase fw-bold">
                <h1 class="fw-bold">Our <span style="color:#d4582a">Client</span></h1>
            </div>
            <div class="row justify-content-center ms-auto me-auto">
                <div class="client">
                    <?php foreach ($WebClientLogo as $row) : ?>
                        <div class="col">
                            <div class="box-client mb-5 shadow-sm">
                                <img class="img-fluid" src="<?= base_url() ?>/asset/image/logoClient/<?= $row["WebCilentLogo"] ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <script>
                $(document).ready(function() {

                    // my slick slider options
                    var options = {
                        autoplay: true,
                        autoplaySpeed: 2000,
                        infinite: true,
                        rows: 2,
                        slidesToShow: 6,
                        slidesToScroll: 6,
                        adaptiveHeight: true,
                        dots: true,
                        responsive: [{
                                breakpoint: 1440,
                                settings: {
                                    slidesToShow: 6,
                                    slidesToScroll: 6,
                                    dots: true,
                                }
                            },
                            {
                                breakpoint: 1200,
                                settings: {
                                    slidesToShow: 5,
                                    slidesToScroll: 5,
                                    dots: false,
                                }
                            },
                            {
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                    dots: false,
                                }
                            },
                            {
                                breakpoint: 576,
                                rows: 1,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    dots: false,
                                }
                            }
                        ]
                    };


                    // my slick slider as constant object
                    const mySlider = $('.client').on('init', function(slick) {

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
                    gsap.registerPlugin(TextPlugin);
                    const tl = gsap.timeline({
                        repeat: -1,
                        repeatDelay: 4,
                    });
                    tl.from(".text-kata-mereka", {
                        duration: 4,
                        text: ""
                    })
                });
            </script>
        </div>
    </div>
</div>