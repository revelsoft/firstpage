<?PHP 
require_once('models/HomeSlideModel.php');    
$home_slide_model = new HomeSlideModel;   
$home_slide = $home_slide_model->getHomeSlideBy(); 
?>
<section class="slide">
    <?PHP for($i=0;$i<count($home_slide );$i++){ ?>
            <img src="img_upload/home_slide/<?PHP echo $home_slide[$i]['home_slide_img'];?>" > 
    <?PHP } ?> 
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