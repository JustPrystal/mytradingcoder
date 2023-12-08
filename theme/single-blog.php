<?php 
    global $post;
    get_header();
?>

<div class="single-blog-template">
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <a href="<?php echo get_site_url();?>" class="breadcrumb-item"> Home ></a>
            <a class="breadcrumb-item active"> Blogs > </a>
        </div>
    </div>
    <div class="inner">
       
        <div class="author-info">
            <div class="image-col">
                <img src="<?php echo get_field('photo', 'user_'.$post->post_author)['url']; ?>" alt="">
            </div>
            <div class="text-col">
                <div class="author-name"><?php echo get_user_by('ID', $post->post_author)->nickname; ?></div>
                <div class="post-date">Posted on <?php echo date('j F Y', strtotime($post->post_date));?></div>
            </div>
        </div>
        <h1 class="heading"><?php the_title();?></h1>
        <div class="categories">
            <?
                $categories = get_the_category($post->ID);
                foreach($categories as $category){
                    ?>
                    <span><?php echo $category->name; ?></span>
                    <?php 
                }
            ?>
        </div>
        <div class="featured-image">
            <?php 
                $url = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full' );
            ?>
            <img src="<?php echo $url; ?>" alt="">
        </div>
        <div class="content">
            <?php the_content();?>
        </div>
    </div>
</div>
<?php if(get_field('recommended_articles')){?>
    <div class="recommended-articles">
        <div class="inner">
            <div class="heading">Continue Reading</div>
            <div class="blogs-wrap">
                <?php foreach(get_field('recommended_articles') as $blog){
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
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9603 11.1419C15.18 11.3615 15.18 11.7176 14.9603 11.9373L9.22541 17.6722C9.00573 17.8918 8.64963 17.8918 8.42996 17.6722L8.16476 17.407C7.94508 17.1873 7.94508 16.8312 8.16476 16.6115L13.2367 11.5396L8.16476 6.46763C7.94508 6.24795 7.94508 5.89185 8.16476 5.67218L8.42996 5.40698C8.64963 5.1873 9.00573 5.1873 9.22541 5.40698L14.9603 11.1419Z" fill="#000000"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php 
                }?>
            </div>
        </div>
    </div>
<?php }?>

<?php get_footer();?>

