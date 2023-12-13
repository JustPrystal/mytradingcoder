<?php get_header();?>

<div class="blog-template">
    <div class="inner">
        <a href="/home" class="back-to-home">&#60; Back to home</a>
        <div class="heading">Blogs</div>
        <div class="description">"Unlocking the World of Trade and Code. Stay Ahead with Our Insights. Explore our blog for expert perspectives, cutting-edge trends, and valuable resources in the realms of trading strategies, coding techniques, and technology innovations.</div>
        <div class="blogs-wrap">
            <?php 
                $posts_per_page = -1;
                $args = [
                    'post_type' => 'blog',
                    'orderby'   => 'date',
                    'order'     => 'DESC',
                    'posts_per_page' => $posts_per_page,
                ];
                $query = new WP_Query($args);
                if($query->have_posts()){
                    $blogs = $query->get_posts();
                    foreach($blogs as $blog){
                        $url = wp_get_attachment_image_url( get_post_thumbnail_id($blog->ID), 'large' );
                        ?>
                        <div class="blog-item">
                            <div class="image-wrap">
                                <img src="<?php echo $url?>" alt="">
                            </div>
                            <div class="content-wrap">
                                <div class="categories">
                                    <?
                                        $categories = get_the_category($blog->ID);
                                        foreach($categories as $category){
                                            ?>
                                            <span><?php echo $category->name; ?></span>
                                            <?php 
                                        }
                                    ?>
                                </div>
                                <div class="title">
                                    <?php echo $blog->post_title; ?>
                                </div>
                                <div class="short-description">
                                    <?php echo $blog->post_excerpt; ?>
                                </div>
                                <div class="button-wrap">
                                    <a href="<?php echo get_the_permalink($blog->ID);?>">Read More 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9603 11.1419C15.18 11.3615 15.18 11.7176 14.9603 11.9373L9.22541 17.6722C9.00573 17.8918 8.64963 17.8918 8.42996 17.6722L8.16476 17.407C7.94508 17.1873 7.94508 16.8312 8.16476 16.6115L13.2367 11.5396L8.16476 6.46763C7.94508 6.24795 7.94508 5.89185 8.16476 5.67218L8.42996 5.40698C8.64963 5.1873 9.00573 5.1873 9.22541 5.40698L14.9603 11.1419Z" fill="#682FCC"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                }
            ?>
        </div>
       
    </div>
</div>

<?php get_footer();?>

