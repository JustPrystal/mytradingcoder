<?php get_header();?>
<div class="review-popup" id="review-popup">
    <div class="wrap">
        <div class="close-popup">
            <svg width="64px" height="64px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6.96967 16.4697C6.67678 16.7626 6.67678 17.2374 6.96967 17.5303C7.26256 17.8232 7.73744 17.8232 8.03033 17.5303L6.96967 16.4697ZM13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697L13.0303 12.5303ZM11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303L11.9697 11.4697ZM18.0303 7.53033C18.3232 7.23744 18.3232 6.76256 18.0303 6.46967C17.7374 6.17678 17.2626 6.17678 16.9697 6.46967L18.0303 7.53033ZM13.0303 11.4697C12.7374 11.1768 12.2626 11.1768 11.9697 11.4697C11.6768 11.7626 11.6768 12.2374 11.9697 12.5303L13.0303 11.4697ZM16.9697 17.5303C17.2626 17.8232 17.7374 17.8232 18.0303 17.5303C18.3232 17.2374 18.3232 16.7626 18.0303 16.4697L16.9697 17.5303ZM11.9697 12.5303C12.2626 12.8232 12.7374 12.8232 13.0303 12.5303C13.3232 12.2374 13.3232 11.7626 13.0303 11.4697L11.9697 12.5303ZM8.03033 6.46967C7.73744 6.17678 7.26256 6.17678 6.96967 6.46967C6.67678 6.76256 6.67678 7.23744 6.96967 7.53033L8.03033 6.46967ZM8.03033 17.5303L13.0303 12.5303L11.9697 11.4697L6.96967 16.4697L8.03033 17.5303ZM13.0303 12.5303L18.0303 7.53033L16.9697 6.46967L11.9697 11.4697L13.0303 12.5303ZM11.9697 12.5303L16.9697 17.5303L18.0303 16.4697L13.0303 11.4697L11.9697 12.5303ZM13.0303 11.4697L8.03033 6.46967L6.96967 7.53033L11.9697 12.5303L13.0303 11.4697Z" fill="#ffffff"></path> </g></svg>        </div>
        <div class="description"></div>
    </div>
</div>
<div class="reviews-template">
    <div class="inner">
        <div class="breadcrumbs">
            <a href="<?php echo get_site_url();?>" class="breadcrumb-item"> Home ></a>
            <a class="breadcrumb-item active"> Reviews > </a>
        </div>
        <div class="sub-heading">REVIEWS</div>
        <div class="heading">What clients say about me</div>
        <div class="reviews-wrap">
            <?php 
                $posts_per_page = 6;
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
                                <div class="read-more">Expand</div>
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
        <?php if($query->have_posts() && $query->max_num_pages > 1){
            ?>
            <div class="button-wrap">
                <a id="loadMoreReviews" data-max="<?php echo $query->max_num_pages; ?>" data-page="1" data-perpage="<?php echo $posts_per_page; ?>">Load More</a>
            </div>
            <?php
        }?>
    </div>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery(document.body).on('click', '#loadMoreReviews', function(){
            var that = jQuery(this);
            var max = that.data('max');
            var pageCount = that.data('page');
            var postCountPerPage = that.data('perpage');
            that.addClass('loading').prop("disabled", true);;
            jQuery.ajax({
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                type:"POST",
                data:{
                    action: "load_more_reviews",
                    maxpages : max,
                    pagecount : pageCount,
                    postperpage : postCountPerPage,
                },
                success: function(response){
                   
                    if(response.data.type == 'success'){
                        jQuery('.reviews-template .reviews-wrap').append(response.data.posts);
                        pageCount = pageCount + 1;
                        that.removeClass('loading').prop("disabled", false);
                        that.data('page', pageCount);
                        if(pageCount == max){
                            that.prop("disabled", true);
                        }
                    }
                    else{
                        that.removeClass('loading').prop("disabled", false);;
                        alert(response.data.message);
                    }
                   
                },  
                error: function(response){
                    console.log(response);
                    that.removeClass('loading').attr('disabled', 'false');
                }
            })
        })
    });
</script>
<?php get_footer();?>

