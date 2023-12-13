<?php $logo = get_field('logo_desktop', 'option');?>
<?php get_header();?>
<div class="page-404">
    <div class="inner">
        <div class="logo">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
            </a>
        </div>
        <div class="heading">404</div>
        <div class="sub-heading">Page not found</div>
        <div class="description">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div>
        <div class="button">
            <a href="<?php echo site_url(); ?>">Go to home</a>
        </div>
    </div>
</div>
<?php get_footer();?>