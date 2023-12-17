<div class="brokers-block">
    <div class="inner">
        <div class="heading"><?php echo $block['heading']; ?></div>
        <div class="description"><?php echo $block['description']; ?></div>
        <div class="brokers-wrap">
            <?php foreach($block['brokers_class'] as $broker_col){?>
                <div class="broker-col">
                    <div class="broker-class">
                        <?php echo $broker_col['broker_class_name']; ?>
                    </div>
                    <div class="brokers-list">
                        <?php foreach($broker_col['brokers'] as $broker){?>
                            <div class="broker-item">
                                <div class="broker-header">
                                    <div class="broker-logo">
                                        <img src="<?php echo $broker['logo']['url']?>" alt="">
                                    </div>
                                    <div class="broker-name">
                                        <?php echo $broker['name'];?>
                                        <div class="arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                                                <path d="M1 1L9 9L1 17" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="broker-body">
                                    <div class="broker-body-inner">
                                        <?php echo $broker['information']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<!-- <script>
    jQuery('.brokers-list .broker-item').click(function(){
        if(jQuery(this).hasClass('active')){
            jQuery(this).find('.broker-body').slideUp();
            jQuery(this).removeClass('active');
        }else{
            jQuery(this).addClass('active');
            jQuery(this).find('.broker-body').slideDown();
        }
    })

    $(".brokers-wrap").slick({
        dots: true,
        arrows: false,
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
            breakpoint: 991,
            settings: {
                slidesToShow: 2.5,
                slidesToScroll: 1,
                infinite: false,
            }
            },
            {
            breakpoint: 767,
            settings: {
                slidesToShow: 1.8,
                slidesToScroll: 1,
                infinite: false,
            }
            },
            {
            breakpoint: 576,
            settings: {
                slidesToShow: 1.4,
                slidesToScroll: 1,
                infinite: false,
            }
            }
        ]
    })
</script> -->