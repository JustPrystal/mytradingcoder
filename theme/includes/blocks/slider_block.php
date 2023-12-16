<div class="slider-block" id="services">
    <div class="inner">
        <div class="heading"><?php echo $block['heading'];?></div>
        <div class="description"><?php echo $block['description'];?></div>
        <div class="slider-wrap regular">
            <?php foreach($block['slides']as $slide){
                ?>
                <div class="slide-item">
                    <div class="image-wrap">
                        <img class="<?php echo $slide['animation_type']; ?>" src="<?php echo $slide['image']['url']?>" alt="">
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
    $(".slider-wrap.regular").slick({
        dots: true,
        responsive: [
            {
            breakpoint: 9999,
            settings: "unslick"
            },
            {
            breakpoint: 1280,
            settings: {
                slidesToShow: 3.5,
                slidesToScroll: 1,
                infinite: false,
            }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 2.5,
                slidesToScroll: 1,
                infinite: false,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 2.1,
                slidesToScroll: 1,
                infinite: false,
            }
            }
        ]
    })
</script>