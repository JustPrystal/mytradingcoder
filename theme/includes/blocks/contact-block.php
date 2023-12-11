<div class="contact-block">
    <div class="inner">
        <div class="heading"><?php echo $block['heading'];?></div>
        <div class="inner-wrap">
            <div class="form-block-wrapper">
                <div class="form-top">
                    <div class="form-heading"><?php echo $block['form']['Heading'];?></div>
                    <div class="form-description"><?php echo $block['form']['description'];?></div>
                </div>
                <div class="form-block">
                    <div class="form-header">
                        <div class="form-icon">
                            <img src="<?php echo $block['form']['form']['form_icon']['url']?>" alt="">
                        </div>
                        <div class="text-col">
                            <div class="form-heading"><?php echo $block['form']['form']['form_heading']; ?></div>
                            <div class="form-description"><?php echo $block['form']['form']['form_description']; ?></div>
                        </div>
                    </div>
                    <div class="form-container">
                        <?php echo do_shortcode($block['form']['form']['form_shortcode']); ?>
                    </div>
                </div>
            </div>
            <div class="or">
                <div class="circle">
                    OR
                </div>
            </div>
            <div class="hubspot-embed">
                <div class="form-top">
                    <div class="form-heading"><?php echo $block['hubspot_embed']['heading'];?></div>
                    <div class="form-description"><?php echo $block['hubspot_embed']['description'];?></div>
                </div>
                <!-- Start of Meetings Embed Script -->
                    <div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/ali-usmansajid02?embed=true"></div>
                    <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
                <!-- End of Meetings Embed Script -->
            </div>
        </div>
    </div>
</div>