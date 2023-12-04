<div class="banner-block">
    <div class="inner">
        <div class="left-col">
            <h1 class="heading">
                <?php echo $block['heading'];?>
            </h1>
            <div class="description">
                <?php echo $block['description'];?>
            </div>
            <div class="button-group">
                <a href="<?php echo $block['button']['url']?>" target="<?php echo $block['button']['target']?>" class="button"><?php echo $block['button']['title']?></a>
            </div>
        </div>
        <div class="right-col">
            <div class="form-block">
                <div class="form-header">
                    <div class="form-icon">
                        <img src="<?php echo $block['form']['form_icon']['url']?>" alt="">
                    </div>
                    <div class="text-col">
                        <div class="form-heading"><?php echo $block['form']['form_heading']; ?></div>
                        <div class="form-description"><?php echo $block['form']['form_description']; ?></div>
                    </div>
                </div>
                <div class="form-container">
                    <?php echo do_shortcode($block['form']['form_shortcode']); ?>
                </div>
            </div>
        </div>
    </div>
</div>