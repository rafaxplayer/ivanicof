/**
 * File init.js.
 *
 * javascript code for elements
 * 
 */

jQuery(document).ready(function ($) {

    var $body = $('body'),
        $menu = $('#site-navigation'),
        $header = $('.site-header'),
        $button = $('#menu_button'),
        $adminbar = $('#wpadminbar'),
        $buttonDown = $('#button-down'),
        $buttonClose = $('#close-button'),
        $buttonUp = $('#button-up');
        

    jQuery(window).on('scroll', function() { displaybuttonUp() });


    $buttonDown.on('click', function() { $('html,body').animate({ scrollTop: $("#site-navigation").offset().top-20 }, 1000); });

    $buttonUp.on('click', function(){ $('html,body').animate({ scrollTop: 0 }, 1000); });
        
    if($adminbar){
        $margin_height = $adminbar.outerHeight(true)+10;
        $button.css({'top': $margin_height +'px'})
    }

    $button.add($buttonClose).on('click',function(){ $menu.toggleClass('toggled'); });
    
    function displaybuttonUp(){
        var $top = jQuery(this).scrollTop();
        
        if ($top >= $header.outerHeight(true)) {
            $buttonUp.css({ 'bottom': '2rem' });
            
            $menu.addClass('fixed');
            if($adminbar && $body.width() >= 600){
                $('.main-navigation.fixed').css({'top': $adminbar.outerHeight(true)+'px'})
            }
        } else {
            $buttonUp.css({ 'bottom': '-5rem' });
            $menu.removeClass('fixed');
            $('.main-navigation').css({'top':'0'})
        }
        
    }

    displaybuttonUp();

    
    $('.flexslider').flexslider({
        animation: "slide",
        selector: ".slides > li",
        animationLoop: true,
        prevText: "",
        nextText: "",
        controlNav: false,
        itemWidth:300,
        itemMargin: 5
    });

    
    

} );
