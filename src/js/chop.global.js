// Set Breakpoints
var breakpoint = {
    xs: "screen and (min-width: 30em)",
    sm: "screen and (min-width: 35em)",
    md: "screen and (min-width: 52em)",
    lg: "screen and (min-width: 62em)",
    xl: "screen and (min-width: 82em)"
};

;(function($){
    $(document).on('ready', function() {

        // =============================================
        // Overlay
        // =============================================

        $('#overlay').on('toggleactivate', function() {
            $('body').addClass('has-active-overlay');
        });

        $('#overlay').on('toggledeactivate', function() {
            $('body').removeClass('has-active-overlay');
        });
        
        
        // =============================================
        // Anchors
        // =============================================
        
        var header = $('#header');
        
        function addAnchor() {
            $('a.js-anchor-nav[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - header.outerHeight()
                    }, 1000);
                }
            });
        }
        
        addAnchor();
        
        
        // =============================================
        // Back to Top Anchor
        // =============================================
        
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //grab the "back to top" link
        $back_to_top = $('.js-topper');

        //hide or show the "back to top" link
        $(window).scroll(function(){
            ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('is-active') : $back_to_top.removeClass('is-active is-faded');
            if( $(this).scrollTop() > offset_opacity ) { 
                $back_to_top.addClass('is-faded');
            }
        });
        
    });
}(jQuery));