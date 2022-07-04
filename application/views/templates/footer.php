<script>
     $('.lazy').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
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
</div>
<div class="container-fluid" style="background-color: #fefdf9;">
    <div class="row text-center p-3">
        <small>&reg;2022 PT. Global Cakra Buana Group. All Right Reserved.</small>
    </div>
</div>

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