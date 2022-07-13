</div>
<script>
    $('.lazy').Lazy({
        // your configuration goes here
        // scrollDirection: 'vertical',
        effect: 'fadeIn',
        effectTime: '1s',
        visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
    });

    $(".lazy").Lazy({
        beforeLoad: function(element) {
            console.log('before');
        },
        afterLoad: function(element) {
            console.log('after');
        },
        onError: function(element) {
            console.log('error');
        },
        onFinishedAll: function() {
            console.log('finish');
        }
    });
</script>

<!-- <div class="py-5" style="background: linear-gradient(180deg, rgba(237,237,237,1) 0%, #fefdf9 70%);background-image:url('<?= base_url("asset/image/Moon.svg") ?>');background-size: cover;"">
    <div class=" container ">
        <div class=" row">
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
</div> -->

<div class="footer-C-newsletter py-5">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gy-5 m-auto">
        <div class="col-lg-3" style="color: #ffffffa6;">
            <h4 style="padding-left: 1rem; border-left: 3px solid #ffffffa6;">Follow Us</h4>
            <ul style="display: flex; padding: 0; margin-top: 2rem;">
               <li class="li-footer" style="list-style: none; width: 50px; color: #ffffffa6;"><a style="text-decoration: none; color: #ffffffa6;" href="#"><i class="fs-1 fab fa-facebook"></i></a></li>
               <li class="li-footer" style="list-style: none; width: 50px; color: #ffffffa6;"><a style="text-decoration: none; color: #ffffffa6;" href="#"><i class="fs-1 fab fa-instagram"></i></a></li>
               <li class="li-footer" style="list-style: none; width: 50px; color: #ffffffa6;"><a style="text-decoration: none; color: #ffffffa6;" href="#"><i class="fs-1 fab fa-twitter"></a></i></li>
               <li class="li-footer" style="list-style: none; width: 50px; color: #ffffffa6;"><a style="text-decoration: none; color: #ffffffa6;" href="#"><i class="fs-1 fab fa-tiktok"></i></a></li>
            </ul>
        </div>
        <div class="col-lg-3" style="color: #ffffffa6;">
        <h4 style="padding-left: 1rem; border-left: 3px solid #ffffffa6;">Jam Oprasional</h4>
        <div class="mt-4 fs-5">
            <small>Senin-Jumat : 08.00 sd 17.00</small>
        </div>
        <div class="mt-2 fs-5">
            <small>Sabtu : 09.00 sd 16.00</small>
        </div>
            
        </div>
        <div class="col-md-12 col-lg-6 px-lg-5" style="color: #ffffffa6;">
            <h4 class="fw-normal" style="padding-left: 1rem; border-left: 3px solid #ffffffa6; color: #ffffffa6;">Our Newsletter</h4>
            <p class="fw-light pt-3" style="font-size: 1rem; color: white;">Subscribe to our newsletter to get update about our grand offers.</p>


            <div class="input-group mb-3 mt-5" style="filter: drop-shadow(5px 5px 3px rgba(0,0,0,1.3));">
                <input type="text" class="form-control rounded-0" style="background: none; border: 1px solid #ffffffa6; color: #ffffffa6; height: 50px;" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn rounded-0 fw-normal px-4" style="font-size: small; color: white; border: 1px solid #ffffffa6;" type="button" id="button-addon2">Send <i class="fas fa-paper-plane ml-2"></i></button>
            </div>

        </div>
    </div>
</div>
</div>

<div class="container-fluid">
    <div class="row row-cols-1">
        <div class="col py-4 px-2" style=" background: #000000b0; color: #ffffffc7; ">
            <div class="d-flex gap-3 justify-content-center">
                <small class="align-self-center">&reg;2022 PT. Global Cakra Buana Group. All Right Reserved.</small>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid" style="background-color: #fefdf9;">
    <div class="row text-center p-3">
        <small>&reg;2022 PT. Global Cakra Buana Group. All Right Reserved.</small>
    </div>
</div> -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        delay: 200,
        duration: 1000,
    });
</script>
</body>

</html>