jQuery(document).ready(function(){

jQuery('.ct_slider_link_items').each(function(){
            
    jQuery(this).click(function(){
        jQuery('.ct_slider_link_items').removeClass('clicked')
        var current_img = jQuery(this).attr("data-src")
        jQuery(this).addClass("clicked")
        
        jQuery('.ct_slider_link_items_img img').attr('src',current_img)
    });
})
});