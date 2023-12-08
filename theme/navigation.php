<?php 
    $logo_desktop = get_field('logo_desktop', 'option');
    $logo_mobile = get_field('logo_mobile', 'option');
    $menu_center = get_field('menu_center', 'option');
    $menu_right = get_field('menu_right', 'option');

?>
<div class="header">
    <div class="inner">
        <div class="logo">
            <a href="<?php echo get_site_url();?>">
                <img src="<?php echo $logo_desktop['url']?>" alt="">
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
</div>