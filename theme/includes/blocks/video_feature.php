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
                    <div class="video-thumbnail">
                        <img src="<?php echo $video_thumbnail?>" class="desktop" alt="" >
                        <img src="<?php echo $video_thumbnail_mobile?>" class="mobile" alt="" >
                    </div>
                    <video id="hire-me-video" controls>
                        <source src="<?php echo $video?>" />
                    </video>
                </div>
                <div class="button-group">
                    <a href="<?php echo $block['button']['url']; ?>" target="<?php echo $block['button']['target']?>"><?php echo $block['button']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var mobile_video = "<?php echo $video_mobile; ?>";
    var video = "<?php echo $video; ?>";

    jQuery(document).ready(function(){
        if (window.innerWidth < 568){
            jQuery('#hire-me-video-container video').attr('src', mobile_video).change();
        } else {
            jQuery('#hire-me-video-container video').attr('src', video).change();
        }
    });

    //on document resize swap out the video
    jQuery(window).resize(function(){
        if (window.innerWidth < 568){
            jQuery('#hire-me-video-container .video-thumbnail').show(0);
            jQuery('#hire-me-video-container video').attr('src', mobile_video).change();
        } else {
            jQuery('#hire-me-video-container .video-thumbnail').show(0);
            jQuery('#hire-me-video-container video').attr('src', video).change();
        }
    });
</script>