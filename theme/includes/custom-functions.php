<?php 

    add_action('wp_ajax_load_more_reviews', 'load_more_reviews_callback');
    add_action('wp_ajax_nopriv_load_more_reviews', 'load_more_reviews_callback');

    function load_more_reviews_callback(){
        $max_pages = $_REQUEST['maxpages'];
        $page_count = $_REQUEST['pagecount'];
        $posts_per_page = $_REQUEST['postperpage'];

        if($max_pages === $page_count){
            wp_send_json_error(array('type' => 'error', 'message' => 'no more posts'), 400);
        }
        $offset = $page_count * $posts_per_page;

        ob_start();
        $args = [
            'post_type' => 'reviews',
            'orderby'   => 'date',
            'offset'    => $offset,
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
                        <div class="read-more">Read More</div>
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

        $html = ob_get_clean();
        $output = array(
            'type' => 'success',
            'message' => 'loaded more posts successfully',
            'posts' => $html,
        );
        wp_send_json_success($output, 200);
    }

    function cptui_register_my_cpts() {

        /**
         * Post Type: Reviews.
         */
    
        $labels = [
            "name" => esc_html__( "Reviews", "custom-post-type-ui" ),
            "singular_name" => esc_html__( "Review", "custom-post-type-ui" ),
        ];
    
        $args = [
            "label" => esc_html__( "Reviews", "custom-post-type-ui" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "reviews", "with_front" => true ],
            "query_var" => true,
            "menu_icon" => "dashicons-admin-users",
            "supports" => [ "title" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "reviews", $args );
    
        /**
         * Post Type: Blogs.
         */
    
        $labels = [
            "name" => esc_html__( "Blogs", "custom-post-type-ui" ),
            "singular_name" => esc_html__( "blog", "custom-post-type-ui" ),
        ];
    
        $args = [
            "label" => esc_html__( "Blogs", "custom-post-type-ui" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => "blogs",
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => false,
            "can_export" => false,
            "rewrite" => [ "slug" => "blog", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
            "taxonomies" => [ "category" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "blog", $args );
    }
    
    add_action( 'init', 'cptui_register_my_cpts' );
    
?>