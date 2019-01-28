<section class="slide">
    <img src="img_upload/slide/1.jpg" alt="Los Angeles">
    <img src="img_upload/slide/1.jpg" alt="Chicago">
    <img src="img_upload/slide/1.jpg" alt="New York">
</section>

<script type="text/javascript">
    $(document).on('ready', function() {
        $(".slide").slick({
            arrows: false,
            dots: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 5000,
        });
    });
</script>