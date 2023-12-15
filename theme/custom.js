$(document).ready(function(){
    //video thumbnail
    $(".video-container").click(function(){
        $(".video-thumbnail").hide(0);
        $(".video-container video").trigger("play");
    })

    //review read more
    function countLines(){
        for (let i = 0; i < $(".review-item").length; i++) {
            let readMore = $(".review-item").eq(i).find(".read-more");
            let container = $(".review-item").eq(i).find(".description");
            let containerHeight = parseInt(container.height());
            let lineHeight = parseInt(container.css("line-height"));
            let lines = containerHeight / lineHeight
            if (lines > 4){
                container.addClass("ellipsis")
                readMore.css("display", "block")
            } else {
                container.removeClass("ellipsis")
                readMore.css("display", "none")
            }
        }
    }
    countLines()
})
var videoContainer = document.getElementById('hire-me-video-container');
var video = document.getElementById('hire-me-video');
if (video){
    var notLoaded = setInterval(() => {
        console.log("not ready")
        if ( video.readyState === 4 ){
            console.log("loaded")
            videoContainer.style.display = 'block';
            clearInterval(notLoaded)
        }
    }, 1);
}

jQuery(document.body).on('click', '.read-more', function(){
    let review = $(this).parent().closest(".review-item");
    let description = review.find(".description").html();
    let popup = $(".review-popup");
    popup.find(".description").html(description);

    showDialog()
})
$(".close-popup").click(function(){
    closeDialog()
})
const showDialog = () => {
    $('.review-popup').addClass('show')
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.body;
    body.style.position = 'fixed';
    body.style.top = `-${scrollY}`;
  };
  const closeDialog = () => {
    const body = document.body;
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    $('.review-popup').removeClass('show');
  }
  window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
  });
