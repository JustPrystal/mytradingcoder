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
                    <div class="form-heading">
                        <?php echo $block['hubspot_embed']['heading'];?> 
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="58" height="58" rx="29" fill="#4A8CFF"/>
                            <rect x="1" y="1" width="58" height="58" rx="29" stroke="white" stroke-width="2"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2606 40C13.4598 40 12 38.5402 12 36.7394V25.5211C12 21.9196 14.9196 19 18.5211 19H34.2395C36.0401 19 37.4999 20.4598 37.4999 22.2605V33.4789C37.4999 37.0804 34.5803 40 30.9789 40H15.2606ZM48 37.0547V21.9459C48 20.7201 46.6093 20.0118 45.6177 20.733L40.9854 24.1019C40.2091 24.6664 39.7499 25.5682 39.7499 26.528V32.4727C39.7499 33.4325 40.2091 34.3343 40.9854 34.8989L45.6177 38.2678C46.6093 38.9889 48 38.2806 48 37.0547Z" fill="white"/>
                        </svg>
                    </div>
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