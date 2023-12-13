<div class="reviews-block">
    <div class="inner">
        <div class="sub-heading"><?php echo $block['sub-heading']; ?></div>
        <div class="heading"><?php echo $block['heading']; ?></div>
        <div class="reviews-slider">
        <?php 
                $posts_per_page = 7;
                $args = [
                    'post_type' => 'reviews',
                    'orderby'   => 'date',
                    'order'     => 'DESC',
                    'posts_per_page' => $posts_per_page,
                ];
                $query = new WP_Query($args);
                if($query->have_posts()){
                    $reviews = $query->get_posts();
                    foreach($reviews as $review){
                        $description = get_field('description', $review->ID);
                        $name = get_field('client_name', $review->ID);
                        $date = get_field('date_published', $review->ID);
                        $platform = get_field('platform', $review->ID);
                        $broker = get_field('broker_logo', $review->ID);
                        ?>
                        <div class="review-item">
                            <div class="review-top">
                                <div class="title"><?php echo $review->post_title; ?></div>
                                <div class="description"><?php echo $description; ?></div>
                            </div>
                            <div class="review-bottom">
                                <div class="client-details">
                                    <div class="stars">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="14" viewBox="0 0 90 14" fill="none">
                                            <path d="M40.7841 13.8295L41.9669 8.71624L38 5.27705L43.2407 4.82214L45.2787 0L47.3167 4.82214L52.5574 5.27705L48.5905 8.71624L49.7733 13.8295L45.2787 11.1182L40.7841 13.8295Z" fill="#F99C4C"/>
                                            <path d="M58.7841 13.8295L59.9669 8.71624L56 5.27705L61.2407 4.82214L63.2787 0L65.3167 4.82214L70.5574 5.27705L66.5905 8.71624L67.7733 13.8295L63.2787 11.1182L58.7841 13.8295Z" fill="#F99C4C"/>
                                            <path d="M77.7841 13.8295L78.9669 8.71624L75 5.27705L80.2407 4.82214L82.2787 0L84.3167 4.82214L89.5574 5.27705L85.5905 8.71624L86.7733 13.8295L82.2787 11.1182L77.7841 13.8295Z" fill="#F99C4C"/>
                                            <path d="M21.7841 13.8295L22.9669 8.71624L19 5.27705L24.2407 4.82214L26.2787 0L28.3167 4.82214L33.5574 5.27705L29.5905 8.71624L30.7733 13.8295L26.2787 11.1182L21.7841 13.8295Z" fill="#F99C4C"/>
                                            <path d="M2.7841 13.8295L3.96689 8.71624L0 5.27705L5.24066 4.82214L7.2787 0L9.31673 4.82214L14.5574 5.27705L10.5905 8.71624L11.7733 13.8295L7.2787 11.1182L2.7841 13.8295Z" fill="#F99C4C"/>
                                        </svg>
                                    </div>
                                    <div class="published-date"><?php echo $date;?></div>
                                    <div class="client-name"><?php echo $name;?></div>
                                    <div class="platform-logo">
                                        <img src="<?php echo $platform['url']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="broker-details">
                                    <div class="image-wrap">
                                        <img src="<?php echo $broker['url']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
        <div class="button-wrap">
            <a href="<?php echo $block['button']['url']; ?>" target="<?php echo $block['button']['target']?>"><?php echo $block['button']['title']; ?></a>
        </div>
    </div>
</div>
<script>
    jQuery('.reviews-slider').slick({
        slidesToShow:3,
        centerMode:true,
        slidesToScroll:1,
        centerPadding:'15%',
        autoplay:true,
        infinite:true,
        arrows:false,
        dots:false,
        pauseOnFocus:false,
        pauseOnHover:false,
        responsive: [
            {
            breakpoint: 1280,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 991,
            settings: {
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                dots: true,
                slidesToShow: 1,
                centerPadding:'10%',
            }
            }
        ]
    })
</script>