<div style="background: linear-gradient(180deg, rgba(237,237,237,1) 0%, #fefdf9 70%); padding: 50px;">
    <div class="container">
        <div class="row flex-column text-center justify-content-end" style="height: 100px;">
            <h4 class="fw-normal fs-2" style="font-family: lora, serif;">Our Locations</h4>
        </div>

        <div class="d-flex flex-column justify-content-center p-4 mt-4 align-items-center">

            <div class="contact row row-cols-1 justify-content-center row-cols-md-2 py-4 p-1 shadow shadow-sm mb-5">
                <div class="row col-md-5 mb-2">
                    <img class="img-fluid" src="<?= base_url('asset/image/obpp.jpg') ?>" alt="image">

                </div>
                <div class="row col-md-7 p-2">
                    <div class="d-flex flex-column">
                        <h4>Omahbata Pondok Pinang</h4>
                        <p>Jl. Ciputat Raya No.59, RT.5/RW.2, Pondok Pinang, Kebayoran Lama, South Jakarta City, Jakarta 12310</p>
                        <div class="">
                            <?php
                            // sediakan nohp target
                            $nohp = hp('08128201414');
                            // atur pesan dengan helper text urlencode
                            $message = '&text=' . urlencode('Halo omahbata');
                            // cek user_agent / device yang digunakan user
                            // kalau mobil maka pakai api.whatsapp.com
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
                            ?>
                            <a style="text-decoration: none; color: black;" target="_blank" href="<?= $linkWA ?>">
                                <i class="fab fa-whatsapp fa-lg mb-5"></i> 0812-8201-414
                            </a>
                        </div>
                        <a class="d-flex justify-content-end" style="text-decoration: none;" href="http://maps.google.com/?q=1200 Omahbata - Toko Bata Expose , Toko Bata Tempel"><button class="d-flex gap-2 btn tombol btn-lg rounded-0 px-5 py-3">Maps <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="contact row row-cols-1 justify-content-center row-cols-md-2 py-4 p-1 shadow shadow-sm mb-5">
                <div class="row col-md-5 mb-2">
                    <img class="img-fluid" src="<?= base_url('asset/image/grai/tokorosterBSD.jpg') ?>" alt="image">

                </div>
                <div class="row col-md-7 p-2">
                    <div class="d-flex flex-column">
                        <h4>Toko Roster BSD</h4>
                        <p>Jl. Raya Ciater No.185 E Kampung Maruga Rt 004/09 Kelurahan Ciater, Kecamatan Serpong, Tangerang Selatan</p>
                        <div class="">
                            <?php
                            // sediakan nohp target
                            $nohp = hp('081213481313');
                            // atur pesan dengan helper text urlencode
                            $message = '&text=' . urlencode('Halo omahbata');
                            // cek user_agent / device yang digunakan user
                            // kalau mobil maka pakai api.whatsapp.com
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
                            ?>
                            <a style="text-decoration: none; color: black;" target="_blank" href="<?= $linkWA ?>">
                                <i class="fab fa-whatsapp fa-lg mb-5"></i> 0812-1348-1313
                            </a>
                        </div>
                        <a class="d-flex justify-content-end" style="text-decoration: none;" href="http://maps.google.com/?q=1200 Toko Roster BSD - Jual Lubang Angin - Jual Roster Custom - Pabrik Roster - Toko Roster Serpong"><button class="d-flex gap-2 btn tombol btn-lg rounded-0 px-5 py-3">Maps <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="contact row row-cols-1 justify-content-center row-cols-md-2 py-4 p-1 shadow shadow-sm mb-5">
                <div class="row col-md-5 mb-2">
                    <img class="img-fluid" src="<?= base_url('asset/image/grai/tokorosterBSD.jpg') ?>" alt="image">

                </div>
                <div class="row col-md-7 p-2">
                    <div class="d-flex flex-column">
                        <h4>Pabrik Roster Bogor</h4>
                        <p>Jl. Raya Jakarta-Bogor No.KM.28, RT. 001/RW.No.5, Pekayon, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Inukota Jakarta 13710</p>
                        <div class="">
                            <?php
                            // sediakan nohp target
                            $nohp = hp('081312348313');
                            // atur pesan dengan helper text urlencode
                            $message = '&text=' . urlencode('Halo omahbata');
                            // cek user_agent / device yang digunakan user
                            // kalau mobil maka pakai api.whatsapp.com
                            if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
                            // tapi kalau desktop pakai web.whatsapp.com
                            else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
                            ?>
                            <a style="text-decoration: none; color: black;" target="_blank" href="<?= $linkWA ?>">
                                <i class="fab fa-whatsapp fa-lg mb-5"></i> 0813-1234-8313
                            </a>
                        </div>
                        <a class="d-flex justify-content-end" style="text-decoration: none;" href="http://maps.google.com/?q=1200 PABRIK ROSTER - Pabrik Roster, Lubang Angin, Toko Roster, Jual Bata Tempel, Jual Bata Expose"><button class="d-flex gap-2 btn tombol btn-lg rounded-0 px-5 py-3">Maps <i class="fas fa-arrow-right"></i></button></a>
                    </div>
                </div>
            </div>

            <!-- <div class="d-flex align-items-center contact" data-aos="fade-left">
                <div class="col-4">
                    <img class="img-fluid" src="<?= base_url('asset/image/obpp.jpg') ?>" alt="image">

                </div>
                <div class="col-8 p-2">
                    <div class="div">
                        <h4>Omahbata Pondok Pinang</h4>
                        <p>Jl. Ciputat Raya No.59, RT.5/RW.2, Pondok Pinang, Kebayoran Lama, South Jakarta City, Jakarta 12310</p>
                        <i class="fab fa-whatsapp fa-lg"></i> 0812-8201-414
                    </div>
                </div>
                <div class="row" style="margin-top: 250px; margin-left: -110px;">

                    <a href="http://maps.google.com/?q=1200 Omahbata - Toko Bata Expose , Toko Bata Tempel"><button class="d-flex gap-2 btn tombol btn-lg rounded-0 px-5 py-3">Maps <i class="fas fa-arrow-right"></i></button></a>
                </div>
            </div>

            <div class="d-flex align-items-center contact" data-aos="fade-right">
                <div class="col-4 p-3">
                    <img class="img-fluid" src="<?= base_url('asset/image/grai/tokorosterBSD.jpg') ?>" alt="image">

                </div>
                <div class="col-8 p-2">
                    <div class="div">
                        <h4>Toko Roster BSD</h4>
                        <p>Jl. Raya Ciater No.185 E Kampung Maruga Rt 004/09 Kelurahan Ciater, Kecamatan Serpong, Tangerang Selatan</p>
                        <i class="fab fa-whatsapp fa-lg"></i> 0812-1348-1313
                    </div>
                </div>
                <div class="row" style="margin-top: 250px; margin-left: -110px;">
                    <a href="http://maps.google.com/?q=1200 Toko Roster BSD - Jual Lubang Angin - Jual Roster Custom - Pabrik Roster - Toko Roster Serpong"><button class="d-flex gap-2 btn tombol btn-lg rounded-0 px-5 py-3">Maps <i class="fas fa-arrow-right"></i></button></a>
                </div>
            </div>

            <div class="d-flex align-items-center contact" data-aos="fade-left">
                <div class="col-4 p-3">
                    <img class="img-fluid" src="<?= base_url('asset/image/pr.jpg') ?>" alt="image">

                </div>
                <div class="col-8 p-2">
                    <div class="div">
                        <h4>Pabrik Roster Bogor</h4>
                        <p>Jl. Raya Jakarta-Bogor No.KM.28, RT. 001/RW.No.5, Pekayon, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Inukota Jakarta 13710</p>
                        <i class="fab fa-whatsapp fa-lg"></i> 0813-1234-8313
                    </div>
                </div>
                <div class="row" style="margin-top: 250px; margin-left: -110px;">
                    <a href="http://maps.google.com/?q=1200 PABRIK ROSTER - Pabrik Roster, Lubang Angin, Toko Roster, Jual Bata Tempel, Jual Bata Expose"><button class="d-flex gap-2 btn tombol btn-lg rounded-0 px-5 py-3">Maps <i class="fas fa-arrow-right"></i></button></a>
                </div>
            </div> -->

        </div>
    </div>
</div>