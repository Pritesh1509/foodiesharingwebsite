jQuery(document).ready(function(jQuery) {
    jQuery(".like-btn").on("click", function() {
        var button = jQuery(this);
        var c = button.data("count");

        jQuery.ajax({
            type: "POST",
            url: ajax_object.ajax_url,
            data: {
                action: "reel_like_func",
                c:c,
            },
            success: function(response) {
                button.text("❤️ " + response + " Likes");
            }
        });
    });

    jQuery('.share-container').hide();
    jQuery(".share-btn").click(function (event) {
        event.stopPropagation(); 
        var shareContainer = jQuery(this).next(".share-container"); 
        jQuery(".share-container").not(shareContainer).hide();
        shareContainer.toggle();
    });

    // jQuery('.reel').slick({
    //     vertical: true,          // Enables vertical scrolling
    //     loop:true,
    //     verticalSwiping: true,   // Allows swiping vertically
    //     slidesToShow: 1,         // Show one iframe at a time
    //     slidesToScroll: 1,
    //     infinite: true,          // Infinite scrolling
    //     autoplay: true,          // Auto-scroll
    //     autoplaySpeed: 3000,     // Change slide every 3 seconds
    //     arrows: false,           // Hide navigation arrows
    //     dots: true,              // Show pagination dots
    // });

    


});