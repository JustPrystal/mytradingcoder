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
            let containerHeight = parseFloat(container.height());
            let lineHeight = parseFloat(container.css("line-height"));
            let lines = containerHeight / lineHeight
            console.log(i, lines)
            if (lines > 4){
                container.addClass("ellipsis")
                readMore.css("display", "block")
            } else {
                container.removeClass("ellipsis")
                readMore.css("display", "none")
            }
        }
    }
    // countLines()


    // links scroll
    $("a").on('click', function(event) {
      if ($(this)[0].hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
        if($(this).parents('.mobile-menu').length > 0){
          $('.mobile-menu').removeClass('active');
          $('.header').removeClass('menu-open');
        }
        var hash = $(this)[0].hash;
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {  
            window.scrollTo(0, $(hash).offset().top);
        }else{
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 50);
        }

        window.location.hash = hash;
      }
    });
})
// var videoContainer = document.getElementById('hire-me-video-container');
// var video = document.getElementById('hire-me-video');
// if (video){
//     var notLoaded = setInterval(() => {
//         if ( video.readyState === 4 ){
//             videoContainer.style.display = 'block';
//             clearInterval(notLoaded)
//         }
//     }, 1);
// }

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
  };
  const closeDialog = () => {
    $('.review-popup').removeClass('show');
  }
