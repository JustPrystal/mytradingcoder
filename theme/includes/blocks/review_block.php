<div class="reviews-block" id="reviews">
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
                        $stars = get_field('stars', $review->ID);
                        ?>
                        <div class="review-item">
                            <div class="review-top">
                                <div class="title"><?php echo $review->post_title; ?></div>
                                <div class="description"><?php echo $description; ?></div>
                                <div class="read-more">Read More</div>
                            </div>
                            <div class="review-bottom">
                                <div class="client-details">
                                    <div class="stars" value="<?php echo $stars?>">
                                        <?php for ($i=0; $i < 5; $i++) { 
                                            if($i <= $stars) { ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                                    <path d="M4.73792 11.129L6.91667 9.81479L9.09542 11.1462L8.52479 8.65625L10.4442 6.99625L7.91958 6.77146L6.91667 4.41979L5.91375 6.75417L3.38917 6.97896L5.30854 8.65625L4.73792 11.129ZM2.64563 14.0167L3.76958 9.15771L0 5.88958L4.98 5.45729L6.91667 0.875L8.85333 5.45729L13.8333 5.88958L10.0638 9.15771L11.1877 14.0167L6.91667 11.4402L2.64563 14.0167Z" fill="#F99C4C"/>
                                                    <path d="M7.95312 6.75384L6.91563 4.33301L5.87812 6.06217H4.84063L2.76562 6.40801L3.80313 8.13717L4.84063 9.17467L4.49479 11.5955L6.22396 10.9038H7.60729L9.33646 11.2497L8.99062 8.82884L11.0656 6.75384H7.95312Z" fill="#F99C4C"/>
                                                </svg>
                                            <?php } else { ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                                    <path d="M4.73792 11.129L6.91667 9.81479L9.09542 11.1462L8.52479 8.65625L10.4442 6.99625L7.91958 6.77146L6.91667 4.41979L5.91375 6.75417L3.38917 6.97896L5.30854 8.65625L4.73792 11.129ZM2.64563 14.0167L3.76958 9.15771L0 5.88958L4.98 5.45729L6.91667 0.875L8.85333 5.45729L13.8333 5.88958L10.0638 9.15771L11.1877 14.0167L6.91667 11.4402L2.64563 14.0167Z" fill="#F99C4C"/>
                                                </svg>
                                        <?php }
                                        } ?>
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
<div class="review-popup" id="review-popup">
    <div class="wrap">
        <div class="close-popup">
            <svg fill="#ffffff" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.8,16l5.5-5.5c0.8-0.8,0.8-2,0-2.8l0,0C24,7.3,23.5,7,23,7c-0.5,0-1,0.2-1.4,0.6L16,13.2l-5.5-5.5 c-0.8-0.8-2.1-0.8-2.8,0C7.3,8,7,8.5,7,9.1s0.2,1,0.6,1.4l5.5,5.5l-5.5,5.5C7.3,21.9,7,22.4,7,23c0,0.5,0.2,1,0.6,1.4 C8,24.8,8.5,25,9,25c0.5,0,1-0.2,1.4-0.6l5.5-5.5l5.5,5.5c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L18.8,16z"></path> </g></svg>
        </div>
        <div class="description"></div>
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