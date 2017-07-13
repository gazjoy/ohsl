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
            $('.js-anchor-nav a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - header.outerHeight()
                    }, 1000);
                }
            });
        }
        
        function removeAnchor() {
            $('.js-anchor-nav a[href^="#"]').off('click');
        }
        
        enquire.register(breakpoint.sm, {
            setup : function() {
                this.unmatch();
            },
            match: function () {
                addAnchor();
            },
            unmatch: function () {
                removeAnchor();
            }
        });
        
    });
}(jQuery));