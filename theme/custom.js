$(document).ready(function(){
    //video thumbnail
    $(".video-container").click(function(){
        $(".video-thumbnail").hide(0);
        $(".video-container video").trigger("play");
    })
})