<?php 
    $slider_id = rand(0,999999);
?>
<div class="slider-block linear dark">
    <div class="inner">
        <div class="heading"><?php echo $block['heading'];?></div>
        <div class="description"><?php echo $block['description'];?></div>
        <div class="slider-wrap slider-linear-<?php echo $slider_id; ?>">
            <?php foreach($block['slides']as $slide){
                ?>
                <div class="slide-item ">
                    <div class="image-wrap">
                        <img src="<?php echo $slide['image']['url']?>" alt="">
                    </div>
                    <div class="slide-description">
                        <?php echo $slide['description']; ?>
                    </div>
                </div>
                <?php 
            }?>
        </div>
    </div>
</div>
<script>
jQuery('.slider-linear-<?php echo $slider_id; ?>').slick({
    slidesToShow:5,
    arrows:false,
    dots:false,
    cssEase:'linear',
    autoplay:true,
    infinite:true,
    autoplaySpeed:0,
    speed:2500,
    pauseOnHover:false,
    pauseOnFocus:false,
});
</script>