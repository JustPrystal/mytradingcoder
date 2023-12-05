<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'banner_block':
              include 'blocks/banner_block.php';
              break;
            case 'video_feature_block':
              include 'blocks/video_feature.php';
              break;
            case 'slider_block':
              include 'blocks/slider_block.php';
              break;
            case 'linear_slider_block':
              include 'blocks/linear_slider.php';
              break;
            
          }
        }
      }
    }
  }

?>