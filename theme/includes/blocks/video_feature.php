<?php
    $video_thumbnail = $block['video_thumbnail'];
    $video = $block['video']['url'];
    $video_thumbnail_mobile = $block['video_thumbnail_mobile'];
    $video_mobile = $block['video_mobile']['url'];
?>

<div class="video-feature <?php if($block['show_arrow']){ echo 'arrow'; }?>" id="why-me">
    <div class="inner">
        <div class="sub-heading"><?php echo $block['sub_heading']?></div>
        <div class="heading"><?php echo $block['heading']?></div>
        <div class="inner-wrap">
            <div class="left-col">
                <div class="feature">
                    <div class="feature-icon">
                        <img src="<?php echo $block['accomplishments']['feature_icon']['url']?>" alt="">
                    </div>
                    <div class="text-wrap">
                        <?php echo $block['accomplishments']['title'];?>
                        <img src="<?php echo $block['accomplishments']['brand_logo']['url'];?>" alt="">
                    </div>
                </div>
                <ul class="accomplishments">
                    <?php foreach($block['accomplishments']['line_items'] as $item){?>
                        <li>
                            <?php echo $item['item']; 
                            if ($item['image']){?> 
                            <img src="<?php echo $item['image']['url']; ?>" alt="">
                            <?php } ?>
                        </li>
                    <?php }?>
                </ul>
            </div>
            <div class="right-col">
                <div class="video-container" id="hire-me-video-container">
                    <picture class="video-thumbnail">
                        <source srcset="<?php echo $video_thumbnail_mobile?>" media="(max-width: 567px)"/>
                        <img src="<?php echo $video_thumbnail?>" alt="" >
                    </picture>
                    <video id="hire-me-video"  controls>
                        <source src="<?php echo $video?>" media="(min-width: 568px)"/>
                        <source src="<?php echo $video_mobile?>"/>
                    </video>
                </div>
                <div class="button-group">
                    <a href="<?php echo $block['button']['url']; ?>" target="<?php echo $block['button']['target']?>"><?php echo $block['button']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>