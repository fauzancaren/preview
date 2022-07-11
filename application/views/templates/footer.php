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

<div class="footer-C.newsletter py-5">
    <div class="d-flex m-auto footer-newsletter" style="height: 400px;">
        <div class="col-5 m-auto text-center">
            <h1 class="footer-h1">Art To Comming From Owr Heart</h1>
        </div>
        <div class="col-3 m-auto" style="color: white; padding: 10px;">
            <h3 class="fw-normal" style="font-size: 2rem; color: #ffffffa6;">Our Newsletter</h3>
            <p class="fw-light" style="font-size: 1.4rem; color: white;">Subscribe to our newsletter to get update about our grand offers.</p>


            <div class="input-group mb-3 mt-5" style="filter: drop-shadow(5px 5px 3px rgba(0,0,0,1.3));">
                <input type="text" class="form-control rounded-0" style="background: none; border: 1px solid white; color: white; height: 50px;" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn rounded-0 fw-normal px-4" style="font-size: small; color: white; border: 1px solid white;" type="button" id="button-addon2">Send <i class="fas fa-paper-plane ml-2"></i></button>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row row-cols-1">
        <div class="col py-4 px-2" style=" background: #000000b0; color: #ffffffc7; ">
            <div class="d-flex gap-3 justify-content-end" style="margin-right: 2%;">
            <small class="align-self-center">&reg;2022 PT. Global Cakra Buana Group. All Right Reserved.</small>
                <i class=" py-2  fs-2 fab fa-facebook"></i>
                <i class=" py-2  fs-2 fab fa-instagram"></i>
                <i class=" py-2  fs-2 fab fa-twitter"></i>
                <i class=" py-2  fs-2 fab fa-tiktok"></i>
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