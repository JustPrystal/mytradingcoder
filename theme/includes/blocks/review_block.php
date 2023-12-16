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
            <svg width="64px" height="64px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z" fill="#ffffff"></path> </g></svg>        </div>
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