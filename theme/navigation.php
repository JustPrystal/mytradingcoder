<?php 
    $logo_desktop = get_field('logo_desktop', 'option');
    $logo_mobile = get_field('logo_mobile', 'option');
    $menu_center = get_field('menu_center', 'option');
    $menu_right = get_field('menu_right', 'option');

?>
<div class="header">
    <div class="inner">
        <div class="mobile-menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="17" viewBox="0 0 24 17" fill="none">
                <path d="M1.65517 6.62109C0.744828 6.62109 0 7.36592 0 8.27627C0 9.18661 0.744828 9.93144 1.65517 9.93144H14.069C14.9793 9.93144 15.7241 9.18661 15.7241 8.27627C15.7241 7.36592 14.9793 6.62109 14.069 6.62109H1.65517Z" fill="black"/>
                <path d="M24 1.65517C24 0.744828 23.2552 0 22.3448 0H1.65517C0.744828 0 0 0.744828 0 1.65517C0 2.56552 0.744828 3.31034 1.65517 3.31034H22.3448C23.2552 3.31034 24 2.56552 24 1.65517Z" fill="black"/>
                <path d="M5.7931 13.2415H1.65517C0.744828 13.2415 0 13.9863 0 14.8966C0 15.807 0.744828 16.5518 1.65517 16.5518H5.7931C6.70345 16.5518 7.44828 15.807 7.44828 14.8966C7.44828 13.9863 6.70345 13.2415 5.7931 13.2415Z" fill="black"/>
            </svg>
        </div>
        <div class="logo">
            <a href="<?php echo get_site_url();?>">
                <img src="<?php echo $logo_desktop['url']?>" alt="" class="desktop">
                <img src="<?php echo $logo_mobile['url']?>" alt="" class="mobile">
            </a>
        </div>
        <div class="nav-menu center">
            <?php if($menu_center){
                foreach($menu_center as $menu_item){
                    ?>
                    <div class="menu-item">
                        <a href="<?php echo $menu_item['link']['url']?>" target="<?php echo $menu_item['link']['target']?>"><?php echo $menu_item['link']['title']?></a>
                    </div>
                    <?php
                }
            }?>
        </div>
        <div class="nav-menu right">
            <?php if($menu_right){
                foreach($menu_right as $menu_item){
                    ?>
                    <div class="menu-item <?php echo $menu_item['type']; ?>">
                        <a href="<?php echo $menu_item['link']['url']?>" target="<?php echo $menu_item['link']['target']?>"><?php echo $menu_item['link']['title']?></a>
                    </div>
                    <?php
                }
            }?>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="top-bar">
            <div class="logo">
                <a href="<?php echo get_site_url();?>">
                    <img src="<?php echo $logo_desktop['url']?>" alt="">
                </a>
            </div>
            <div class="close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6.4 19L5 17.6L10.6 12L5 6.4L6.4 5L12 10.6L17.6 5L19 6.4L13.4 12L19 17.6L17.6 19L12 13.4L6.4 19Z" fill="black"/>
                </svg>
            </div>
        </div>
        <div class="menu-inner">
            <?php if($menu_center){
                foreach($menu_center as $menu_item){
                    ?>
                    <div class="menu-item">
                        <a href="<?php echo $menu_item['link']['url']?>" target="<?php echo $menu_item['link']['target']?>"><?php echo $menu_item['link']['title']?></a>
                    </div>
                    <?php
                }
            }?>
            <?php if($menu_right){
                foreach($menu_right as $menu_item){
                    ?>
                    <div class="menu-item <?php echo $menu_item['type']; ?>">
                        <a href="<?php echo $menu_item['link']['url']?>" target="<?php echo $menu_item['link']['target']?>"><?php echo $menu_item['link']['title']?></a>
                    </div>
                    <?php
                }
            }?>
        </div>
        <div class="copyright">
            Copyright © <?php echo date('Y'); ?> All Rights Reserved
        </div>
    </div>
</div>
<script>
    jQuery('.mobile-menu-icon').click(function(){
        jQuery('.mobile-menu').addClass('active');
        jQuery('.header').addClass('menu-open');
    });
    jQuery('.mobile-menu .close').click(function(){
        jQuery('.mobile-menu').removeClass('active');
        jQuery('.header').removeClass('menu-open');
    })

    //write a function that lets you smooth scroll to any element on the page
    function smoothScroll(target){
        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top
        }, 1000);
    }
    //write a click function for each menu item that calls the smoothScroll function
    jQuery('.nav-menu.center .menu-item a').click(function(e){
        e.preventDefault();
        if(window.location.href !== window.location.origin+'/'){
           window.location.href =  jQuery(this).attr('href');
           return;
        }
        var href = jQuery(this).attr('href');
        var target = href.replace(window.location.origin+'/', '');
        smoothScroll(target);
    });
    jQuery('.mobile-menu .menu-item a').click(function(e){
        e.preventDefault();
        if(window.location.href != window.location.origin+'/'){
           window.location.href = jQuery(this).attr('href');
           return;
        }
        jQuery('.mobile-menu').removeClass('active');
        jQuery('.header').removeClass('menu-open');
        var href = jQuery(this).attr('href');
        var target = href.replace(window.location.origin+'/', '');
        smoothScroll(target);
    })
</script>