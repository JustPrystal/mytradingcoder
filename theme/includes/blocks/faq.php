<div class="faq" id="faq">
    <div class="inner">
        <div class="heading"><?php echo $block['heading']; ?></div>
        <div class="faq-wrap">
            <?php foreach($block['faqs'] as $faq){?>
                <div class="faq-item">
                    <div class="faq-header">
                        <div class="circle"></div>
                        <div class="question">
                            <?php echo $faq['question'];?>
                            <div class="arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M8 4.875L16 12.875L8 20.875" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="faq-body">
                        <?php echo $faq['answer']; ?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<script>
    jQuery('.faq-wrap .faq-item').click(function(){
        var that = jQuery(this);
        if(jQuery(this).hasClass('active')){
            jQuery(this).find('.faq-body').slideUp(400, function(){
                that.removeClass('active');
            });
        }else{
            jQuery('.faq-wrap .faq-item').removeClass('active');
            jQuery('.faq-wrap .faq-item .faq-body').slideUp();
            jQuery(this).addClass('active');
            jQuery(this).find('.faq-body').slideDown();
        }
    })
</script>