<?php 
    $logo = get_field('footer_logo', 'option');
    $description = get_field('footer_description', 'option');
    $menu = get_field('footer_menu', 'option');
    $email = get_field('contact_email', 'option');
    $phone = get_field('contact_phone', 'option');
    $bottom_menu = get_field('footer_bottom_menu', 'option');
?>
    <div class="footer">
        <div class="inner">
            <div class="logo-container">
                <div class="logo-wrap">
                    <a href="<?php echo get_site_url();?>">
                        <img src="<?php echo $logo['url']; ?>" alt="">
                    </a>
                </div>
                <div class="description"><?php echo $description?></div>
            </div>
            <div class="menu-wrap">
                <?php foreach($menu as $menu_col){?>
                    <div class="menu-col">
                        <div class="column-name"><?php echo $menu_col['column_name']; ?></div>
                        <div class="menu-inner">
                            <?php foreach($menu_col['items'] as $menu_item){?>
                                <div class="menu-item">
                                    <a href="<?php echo $menu_item['link']['url']; ?>" target="<?php echo $menu_item['link']['target']; ?>"><?php echo $menu_item['link']['title']; ?></a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php }?>
                <div class="menu-col contact">
                    <div class="column-name">Contact me</div>
                    <div class="menu-inner">
                        <?php if($email){?>
                            <div class="menu-item">
                                <a href="mailto:<?php echo $email;?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <path d="M4 20.875C3.45 20.875 2.97917 20.6792 2.5875 20.2875C2.19583 19.8958 2 19.425 2 18.875V6.875C2 6.325 2.19583 5.85417 2.5875 5.4625C2.97917 5.07083 3.45 4.875 4 4.875H20C20.55 4.875 21.0208 5.07083 21.4125 5.4625C21.8042 5.85417 22 6.325 22 6.875V18.875C22 19.425 21.8042 19.8958 21.4125 20.2875C21.0208 20.6792 20.55 20.875 20 20.875H4ZM12 13.875L4 8.875V18.875H20V8.875L12 13.875ZM12 11.875L20 6.875H4L12 11.875ZM4 8.875V6.875V18.875V8.875Z" fill="#898989"/>
                                    </svg>
                                    <?php echo $email;?>
                                </a>
                            </div>
                        <?php }?>
                        <?php if($phone){?>
                            <div class="menu-item">
                                <a href="tel:<?php echo $phone;?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                        <path d="M19.95 21.875C17.8667 21.875 15.8083 21.4208 13.775 20.5125C11.7417 19.6042 9.89167 18.3167 8.225 16.65C6.55833 14.9833 5.27083 13.1333 4.3625 11.1C3.45417 9.06667 3 7.00833 3 4.925C3 4.625 3.1 4.375 3.3 4.175C3.5 3.975 3.75 3.875 4.05 3.875H8.1C8.33333 3.875 8.54167 3.95417 8.725 4.1125C8.90833 4.27083 9.01667 4.45833 9.05 4.675L9.7 8.175C9.73333 8.44167 9.725 8.66667 9.675 8.85C9.625 9.03333 9.53333 9.19167 9.4 9.325L6.975 11.775C7.30833 12.3917 7.70417 12.9875 8.1625 13.5625C8.62083 14.1375 9.125 14.6917 9.675 15.225C10.1917 15.7417 10.7333 16.2208 11.3 16.6625C11.8667 17.1042 12.4667 17.5083 13.1 17.875L15.45 15.525C15.6 15.375 15.7958 15.2625 16.0375 15.1875C16.2792 15.1125 16.5167 15.0917 16.75 15.125L20.2 15.825C20.4333 15.8917 20.625 16.0125 20.775 16.1875C20.925 16.3625 21 16.5583 21 16.775V20.825C21 21.125 20.9 21.375 20.7 21.575C20.5 21.775 20.25 21.875 19.95 21.875ZM6.025 9.875L7.675 8.225L7.25 5.875H5.025C5.10833 6.55833 5.225 7.23333 5.375 7.9C5.525 8.56667 5.74167 9.225 6.025 9.875ZM14.975 18.825C15.625 19.1083 16.2875 19.3333 16.9625 19.5C17.6375 19.6667 18.3167 19.775 19 19.825V17.625L16.65 17.15L14.975 18.825Z" fill="#898989"/>
                                    </svg>
                                    <?php echo $phone;?>
                                </a>
                            </div>
                        <?php }?>
                        <div class="menu-col">
                            <div class="column-name mob">Legal</div>
                            <div class="menu-inner legal">
                                <?php foreach($bottom_menu as $menu_item){?>
                                    <div class="menu-item">
                                        <a href="<?php echo $menu_item['link']['url']; ?>" target="<?php echo $menu_item['link']['target']; ?>"><?php echo $menu_item['link']['title']; ?></a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                Copyright © <?php echo Date('Y');?> All Rights Reserved.
            </div>
        </div>
    </div>
       
    
    </div><!-- closing all div -->
    <?php wp_footer(); ?>
	</body>
</html>
