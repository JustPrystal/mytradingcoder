<div class="how-it-works" id="how-it-works">
    <div class="inner">
        <div class="sub-heading"><?php echo $block['sub_heading'];?></div>
        <div class="heading"><?php echo $block['heading'];?></div>
        <div class="steps-wrap">
            <?php $i=1; foreach($block['steps'] as $step){?>
                <div class="step-item">
                    <div class="image-wrap">
                        <img src="<?php echo $step['image']['url']; ?>" alt="">
                    </div>
                    <div class="step-count">
                        Step 0<?php echo $i;?>
                    </div>
                    <div class="step-name">
                        <?php echo $step['title'];?>
                    </div>
                    <div class="step-description">
                        <?php echo $step['description'];?>
                    </div>
                </div>
            <?php $i++; }?>
        </div>
        <div class="button-wrap">
            <a href="<?php echo $block['button']['url']; ?>" target="<?php echo $block['button']['target']; ?>"> <?php echo $block['button']['title']; ?></a>
        </div>
    </div>
</div>