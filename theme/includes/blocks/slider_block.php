<div class="slider-block">
    <div class="inner">
        <div class="heading"><?php echo $block['heading'];?></div>
        <div class="description"><?php echo $block['description'];?></div>
        <div class="slider-wrap">
            <?php foreach($block['slides']as $slide){
                ?>
                <div class="slide-item">
                    <div class="image-wrap">
                        <img src="<?php echo $slide['image']['url']?>" alt="">
                    </div>
                    <div class="slide-description">
                        <?php echo $slide['description']; ?>
                    </div>
                </div>
                <?php 
            }?>
        </div>
    </div>
</div>