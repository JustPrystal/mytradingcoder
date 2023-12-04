<div class="video-feature">
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
                        <li><?php echo $item['item']; ?></li>
                    <?php }?>
                </ul>
            </div>
            <div class="right-col">
                <div class="video-container">
                    <video src="<?php echo $block['video']['url']?>" controls></video>
                </div>
                <div class="button-group">
                    <a href="<?php echo $block['button']['url']; ?>" target="<?php echo $block['button']['target']?>"><?php echo $block['button']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</div>