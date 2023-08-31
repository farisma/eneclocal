
<?php
function sc_custom_image_slider_fn() {
ob_start();
?>
<div class="qode_elementor_container_inner">
        <div class="ct_slider_section">
            <div class="ct_slider_1">
                   
                    <div class="ct_slider_link_items clicked"  data-src="<?php echo get_stylesheet_directory_uri() . '/images/home-sec-4.jpg'?>" >
                        <div class="ct_link_item_1">1</div>
                        <div class="ct_link_item_2"><p>Secure recognition for nuclear energy as a clean energy source for decarbonization and as part of a realistic approach to driving a secure and inclusive energy transition;</p></div>
                   </div>
                   <div class="ct_slider_link_items" data-src="<?php echo get_stylesheet_directory_uri() . '/images/home-sec-5.jpg'?>">
                    <div class="ct_link_item_1">2</div>
                    <div class="ct_link_item_2"><p>Unite the industry with civil society, advocates, investors and other key players to create the widest reach and impact on the role nuclear energy can play in achieving Net Zero,</p></div>
                   </div>
                   <div class="ct_slider_link_items" data-src="<?php echo get_stylesheet_directory_uri() . '/images/home-sec5.jpg'?>">
                    <div class="ct_link_item_1">3</div>
                    <div class="ct_link_item_2"><p>Establish the right social, political and economic drivers for nuclear's inclusion in current and future energy systems, and remove barriers towards its development;</p></div>
                   </div>
                   <div class="ct_slider_link_items" data-src="<?php echo get_stylesheet_directory_uri() . '/images/home-sec-4.jpg'?>">
                        <div class="ct_link_item_1">4</div>
                        <div class="ct_link_item_2"><p>Facilitate partnerships across the energy sector and with industry to drive rapid deployment at scale in both established and new nuclear nations.</p></div>
                   </div>
                   <div class="ct_slider_link_items" data-src="<?php echo get_stylesheet_directory_uri() . '/images/home-sec5.jpg'?>">
                    <div class="ct_link_item_1">5</div>
                    <div class="ct_link_item_2"><p>Offer a voice of hope to young people and others concerned by climate change, by providing the information they need to understand the keys to solving climate change and energy security are within arm's reach through the use of nuclear energy alongside other clean sources of power.</p></div>
               </div>
            </div>
            <div class="ct_slider_2">
                <div class="ct_slider_link_items_img">
                    <img src="<?php echo get_stylesheet_directory_uri() . '/images/home-sec-4.jpg'?>" width="100%" height="100%">
                </div>
            </div>
        </div>

    </div>

    <?php 
 wp_reset_postdata();
 return ob_get_clean();    
}
add_shortcode("sc_custom_image_slider","sc_custom_image_slider_fn");
    ?>